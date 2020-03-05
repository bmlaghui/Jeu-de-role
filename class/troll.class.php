<?php
include_once("imageJeuRole.class.php");
include_once("personnage.class.php");
class Troll extends Personnage implements imageJeuRole
{
    private $_ptZerk;
    
    public function getPtZerk()
    {
        return $this->_ptZerk;
    }
    public function setPtZerk($_ptZerk)
    {
        $this->_ptZerk = $_ptZerk;
    }
    
    // public function __construct($forceInitiale,$_nomPerso,$_localisation,$_ptZerk)
    public function __construct()
    {
        $this->_pointVie = 200;
        $this->_force = 8;
        $this->_experience = 0;
        $this->_nomPerso = "Trundle";
		$this->_position=10;

        // parent::__construct($forceInitiale,$_nomPerso,$_localisation);
    }
    
	public function getNomPerso()
    {
        return $this->_nomPerso;
    }
    public function showCombat($ennemi)
    {
        $this->afficheImage();
        $ennemi->afficheImage();
    }

    public function frapper($ennemi)
    {
        $this->_ptZerk -= 1;
        parent::frapper($ennemi);
         echo ('Points de zerk restants à '.$this->_nomPerso.' : '.$this->_ptZerk);
        echo("<br/>");
    }
    
    public function rechargerVie()
    {
        $_pointVie = 100;
        echo ("Les points de vie de ".$this->_nomPerso." sont rechargés à 100");
    }
    
    public function deplacer()
    {
        $this->_localisation += 1;
        echo ($this->_nomPerso." se trouve maintenant à la case : ".$this->_localisation);
    }
    
    public function afficheImage()
    {
        echo('<img src="./class/img/troll.png" height="100" width="150">');
        echo("<br/>");
    }
}

?>
 