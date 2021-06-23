<?php


class Warrior extends Character
{

    //Methode pour attaqué
    public function attack($target) {
        // $target->lifePoints -= $this->attackPoint;
        $target->setLifePoints($this->attackPoints);
        $status = "$this->name Attaque $target->name , Il reste $target->lifePoints points de vie à $target->name .";
        return $status;
    }



}