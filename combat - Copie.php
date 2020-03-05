<?php

$hero=$_GET['hero'];

spl_autoload_register(function ($classname) {
    include_once './class/'.$classname . '.class.php';
});


 $classe = new $hero();
 $mob= new Mob(50,"wolves",24,150,0);


 //var_dump ($classe);
 $classe->showCombat($mob);



//  var_dump ($classe);
//  var_dump ($mob);
 $action=$_POST;
 var_dump($action);
 //Button click
 if (isset($_POST['action'])) {
  switch ($_POST['action']) {
      case 'Attaquer':
        $classe->frapper($mob);
          break;
      case 'RechargerVie':
        $classe->rechargerVie();
          break;
		  
	case 'Deplacer':
        $classe->deplacer();
          break;
  }
}

?>
<br>
<form method="post">
<input type="submit" class="button" name="action" value="Attaquer" />
<input type="submit" class="button" name="action" value="RechargerVie" />
<input type="submit" class="button" name="action" value="Deplacer" />
</form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    $(document).ready(function(){
    $('.button').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = './class/archer.class.php',
        data =  {'action' : clickBtnValue};
        console.log(data);
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            //alert(response);
            document.getElementById("score").innerHTML=data;
        });
    });
});
</script>