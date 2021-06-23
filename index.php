<?php


spl_autoload_register(function ($class_name) {
    include 'classes/'. $class_name . '.php';
});    

// include './classes/Character.php';
// include './classes/Warrior.php';
// include './classes/Mage.php';

$character1 = new Warrior ('Ryu'); // Crée le personnage Ryu avec les valeurs remplie sur Character.php
$character2 = new Mage ('Blanka');


while ($character1->getLifePoints() > 0 && $character2->getLifePoints() > 0){
    echo $character1->attack($character2);
    $status = "Victoire de  $character1->name !";
    echo '<br>';

    if ($character2->getLifePoints() > 0){
        echo $character2->attack($character1);
        $status = "Victoire de  $character2->name !";
        echo '<br>';
    }
}

echo $status;
var_dump($character1, $character2);