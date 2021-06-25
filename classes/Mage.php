<?php


class Mage extends Character // extends // Permet de recupérer les éléments du fichier parent Character.
{
    // Attribut //
    public $magicPoints = 50;
    public $shield = false; // Bouclier.

    public function __construct($name) {
        $this->name = $name;
        $this->attackPoints /= 3; // On donne à attackPoints 1 tiers des points d'attack entrée dans le fichier parent (Character.php).
    }


    // Methode //
    public function action($target){ // Choisi aléatoirement l'une ou l'autre des attacks.
        $rand = rand(1, 100); // Choisi aléatoirement un chiffre entre 1 et 100.

        if ($rand <= 70 || $this->shield){ // 70 % de chance d'activé cette attack (si $rand et inferieur ou égale a 70). ou si mon Bouclier est activé
            $status = $this->fireball($target); // Boule de feu.
        }else{
            $status = $this->shield(); // Bouclier.
        }
        return $status;
    }

    public function shield() { // Methode //Bouclier.
        $this->shield = true; // Bouclier est actif.
        $status = "$this->name Utilise bouclier! Il reste $this->magicPoints points de magie à $this->name !";
        return $status;
    }

    public function setLifePoints($damage) { // Methode // Modifie Points de vie.
        if($this->shield == true) { // Si le bouclier est activé alors.
            $this->lifePoints -= 0; // Les points de vie ne change pas. 
            $this->shield = false; // Puis désactive le bouclier.
        }else{
            $this->lifePoints -= $damage; // Sinon si le bouclier n'est pas activé enleve des points de vie.
            if ($this->lifePoints <= 0){ // Si les points de vie sont en dessous de 0 ou égale à 0 alors.
                $this->lifePoints = 0; // Points de vie vaut 0.
            }
        }
        return;
    }    

    public function fireball($target) { // Methode // Boule de feu
  
        if ($this->magicPoints === 0) { // Si les Points de magie sont égale a 0 alors.
                $target->setLifePoints($this->attackPoints); // Modifie (enleve)les points de vie a la valeur de l'attack du coup de baton.
                $status = "$this->name n'a plus de points de magie et donne un coup de bâton à $target->name! Il reste $target->lifePoints points de vie à $target->name.";
        } else {
            $cost = rand(1, 20); // Equivauld à attaque points.
            if ($this->magicPoints < $cost) { // Si il n'à plus assez de points de magie sont attack sera de la valeur des points de magie qu'il lui reste. 
                $cost = $this->magicPoints;
            }
            $rand = rand(10, 30)/10; // Aléatoire pour avoie un chiffre à virgule entre 1 et 3.
            $damage = $cost * $rand; // l'attack vaut un chiffre entre 1 et 20 multiplier part un chiffre entre 1  et 3 pouvant valoir 1,2 ou 2,6.
            $this->magicPoints -= $cost; // Il perd des points de magie équivalent a au chiffre entre 1 et 20.
            $target->setLifePoints(round($damage)); // Afflige à la cible de l'attack la somme des des deux chiffres aléatoire (le round arondie se chiffre pour plus de facilité de lecture du combat).
            $status = "$this->name lance un boule de feu sur $target->name! Il reste $target->lifePoints points de vie à $target->name, et $this->magicPoints points de magie à $this->name !";
        }
            return $status;
            


    }

}    
/////////////////////////////////////////////  Premier essaie de l'exercice ////////////////////////////////

// class Mage extends Character 
// {
//     public $attackPoint = 5;
//     public $magicPoints = 100;
//     public $fireball; //Prend Aléatoirement  entre 1 et 20 points de magicPoints et inflige ce nombre * entre 1 et 3
    

//     public function attack($target) {
        
        

//         if ($this->magicPoints > 0){
            
//             $this->setfireball();
//             $this->setmagicPoints($this->fireball);
//             $damage = $this->setfireballAttack();
//             $target->setLifePoints($damage);
//             $status = "$this->name Lance boule de feu sur  $target->name , Il reste $target->lifePoints points de vie à $target->name , il reste $this->magicPoints points de magie à $this->name .";
//             return $status;

//         }else{
//             $target->setLifePoints($this->attackPoint);
//             $status = "$this->name Donne coup de bâton  $target->name , Il reste $target->lifePoints points de vie à $target->name .";
//             return $status;
//         }
//     }



//     public function setfireball() {
//         $fireball = mt_rand(1, 20);
//         if($this->magicPoints < $fireball){
//             $this->fireball = $this->magicPoints;
//         } else{
//             $this->fireball = $fireball;    
//         }
//         return;
        
//     }
    
    
    
//     public function setmagicPoints($magicUsed) {

//         $this->magicPoints -= $magicUsed;
//         return;
//     }

//     public function setfireballAttack() {
//         $damage = $this->fireball * rand(10, 30) / 10;
//         return round($damage);
//     }
// }

//
///////////////////////////////////////////////////////////////////////////////////////////////////////////////