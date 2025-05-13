<?php

use LDAP\Result;

echo 'TEST  DOCKER affichage page';





class GameMaster{
 //choix aléatoire d'un matériel pour tirage
}


interface Comportement_tirage{
    //fonction tirage  :resultat.
    public function tirer(): Resultat_tirage;
 

};


//résultat tirage aléatoire par GM
class Resultat_tirage {
    public string $type;
    public string $resultat;
    //variable valeur ???

     public function __construct(string $type, string $resultat ) //Valeur
        {
        $acceptedTypes = ['Dé', 'Pièce', 'Deck'];
        $acceptedResultat = ['Réussite', 'Echec', 'Réussite critique', 'Fumble'];  
            if (!in_array($this ->$type, $acceptedTypes)) {
                throw new \Exception("Type de tirage invalide");
            }  
            if (!in_array($this ->$resultat, $acceptedResultat)) {
                throw new \Exception("Résultat du tirage invlide");
            }
        }
};

//Matériels utilisés, interface comportement tirage
// CHaque mat renvoi Resultat_tirage
class Dé implements Comportement_tirage {
    public function lancer() : Resultat_tirage {
        $chiffre = (1;6);
        $resultat_lancé = $chiffre;
    }
}

class Pièce implements Comportement_tirage{
    public function jeter() : Resultat_tirage {
        $face = (p;f);
        $resultat_tirage = $face ;
    }
}
class Deck implements Comportement_tirage{
    public function tirer_carte() : Resultat_tirage{
        $carte_tirée= (1;52);
        $resultat_tirage = $carte_tirée;
    }

}






?>