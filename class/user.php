<?php
require_once ('../include/database.php');

class user
{
  private $bdd;

  function __construct()
  {
    $this->bdd = new db();
  }

  public function getUserById($id)
  {
    $connect = $this->bdd->connectDatabase();
    $user = $connection->prepare('SELECT * FROM users WHERE id= ?');
    $user->execute(array($id));
    return $user->fetch();
  }

  public function updateUserById($id, $userinfo)
  {
    if($userinfo['mot_de_passe'] != 'mot de passe' || $userinfo['mot_de_passe2'] != 'mot de passe' || $userinfo['mot_de_passe_actuel'] != 'mot de passe')
    {
      if ($userinfo['mot_de_passe'] != $userinfo['mot_de_passe2'])
      {
        return array('success' => false,'class'=>'alert-danger', 'message'=>'Attention les mots de passe ne sont pas identique !' );
      }
    }

    $mail=$userinfo['mail'];
    $mot_de_passe=md5($userinfo['mot_de_passe']);
    $nom=$userinfo['nom'];
    $prenom=$userinfo['prenom'];

    //on se connecte à la bdd
    $connect = $this->bdd->connectDatabase();
    //on prepare notre requete UPDATE pour mettre à jour l'utilisateur connecté
    $user = $connect->prepare('UPDATE users SET mail= ?, mot_de_passe= ?, nom = ?, prenom = ? WHERE id = ?');
    //on execute la requête
    $user->execute(array($id, $mail, $mot_de_passe, $nom, $prenom));

    //on retourne true
    return array('success' => true, 'class'=>'alert-success', 'message'=> 'vous venez de modifier vos informations');
  }
}
?>
