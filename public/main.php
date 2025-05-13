<?php

use LDAP\Result;

echo 'TEST  DOCKER affichage page';


class GameMaster{
 //choix aléatoire d'un matériel pour tirage
}

class Resultat_tirage {
    public string $type;
     public string $resultat;
     //variable valeur??

     public function __construct(string $type, string $resultat ) //Valeur
        { 
        }
};

interface Tirage_aleatoire {
    public function tirer(): Resultat_tirage;
}

//Matériels utilisés, interface comportement tirage
// Chaque matériel renvoi Resultat_tirage
// class Dé implements Comportement_tirage {
//     public function tirer() : Resultat_tirage {
//         $chiffre = rand(1;6);
//         $resultat_lancé = $chiffre;
//     }
// }


class Dé {
    public int $value;
    public function __construct(
        public readonly int $nbFaces 
        ){
            $this->nbFaces = $nbFaces;
            $this->roll();
        }
    public function roll () {
        $this->value = rand(1, $this->nbFaces);
    }

    public function setValue(int $value) {
        $this->value = $value;
    }
}


class Pièce {
    public int $value;
    public function __construct(
    $nbLancers = 1 ) {
        $this->flip();
    }
    
    public function flip() {
        $this->value = rand (0, 1);
    }
}

class Deck {}

enum Resultat : string
{
    case FUMBLE = 'fumble';
    case ECHEC = 'échec';
    case REUSSITE = 'réussite';
    case REUSSITE_CRITIQUE = 'réussite critique';
}


?>