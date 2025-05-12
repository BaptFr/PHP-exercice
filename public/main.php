<?php
echo 'TEST  DOCKER affichage page';

//résultat tirage aléatoire par GM
class Resultat_tirage {
    public function __construct(
    public string $type,
    public string $resultat
    //variable valeur ???
    ){
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

//Comportement tirage valeurs aléatoires
class Comportement_tirage{
    public function __construct (
    )
    $materiels = ['Dé', 'Pièce', 'Deck'];
    array_rand($materiels, 1);
    if array_rand() == null {
        throw new \Exception(" ")
    }

};


class Dé {


}

class Pièce {

    
}


class Deck {

    
}


?>