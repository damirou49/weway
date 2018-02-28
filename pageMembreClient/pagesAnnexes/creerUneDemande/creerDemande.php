<?php include('../inc/header.php') ?>



</header>


<main class="block-main" role="recherche">

  <?php
  if(isset($_GET['ajouter']) && $_GET['ajouter']==4){
    echo"
    <div class='alert alert-danger'>Remplir tous les champs !</div>
    ";
  }
  ?>

  <div class="block-center">

    <main class="block-main">

      <div class="container">
        <div class="row">


          <div class="col-12">


          <div class="slogan"> Ta recherche , là,  maintenant ! </div>


          </div>
          

            <div class="col-4">


              <form class="form" method="post" action="../../../action/addAnnonce.php">
                <div class="category-title">  Expediteur </div>
                <div class="form-group">
                  <label for="formGroupExampleInput">Ville</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ville">
                </div>


                <div class="form-group">
                  <label for="formGroupExampleInput">Code </label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Code Postal">
                </div>



                <div class="form-group">
                  <label for="formGroupExampleInput2">Date</label>
                  <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Date d'expedition">
                </div>
              </form>

            </div>
            <div class="col-4">


              <form class="form" method="post" action="../../../action/addAnnonce.php">
                <div class="category-title">  Destinataire </div>
                <div class="form-group">
                  <label for="formGroupExampleInput">Ville</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ville">
                </div>


                <div class="form-group">
                  <label for="formGroupExampleInput">Code </label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Code Postal">
                </div>



                <div class="form-group">
                  <label for="formGroupExampleInput2">Date </label>
                  <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Date de livraison  ">
                </div>
              </form>

            </div>
             <div class="col-4">


              <form class="form" method="post" action="../../../action/addAnnonce.php">
                <div class="category-title">  Marchandise</div>
                <div class="form-group">
                  <label for="formGroupExampleInput">Support</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Support">
                </div>


                <div class="form-group">
                  <label for="formGroupExampleInput">Nombre</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre">
                </div>



                <div class="form-group">
                  <label for="formGroupExampleInput2">Poids</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Poids">
                </div>
              </form>



              

            </div>



            <div class="col-12"> <button type="button" class="btn btn-primary">rechercher </button></div>



            









          
          
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
