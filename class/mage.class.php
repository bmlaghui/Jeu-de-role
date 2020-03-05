<?php
include_once("imageJeuRole.class.php");
include_once("personnage.class.php");
class Mage extends Personnage implements imageJeuRole
{
    private $_ptMagie;
    const MESSAGE1 = 'Points de magie restant à ';
    const GAIN_EXP = 100 ;
public function getNomPerso()
    {
        return $this->_nomPerso;
    }
    public function getPtMagie()
    {
        return $this->_ptMagie;
    }
    public function setPtMagie($_ptMagie)
    {
        $this->_ptMagie = $_ptMagie;
    }
    
    // public function __construct($forceInitiale=1,$_nomPerso,$_ptMagie = 2,$_ptVie=500)
    public function __construct()
    {
        // parent::__construct($forceInitiale,$_nomPerso,$_ptVie );
        $this->_pointVie = 100;
        $this->_force = 10;
        $this->_experience = 0;
        $this->_nomPerso = "Ryze";
        $this->_ptMagie = 10;
		$this->_position=60;


    }

    public function showCombat($ennemi)
    {
        $this->afficheImage();
        $ennemi->afficheImage();
    }

    public function frapper($ennemi)
    {
        $this->_ptMagie -= 1;

        echo (get_class($this)::MESSAGE1.$this->_nomPerso.' : '.$this->_ptMagie);
        echo("<br/>");

        $ennemi->augmenteDegats( $this->_force);// a modifier en diminue point devie

        $this->_experience += get_class($ennemi)::GAIN_EXP;
        echo ($this->_nomPerso." vient d'attaquer ".$ennemi->_nomPerso." lui infligeant '$this->_force' points de dégats.<br/>");
        $ennemi->_pointVie = $ennemi->_pointVie - $this->_force;
        echo("Il reste à ".$ennemi->_nomPerso." ".$ennemi->_pointVie." points de vie." );
        echo('<br/>');
    }
    
    public function rechargerVie()
    {
        $_pointVie = 100;
        echo ("Les points de vie de ".$this->_nomPerso." sont rechargés à 100");
    }
    
    
    // public function afficheImage()
    // {
    //     echo("<img src='./class/img/mage.png' heigth='300' width='150'>");
    //     echo('<br/>');
    // }



}

?>