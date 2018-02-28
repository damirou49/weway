    <?php include('../inc/header.php') ?>
  </header>
  <div class="blovk-center">
    <main class="block-main">
      <?php
      if (isset($_GET['erreur']) && $_GET['erreur']==1)
      {
        echo"
        <div class='alert alert-danger'>Aucun utilisateur ne correspond à cette adresse email.</div>
        ";
      }
      elseif (isset($_GET['erreur']) && $_GET['erreur']==2)
      {
        echo"
        <div class='alert alert-danger'>Le mot de passe est incorrect</div>
        ";
      }
      elseif (isset($_GET['erreur']) && $_GET['erreur']==3)
      {
        echo"
        <div class='alert alert-danger'>Tous les champs doivent être complétés ! </div>
        ";
      }
      ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="slogan"> La connexion c'est maintenant ! </div>

            <form action="http://localhost/weWay/action/connexion.php" method="POST">

              <div method="post" action="../action/connexion.php" class="form-group first-information">
               <label for="Email">Adresse Email</label>
               <input type="email" name="mail" id="inputEmail" class="form-control" placeholder="Votre Email">
             </div>

             <div method="post" action="../action/connexion.php" class="form-group">
               <label for="Password">Mot de passe</label>
               <input type="password" name="mot_de_passe" id="inputPassword" class="form-control" placeholder="Votre mot de passe">
             </div>

             <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Se souvenir de moi
              </label>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">GO !</button>
          </form>

        </div>
      </div>
    </div>
  </main>
</div>
<script src="vendors/jquery/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../assets/js/vendor/popper.min.js"></script>
      <script src="../dist/js/bootstrap.min.js"></script>
      <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
      <script src="../assets/js/vendor/holder.min.js"></script>
    </body>
    </html>
