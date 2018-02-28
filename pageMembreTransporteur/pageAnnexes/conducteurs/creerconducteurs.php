<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exploitation</title>
  <link rel="shortcut icon" type="image/logo.png" href="logo.png" />
  <link rel="stylesheet" href="../../../vendors/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/conducteurs.css">
  <style>
  @import url('https://fonts.googleapis.com/css?family=Bungee|Spectral+SC|Vollkorn+SC');
</style> 


</head>
<body>
  <header class="block-header">




   <nav class="navbar navbar-expand-md navbar-dark fixed-top "  >
    <img class="logo"  href="../pageIndex/pageIndex.php"   src="../../../images/logo.png" >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
          <a class="nav-link" href="../dispo/dispo.html">Créer une disponibilité</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link disabled" href="../exploi/exploi.php">Exploitation</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link disabled" href="../factu/factu.php">Facturation</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link disabled" href="../conducteurs/conducteurs.php">Conducteurs</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link disabled" href="../suivi/suivi.php">Suivi</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link disabled" href="../parc/parc.php">Gestion du parc</a>
        </li>
      </ul>


      <div class="deconexion">
        <img src="../../../images/truck.png" >
      </div>

    </div>
  </nav>

</header>



<div class="block-center">

  <main class="block-main">

    <div class="container">
      <div class="row">

        <div class="col-8">


          <form class="ship">

            <div class="slogan">  Créer le profil d'un conducteur</div>



            <div class="row">
              <div class="col-6">
                <label for="exampleFormControlInput1">Nom</label>


                <input type="text" class="form-control" placeholder="Nom">
              </div>
              <div class="col-6">
                 <label for="exampleFormControlInput1">Prénom</label>
                <input type="text" class="form-control" placeholder="Prénom">
              </div>
            </div>

            <div class="row">
              <div class="col-6">
                 <label for="exampleFormControlInput1">Date d'arivée</label>
                <input type="date" class="form-control" placeholder="Date d'arivée">
              </div>
               <div class="form-group col-md-6">
                 <label for="exampleFormControlInput1">Matière dangereuse</label>
                <select id="inputState" class="form-control">
                  <option selected>Matière Dangereuse</option>
                  <option>oui</option>
                  <option>non</option>
                </select>
                
              </div>
            </div>

            <div class="row">
              <div class="col-6">
                 <label for="exampleFormControlInput1">Validité Permis</label>
                <input type="date" class="form-control" placeholder="Validité Permis">
              </div>
               <div class="col-6">
                 <label for="exampleFormControlInput1">Validité Certe conducteur</label>
                <input type="date" class="form-control" placeholder="Validité Permis">
              </div>
            </div>
          </form>

         




          </div>

          <div class="col-4">



            <div class="card  " style="width: 18rem;">
              <img class="card-img-top" src="../../../images/driver.jpg" alt="Card image cap">
              <div class="card-body">
                
                
                
              </div>
            </div>


          </div>


          <button type="submit" name="submit" class="btn btn-warning">Enregistrer</button>










        </div>

      </div>

    </div>
  </div>

</div>

</main>
</div>

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


</body>
</html>
