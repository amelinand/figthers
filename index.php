<?php


spl_autoload_register(function ($class_name) {  // Permet de recupérer tout l'heritage de charactere. 
    include 'classes/'. $class_name . '.php';
});    
// Pour éviter de devoir mettre tout ça ! en ajoutant à chaque fois les nouvelles class crées.
// include './classes/Character.php';
// include './classes/Warrior.php';
// include './classes/Mage.php';

$character1 = new Warrior ('Ryu'); // Crée le personnage Ryu avec les valeurs remplie sur Character.php.
$character2 = new Mage ('Blanka');


while ($character1->getLifePoints() > 0 && $character2->getLifePoints() > 0){ // Si les deux personnages ont des points de vie fait les attaquées.
    echo $character1->action($character2); // Personnage 1 attack personnage 2.
    $status = "Victoire de  $character1->name !";
    echo '<br>';


    if ($character2->getLifePoints() > 0){ // Si le personnage 2 à des points de vie superieur a 0 sans cette condition boucle infini.
        echo $character2->action($character1);
        $status = "Victoire de  $character2->name !";
        echo '<br>';
    }
}

echo $status;
var_dump($character1, $character2);