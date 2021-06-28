<?php

spl_autoload_register(function ($class_name) {  // Permet de recupérer tout l'heritage de charactere. 
    include 'classes/'. $class_name . '.php';
});    
// Pour éviter de devoir mettre tout ça ! en ajoutant à chaque fois les nouvelles class crées.
// include './classes/Character.php';
// include './classes/Warrior.php';
// include './classes/Mage.php';

$character1 = new Priest ('Blanka'); // Crée le personnage Ryu avec les valeurs remplie sur Character.php.
$character2 = new Mage ('Ryu');

?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/index.css">
    <title>Street Figther</title>
</head>
<body>
    <main>

    <h1>Street Fighter</h1>
    <h2><?= $character1->name ?></h2>
    <h3>Vs</h3>
    <h2><?= $character2->name ?></h2>

        <div class='figth'>
            

            <?php while ($character1->getLifePoints() > 0 && $character2->getLifePoints() > 0) : ?>  <!--Si les deux personnages ont des points de vie fait les attaquées. -->

                <div class='character1'>
                    <img src="./img/blanka2.jpg" alt="">
                    <p>
                        <?= $character1->action($character2); 
                        $status = "Victoire de  $character1->name !";
                        ?>
                    </p>
                </div>

                
                <?php if ($character2->getLifePoints() > 0) : ?> <!--// Si le personnage 2 à des points de vie superieur a 0 sans cette condition boucle infini.-->

                    <div>
                        <img src="./img/ryu1.jpg" alt="">
                        <p>
                            <?= $character2->action($character1);
                            $status = "Victoire de  $character2->name !";
                            ?>
                        </p>
                    </div>
                
                <?php endif ?>
            


            <?php endwhile?>

            <div class="win">

                <?= $status; ?>

            </div>
        </div>
    </main>
</body>
</html>