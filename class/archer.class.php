<?php
include_once("imageJeuRole.class.php");
include_once("personnage.class.php");

class Archer extends Personnage implements imageJeuRole
{
    private $_nbFleches;
    const MESSAGE1 = 'Nombre de flèches à ';
    const GAIN_EXP = 100 ;
    public function getNomPerso()
    {
        return $this->_nomPerso;
    }
    public function getNbFleches()
    {
        return $this->_nbFleches;
    }
    public function setNbFleches($_nbFleches)
    {
        $this->_nbFleches = $_nbFleches;
    }
    
    public function __construct()
    {
        $this->_pointVie = 120;
        $this->_force = 7;
        $this->_experience = 0;
        $this->_nomPerso = "Ashe";
        $this->_nbFleches = 5;
		$this->_position=15;

       // parent::__construct($forceInitiale,$_nomPerso,$_ptVie);
    }
    
    public function showCombat($ennemi)
    {
        ?>
        <div id="score">
            <?php
            $this->afficheImage();
            echo($this->_nomPerso . '<br/>');
            echo('PV : ' . $this->_pointVie . '<br/>');
            echo('Flèches : ' . $this->_nbFleches . '<br/>');
            echo('Force : ' . $this->_force . '<br/>');
            echo('Exp : ' . $this->_experience . '<br/>');
            $ennemi->afficheImageEnnemi();
            echo($ennemi->_nomPerso . '<br/>');
            echo('PV : ' . $ennemi->_pointVie . '<br/>');
            echo('Force : ' . $ennemi->_force . '<br/>');
            echo('Exp : ' . $this->_experience . '<br/>');
            ?>
        </div>
        <?php
    }
    
    public function frapper($ennemi)
    {
        $this->_nbFleches -= 1;
        // parent::frapper($ennemi);
        // echo ('Nombre de fleches restantes à '.$this->_nomPerso.' : '.$this->_nbFleches);
        // echo("<br/>");
        echo (get_class($this)::MESSAGE1.$this->_nomPerso.' : '.$this->_nbFleches);
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
    
    public function deplacer()
    {
        $this->_localisation += 1;
        echo ($this->_nomPerso." se trouve maintenant à la case : ".$this->_localisation);
    }
    public function afficheImage()
    {
        echo("<img src='./class/img/archer.png' heigth='300' width='150'>");
        echo("<br/>");
    }
}

?>