<?php



class Character 
{
    // Attribut personnage
    public $name;
    public $attackPoints = 15;
    protected $lifePoints = 100; // private on ne peut plus ecrire ni lire on doit donc utilisé un getteer ou setter
   


    //Methode pour remplire les personnages avec un nom propre 
    public function __construct($name) {
        $this->name = $name;
    }



    // Getter : récupérer un attribut private
    public function getLifePoints() {
        return $this->lifePoints;
    }

    //Setter : modifier un attribut
    public function setLifePoints($damage) {
        $this->lifePoints -= $damage;
        if ($this->lifePoints <= 0){
            $this->lifePoints = 0;
        }
        return;
    }    




}