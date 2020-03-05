
<?php

if( isset ($_REQUEST['hero']))
{
$hero=$_REQUEST['hero'];

spl_autoload_register(function ($classname) {
    include_once './class/'.$classname . '.class.php';
});


 $classe = new $hero();
 $ennemie= new Mob(50,"wolves",24,150,0);
  if (isset($_POST['action'])) {
	 $action=$_POST['action']; 
  switch ($action) {
      case 'Attaquer':
        $classe->frapper($ennemie);
          break;
      case 'Recharger Vie':
        $classe->rechargerVie();
          break;
		  
	case 'Déplacer':
        $classe->deplacer();
          break;
		  case 'Parler':
        $classe->parler();
          break;
  }
}
}
 


 //var_dump ($_POST);
// $classe->showCombat($mob);



//  var_dump ($classe);
//  var_dump ($mob);
 //Button click


?>

 <?php
 

?>

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

    

    <main role="main">
      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="assets/images/<?= $hero?>.png" alt="Dragon">
                <div class="card-body">
				  <dt><span ><?= $classe->getNomPerso() ?></span> (Vous êtes un <span id="hero"><?= $hero?></span>)</dt>
				   <p class="card-text">
				   <span>Nombre de points de vie: </span><kbd><?= $classe->getPointVie(); ?></kbd></p>  
				    <p class="card-text"><span>Position: </span><kbd><?= $classe->getPosition(); ?></kbd> </p> 
				   
				   

                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div> 
			 <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="assets/images/versus.png" alt="Dragon">
                
              </div>
            </div> 
			<div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="assets/images/mob.png" alt="Dragon">
                <div class="card-body">
                  <dt>Mob</dt>
				  <span>Nombre de points de vie: </span><kbd><?= $ennemie->getPointVie(); ?></kbd></p>  
				    <p class="card-text"><span>Position: </span><kbd><?= $ennemie->getPosition(); ?></kbd> </p> 
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
			
			
			
            </div>
			<h4>Que voulez-vous faire?</div>
			<div class="row">
			<div class="col-md-2"> </div>
   <div class="col-md-2"><button type="button" class="btn btn-success">Attaquer</button></div>
   <div class="col-md-2"><button type="button" class="btn btn-danger">Recharger Vie</button></div>
   <div class="col-md-2"><button type="button" class="btn btn-secondary">Déplacer</button></div>
   <div class="col-md-2"><button type="button" class="btn btn-primary">Parler</button></div>
   
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $(document).ready(function(){
    $('.col-md-2').click(function(){
		
		// On reprend le même id que dans le précédent chapitre

    // $.ajax({
  // type: "POST",
  // url: "combat.php",
  // datatype: "html",
  // data: dataString,
  // success: function(data) {
    // alert(data);
    // }
// });
   

		
         var clickBtnValue = $(this).text();
		 var hero=document.getElementById("hero").innerText;
        var ajaxurl = 'combat.php?hero='+hero,
        data =  {'action' :clickBtnValue};
		//alert(ajaxurl);
        $.post(ajaxurl, data, function (response) {
           
            
            document.getElementById("score").innerHTML=response;
        });
		
		//alert(clickBtnValue);
     });
 });
</script>
			</div>
			<div id="score"></div>
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