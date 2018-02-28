<?php include('../inc/header.php') ?>


</header>
<main class="block-main">

  <div class="container">
    <div class="row">
      <div class="col-12">

        <form action="http://localhost:8888/weWay/action/addUser.php" method="POST">

          <div class="slogan"> Modifiez votre profil ! </div>


          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="mail" placeholder="Votre adresse Email">
          </div>

          <div class="form-group">
            <label for="Nom">Confirmation de l'adresse Email</label>
            <input type="email" class="form-control" name="mail2" placeholder="Confirmation de l'adresse Email ">
          </div>


          <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" name="mot_de_passe" placeholder="Votre de mot de passe">
          </div>

          <div class="form-group">
            <label for="password">Confirmation du mot de passe</label>
            <input type="password" class="form-control" name="mot_de_passe2" placeholder="Confirmation du mot de passe">
          </div>

          <button type="submit" name="submit" class="btn btn-primary"> Modifier </button>
        </form>
      </div>
    </div>




  </main>
 <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../../assets/js/vendor/popper.min.js"></script>
  <script src="../../../dist/js/bootstrap.min.js"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="../../../assets/js/vendor/holder.min.js"></script>


</body>
</html>
