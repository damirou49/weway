<?php
session_start();
require_once ('../class/user.php');
if (!isset($_SESSION['id']) || empty($_SESSION['id']))
{
  header('location:connexion.php');
  exit();
}
$objectUser = new user();
$user = $objectUser -> getUserById($_SESSION['id']);
echo "<pre>";
print_r($user);
if(isset($_POST))
{
  $modifUser = $objectUser ->updateUserById($_SESSION['id'], $_POST);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Acceuil Transporteur</title>
    <link rel="shortcut icon" type="images/logo.png" href="logo.png" />
    <link rel="stylesheet" href="css/pageMembreTransporteurs.css">
      <style>
          @import url('https://fonts.googleapis.com/css?family=Bungee|Spectral+SC|Vollkorn+SC');
</style>
  </head>
  <body>
      <header class="block-header">

      <h1 class="logo"><a href="/"> <img src="../images/logo.png"
      alt="logo We Way">
      </a></h1>
        <nav class="block-nav">
          <ul class="menu">
            <li><a href="../pageIndex/index.php" class="#">Accueil</a></li>

            <li><a href="../pageContact/pageContact.php" class="#">Contact</a></li>
            <li><a href="../pageLogin/pageLogin.php" class="#">Déconnexion</a></li>
          </ul>
        </nav>


          <div class="deconexion">



          <img src="../images/trucklog.png" >

          </div>

	 </header>

      <main class="block-main" role="button">
        <?php if(!empty($modifUser)){
          echo "<div class='alert'".$modifUser['class'].">".$modifUser['message']."</div>";
        } ?>

      <div class="inner">
          <div class="niv1">

            <input type="button" name="request" id= "dispo" value=" Créer une disponibilité " onclick="self.location.href='pageAnnexes/dispo/dispo.html'" >
            <input type="button" name="trFav" id="parc" value=" Gestion du parc " onclick="self.location.href='pageAnnexes/parc/parc.html'" >
            <input type="button" name="settings" id="exploi" value= "Exploitation" onclick="self.location.href='pageAnnexes/exploi/exploi.html'" >
            <input type="button" name="settings" id="notif" value= "Notifcation" onclick="self.location.href='pageAnnexes/editerProfil/editerProfil.php'" >
            <input type="button" name="folow" id="suivi" value= " Suivi de commande " onclick="self.location.href='pageAnnexes/suivi/suivi.html'" >
            <input type="button" name="invoice" id="factu" value= " Facturation " onclick="self.location.href='pageAnnexes/factu/factu.html'" >

          </div>



      </div>




      </main>

  </body>
</html>
