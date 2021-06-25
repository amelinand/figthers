<?php


class Warrior extends Character
{

    //Methode pour attaqué
    public function action($target) {
        
        $target->setLifePoints($this->attackPoints);
        $status = "$this->name Attaque $target->name , Il reste $target->lifePoints points de vie à $target->name .";
        return $status;
    }



}