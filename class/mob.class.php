<?php
include_once("imageJeuRole.class.php");
include_once("personnage.class.php");
class Mob extends Personnage implements imageJeuRole
{
    const GAIN_EXP = 100 ;
    
    // public function __construct($forceInitiale,$_nomPerso,$_localisation,$_ptVie=150)
    public function __construct()
    {
        $this->_pointVie = 40;
        $this->_force = 3;
        $this->_experience = 0;
        $this->_nomPerso = "Wolves";
		$this->_position=50;
        // parent::__construct($forceInitiale,$_nomPerso,$_localisation,$_ptVie);
    }
    
    public function frapper($ennemi)
    {

        $ennemi->augmenteDegats( $this->_force);// a modifier   diminue point devie


        $this->_experience += get_class($ennemi)::GAIN_EXP;// pensez a mettre une variable
        echo ($this->_nomPerso." vient d'attaquer ".$ennemi->_nomPerso." lui infligeant '$this->_force' points de dégats.<br/>");
        $ennemi->_pointVie = $ennemi->_pointVie - $this->_force;
        echo("Il reste à ".$ennemi->_nomPerso." ".$ennemi->_pointVie." points de vie." );
        echo('<br/>');
        $this->afficheImage();
        $ennemi->afficheImage();

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
    
    // public function afficheImage()
    // {
    //     echo("<img src='./class/img/mob.png' heigth='300' width='150'>");
    //     echo("<br/>");
    // }
}

?>