<?php
echo 'TEST  DOCKER affichage page';

//représente résultat de tirage aléatoire
class Resultat_tirage {
   public readonly string $type;
   public function __constrcut(string $type)
   {
       $acceptedTypes = ['Dé', 'Pièce', 'Deck'];
         if (!in_array($type, $acceptedTypes)) {
              throw new \Exception("Type de tirage invalide");
         }  
   }
};

//Tirage valeurs aléatoires
readonly class Comportement_tirage{

};


readonly class Dé {


}

readonly class Pièce {

    
}


readonly class Deck {

    
}


?>