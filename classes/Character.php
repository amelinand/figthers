<?php



 abstract class Character // Abstract pérmet de ne plus pour créé un nouvel objet depuis un fichier enfants.
{
    // Attribut // Personnage
    public $name;
    public $attackPoints = 15;
    protected $lifePoints = 100; // private on ne peut plus ecrire ni lire on doit donc utilisé un getteer ou setter.
   


    // Methode // Pour remplire les personnages avec un nom propre.
    public function __construct($name) {
        $this->name = $name;
    }



    // Getter // Récupérer un attribut private.
    public function getLifePoints() {
        return $this->lifePoints;
    }

    // Setter // Modifier un attribut
    public function setLifePoints($damage) {
        $this->lifePoints -= $damage; // La cible perd des points de vie.
        if ($this->lifePoints <= 0){
            $this->lifePoints = 0;
        }
        return;
    }    





}