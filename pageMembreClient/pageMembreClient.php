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
    <title>Acceuil Donneur d'ordre</title>
    <link rel="shortcut icon" type="images/logo.png" href="logo.png" />
    <link rel="stylesheet" href="css/pageMembreClient.css">
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



      <div class="block-center">
        <?php if(!empty($modifUser)){
          echo "<div class='alert'".$modifUser['class'].">".$modifUser['message']."</div>";
        } ?>

      <main class="block-main" role="button">

        <div class="bienvenue">Bienvenue</div>





        <div class="user"> Nom-Prenom
            </div>



      <div class="inner">
          <div class="niv1">

              <input type="button" name="request" id = "demande" value=" Créer une demande " onclick="self.location.href='pagesAnnexes/creerUneDemande/creerDemande.html'" >
              <input type="button" name="trFav" id="favoris" value=" Mes Transporteurs " onclick="self.location.href='pagesAnnexes/transporteursFavoris/transporteursFavoris.html'">
              <input type="button" name="settings" id="profil" value=" Editer mon profil " onclick="self.location.href='pagesAnnexes/editerProfil/editerProfil.php'" >
              <input type="button" name="settings"   value=" Paramètrages " onclick="self.location.href='pagesAnnexes/parametrage/parametrages.html'" >
              <input type="button" name="folow" id="suivi" value=" Suivi de commande " onclick="self.location.href='pagesAnnexes/suiviCommande/suiviCommande.html'" >
              <input type="button" name="invoice" id="factu" value="Facturation " onclick="self.location.href='pagesAnnexes/facturation/facturation.html'" >


          </div>



      </div>




      </main>

</div>
  </body>
</html>
