<?php


class Priest extends Character
{


    
    public function action($target) {
        $rand = rand(1,100);
        if ($rand < 29) {
            $this->lifePoints += 25;
            $status = "$this->name Utilise potion récupération, Il récupére  25  points de vie ";
            if ($this->lifePoints > 100) {
                $this->lifePoints = 100;
            }

        }elseif ($rand > 99) {
            $this->lifePoints = 100;
            $status = "$this->name Utilise potion récupération de vie, Il récupére $target->lifePoints points de vie ";
        }else {

            $target->setLifePoints($this->attackPoints);
            $status = "$this->name Attaque $target->name , Il reste $target->lifePoints points de vie à $target->name .";
        }
        return $status;
    }



}