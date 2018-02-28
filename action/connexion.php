<?php
session_start();
require_once ('../include/database.php');

if(isset($_POST['submit']))
{
  $mail=htmlentities(trim($_POST['mail']));
  $mot_de_passe=md5($_POST['mot_de_passe']);

  if(!empty($mot_de_passe) && !empty($mail)&&filter_var($mail,FILTER_VALIDATE_EMAIL))
  {
    $connectDatabase = new db();
    $bdd = $connectDatabase->connectDatabase();
    $verifmail = $bdd->prepare('SELECT * FROM users WHERE mail = ?');
    $verifmail->execute(array($mail));

    if($verifmail->rowCount() <= 0)
    {
      header('Location:../connexion.php?erreur=1');
      exit();
    }
    else
    {
      $connectDatabase = new db();
      $bdd = $connectDatabase->connectDatabase();
      $requser = $bdd->prepare("SELECT * FROM users WHERE mail = ? AND mot_de_passe = ?");
      $requser->execute(array($mail, $mot_de_passe));

      $userexist = $requser->rowCount();
      if ($userexist == 1)
      {
        $userinfo = $requser->fetch();

        session_start();
        $_SESSION['id'] = $userinfo['id'];
        $_SESSION['mail'] = $userinfo['mail'];
        $_SESSION['nom'] = $userinfo['nom'];
        $_SESSION['prenom'] = $userinfo['prenom'];
        header('location:../moncompte.php');
      }
      else
      {
        header('Location:../connexion.php?erreur=2');
        exit();
      }
    }
  }
  else
  {
    header('Location:../connexion.php?erreur=3');
    exit();
  }
}
?>
