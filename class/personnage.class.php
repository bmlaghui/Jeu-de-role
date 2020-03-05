<!DOCTYPE htmL>
<html>

<head>
    <meta charset="utf-8"> </head>

<body>
    <?php
        abstract class Personnage  // je ne peux pas intancier
        {
            
            //Attributs ou propriétés de la classe
            protected $_nomPerso;
            protected $_force;
            protected $_experience;
            protected $_degats = 0;
            protected $_pointVie ;
			protected $_position ;
            
            static $_texteAdire = 'Je suis un personnage de jeu de role !';
            static $_compteur = 0;

            const FORCE_PETITE = 20;
            const FORCE_MOYENNE = 50;
            const FORCE_GRANDE = 80;
            
            //Getters et setters

            public function getPointVie()
            {
                return $this->_pointVie;
            }
			public function getForce()
            {
                return $this->_force;
            }
            public function getExperience()
            {
                return $this->_experience;
            }
            public function getDegats()
            {
                return $this->_degats;
            }
			 public function getPosition()
            {
                return $this->_position;
            }

            //Set
            public function setForce($_force)
            {
                $this->_force = $_force;
            }
            public function setExperience($_experience)
            {
                $this->_experience = $_experience;
            }
            public function setDegats($_degats)
            {
                $this->_degats = $_degats;
            }
			 public function setPosition($_position)
            {
                $this->_position = $_position;
            }
            
            //Constructeur de la classe Personnage
            public function __construct($forceInitiale,$_nomPerso, $_ptVie, $_position )
            {
                $this->_force = $forceInitiale;
                $this->_nomPerso = $_nomPerso;
                $this->_pointVie =  $_ptVie ;
				$this->_position =  $_position ;
            }
            
            //Méthodes de la classe Personnage
            public function deplacer()
			{
				
			}
			
			public function gagnerExperience($valexp)
            {
                $this->_experience = $valexp;
            }
            public function augmenteDegats($valdegat)
            {
                $this->_degats = $valdegat; 
            }
            public function parle($message)
            {
                echo 'Je parle : '.$message.'<br/>';
            }
            abstract public function frapper($ennemi);


            //Methodes static de la classe Personnage
            public static function parler()
            {
                echo 'Je suis un personnage <br/>';
            }

            abstract public function rechargerVie();
            
            public function afficheImage()
            {
                $str=get_class($this);
                echo ("<img src='./class/img/$str.png' width:260px
                height:150px>");
            }

            public function afficheImageEnnemi()
            {
                echo ("<img src='./class/img/mob.png' width:260px
                height:150px>");
            }
        }
        ?>
</body>

</html>