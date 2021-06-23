<?php



class Mage extends Character 
{
    public $attackPoint = 5;
    public $magicPoints = 100;
    public $fireball; //Prend Aléatoirement  entre 1 et 20 points de magicPoints et inflige ce nombre * entre 1 et 3
    

    public function attack($target) {
        
        

        if ($this->magicPoints > 0){
            
            $this->setfireball();
            $this->setmagicPoints($this->fireball);
            $damage = $this->setfireballAttack();
            $target->setLifePoints($damage);
            $status = "$this->name Lance boulle de feu sur  $target->name , Il reste $target->lifePoints points de vie à $target->name , il reste $this->magicPoints points de magie à $this->name .";
            return $status;

        }else{
            $target->setLifePoints($this->attackPoint);
            $status = "$this->name Donne coup de bâton  $target->name , Il reste $target->lifePoints points de vie à $target->name .";
            return $status;
        }
    }



    public function setfireball() {
        $fireball = mt_rand(1, 20);
        if($this->magicPoints < $fireball){
            $this->fireball = $this->magicPoints;
        } else{
            $this->fireball = $fireball;    
        }
        return;
        
    }
    
    
    
    public function setmagicPoints($magicUsed) {

        $this->magicPoints -= $magicUsed;
        return;
    }

    public function setfireballAttack() {
        $damage = $this->fireball * rand(10, 30) / 10;
        return round($damage);
    }
}