<?php
include_once("imageJeuRole.class.php");
include_once("personnage.class.php");
class Dragon extends Personnage implements imageJeuRole
{
    const MESSAGE1 = 'Points de feu restant à ';
    const GAIN_EXP = 300 ;
    private $_ptFeu;
    
    public function getPtFeu()
    {
        return $this->_ptFeu;
    }
	public function getNomPerso()
    {
        return $this->_nomPerso;
    }
    public function setPtFeu($_ptFeu)
    {
        $this->_ptFeu = $_ptFeu;
    }
    
    // public function __construct($forceInitiale=10,$_nomPerso,$position,$_ptFeu =5 ,$_ptVie=2000 )
    public function __construct()
    {
        $this->_pointVie = 300;
        $this->_force = 7;
        $this->_experience = 0;
        $this->_nomPerso = "Aurelion Sol";
        $this->_ptMagie = 3;
		$this->_position=0;

        // parent::__construct($forceInitiale,$_nomPerso,$position,$_ptVie );
    }
    
    

    public function frapper($ennemi)
    {
        $this->_ptFeu -= 1;

        echo (get_class($this)::MESSAGE1.$this->_nomPerso.' : '.$this->_ptFeu);
        echo("<br/>");


        $ennemi->augmenteDegats( $this->_force);// a modifier   diminue point devie


        $this->_experience += get_class($ennemi)::GAIN_EXP;// pensez a mettre une variable
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
        $this->_position += 1;
        echo ($this->_nomPerso." se trouve maintenant à la case : ".$this->_position);
    }
    
    // public function afficheImage()
    // {
    //     echo ('<img src="./class/img/dragon.png" heigth="350" width="175">');
    //     echo('<br/>');
    // }
}

?>