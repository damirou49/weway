<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Notification</title>
    <link rel="shortcut icon" type="image/logo.png" href="logo.png" />
    <link rel="stylesheet" href="css/notif.css">
       <style>
          @import url('https://fonts.googleapis.com/css?family=Bungee|Spectral+SC|Vollkorn+SC');
</style>

  </head>
  <body>
      <header class="block-header">

      <h1 class="logo"><a href="../../../pageIndex/pageIndex.php"> <img src="../../../images/logo.png"
      alt="logo We Way">
      </a></h1>
        <nav class="block-nav">
          <ul class="menu">
            <li><a href="../pageDispo/dispo.html"> Créer une disponibilité</a> </li>
            <li><a href="../pageExploi/exploi.html"> Exploitation </a></li>
            <li><a href="../pageFactu/factu.html"> Facturation</a></li>
            <li><a href="../pageSuivi/suivi.html">Suivi  </a></li>
            <li><a href="../pageParc/parc.html"> Gestion du parc </a></li>
          </ul>
        </nav>


          <div class="deconexion">



          <img src="../../../images/trucklog.png" >

          </div>

	 </header>
   <main class="block-main">

     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <?php if(!empty($modifUser)){
             echo "<div class='alert'".$modifUser['class'].">".$modifUser['message']."</div>";
           } ?>
           <form method="post">
             <!-- <fieldset>
               <legend>formulaire inscription</legend> -->
               <div class="form-group">
                 <h1>Modifier vos info</h1>
                 <input class="form-control" type="text" name="firstname" value="<?php echo $user['user_prenom'] ?>" placeholder="Modifié prénom" id="firstname">
                 <input class="form-control" type="text" name="name" value="<?php echo $user['user_nom'] ?>" placeholder="Modifié nom" id="name">
               </div>
               <div class="form-group">
                 <!-- <label for="id">identifiant</label>
                 <input type="text" name="identifiant" placeholder="identifiant" id="id"> -->
                 <label>Nouveau mots de passe</label>
                 <input class="form-control" type="password" name="mdp" value="mot de passe" placeholder=" Modifié mot de passe" id="MDP">
                 <label>Confirmer le nouveau mot de passe</label>
                 <input class="form-control" type="password" name="mdpc" value="mot de passe" placeholder="confirm mot de passe" id="MDP2">
                 <label>Mot de passe actuel</label>
                 <input class="form-control" type="password" name="mdpa" value="mot de passe" placeholder="Mots de passe actuel" id="MDP2">
               </div>
               <div class="form-group">
                 <input class="form-control" type="email" name="email" value="<?php echo $user['user_email'] ?>"placeholder="Modifié Adresse mail" id="email">
                 <input class="form-control" type="email" name="confirm_email" value="<?php echo $user['user_email'] ?>" placeholder="Confirm mail" id="email-confirm">
               </div>
               <div class="form-group">
                 <input class="form-control" type="date" name="date_naissance" value="<?php echo $user['user_naissance'] ?>" placeholder="Modifié votre date naissance" id="date-naissance">
                 <button type="submit" name="button">Modifié l'utilisateur</button>
               </div>



   </main>

  </body>
</html>
