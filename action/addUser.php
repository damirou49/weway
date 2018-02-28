<?php
  require_once ('../include/database.php');
  if(isset($_POST['submit']))
  {  //vérif formulaire

    if(empty($_POST['mail']) || empty($_POST['mot_de_passe']) || empty($_POST['nom']) || empty($_POST['prenom']))//|| empty($_POST['id_categorie_users'])) //verif form vide
  {
    header('location:../pageInscription/pageInscription.php?ajouter=4');
  }
  else{ // enregistrement des donnees dans 1 var
    $mail=htmlentities(trim($_POST['mail']));
    $mail2=htmlentities(trim($_POST['mail2']));
    $mot_de_passe=$_POST['mot_de_passe'];
    $mot_de_passe2=$_POST['mot_de_passe2'];
    $nom=htmlentities(trim($_POST['nom']));
    $prenom=htmlentities(trim($_POST['prenom']));
    // $id_categorie_users=htmlentities(trim($_POST['id_categorie_users']));


    if($mot_de_passe==$mot_de_passe2)
    {
        $mot_de_passe=md5($mot_de_passe); //hacher le mdp

        if($mail != $mail2 && filter_var($mail, FILTER_VALIDATE_EMAIL))
        {
          header('location:../pageInscription/pageInscription.php?ajouter=3');
        }
        else
        {
          $connectdatabase = new db();
          $bdd = $connectdatabase->connectDatabase();
          $verifmail = $bdd->prepare('SELECT mail FROM users WHERE mail = ?');
          $verifmail->execute(array($mail));

          if ($verifmail->rowCount() > 0)
          {
            header('location:../pageInscription/pageInscription.php?ajouter=5');
            exit();
          }
          else
          {
            $inserer = $bdd->prepare('INSERT INTO users(mail, mot_de_passe, nom, prenom) VALUES(?, ?, ?, ?)');
            $inserer->execute(array($mail, $mot_de_passe, $nom, $prenom));
            header('location:../pageInscription/pageInscription.php?ajouter=1');
          }
        }
      }
      else
      {
        header('location:../pageInscription/pageInscription.php?ajouter=2');
      }
  }
}
?>
