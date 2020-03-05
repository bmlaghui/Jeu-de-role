 <?php
 
  $classe = $_POST['hero'];
 $action=$_POST['action']; var_dump($action);
 if (isset($action)) {
  switch ($action) {
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