<!doctype html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Mini jeu de rôle</title>

    <link rel="canonical" href="index.html">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/album.css" rel="stylesheet">
  </head>

  <body>

    
<?php
session_start();
?>
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Bienvenue au jeu de rôle </h1>
          <p class="lead text-muted">Choisissez votre héros !</p>

        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <a href="combat.php?hero=dragon"> <img class="card-img-top" src="assets/images/dragon.png" alt="Dragon"></a>
                <div class="card-body">
				  <dt> <a href="combat.php?hero=dragon">Dragon</a></dt>
                  <p class="card-text">Puissant et à la fois résilience, les dragons sont lents et possèdent moins de compétences .</p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div> 
			 <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                 <a href="combat.php?hero=archer"><img class="card-img-top" src="assets/images/archer.png" alt="Archer"></a>
                <div class="card-body">
                  <dt> <a href="combat.php?hero=archer">Archer</a></dt>
				  <p class="card-text">Rapides et agiles, les archers sont de formidables combattants à distance.</p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div> 
			<div class="col-md-3">
              <div class="card mb-4 box-shadow">
                 <a href="combat.php?hero=archer"><img class="card-img-top" src="assets/images/mage.png" alt="Mage"></a>
                <div class="card-body">
                  <dt> <a href="combat.php?hero=mage">Mage</a></dt>
				  <p class="card-text">Les Mages ont un grand savoir et d'étonnantes capacités. Leur fragilité physique ne doit pas vous tromper, ils préfèrent attaquer à distance, lançant de puissants éclairs de feu et de glace sur leurs ennemis</p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
			<div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <a href="combat.php?hero=troll"><img class="card-img-top" src="assets/images/troll.png" alt="Troll"></a>
                <div class="card-body">
                  <dt> <a href="combat.php?hero=troll">Troll</a></dt>
				  <p class="card-text">Les trolls possèdent des griffes incroyablement acérées et des pouvoirs de régénération étonnants qui leur permettent de se remettre de pratiquement n’importe quelle blessure.</p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
			
			
            </div>
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Jeu de rôle</p>
        <p>by <a href="https://bmlaghui.000webhostapp.com/">MLAGHUI Brahim</a></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
  </body>

</html>
