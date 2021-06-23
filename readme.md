
# POO
__________________
### Crée un dossier classes
Puis on nome un fichier qui commencera part une majuscule.

> ```Character.php```

____________
### Ouvrir ```<?php```
Crée la class
> ```class Character```
{  
    // Les Attribut //  
      ```public $name; ``` 
      ```public $attackPoint = 15;```  
      ```protected $lifePoints = 100;```  
        // Les Methodes //   
        ```public function __construct($name) {```  
        ```$this->name = $name;```  
        ```}```  
        ```public function getLifePoints() {```  
        ```return $this->lifePoints;```  
        ```}```  
        ```public function setLifePoints($damage) {```  
        ```$this->lifePoints -= $damage;```  
        ```if ($this->lifePoints <= 0){```  
        ```$this->lifePoints = 0;```  
        ```}```  
        ```return;```  
        ```}``` 


        
        



- ```public``` signifie qui peur etre vue est modifier.
- ```private``` on ne peut plus ecrire ni lire on doit donc utilisé un getteer ou setter.
- ```protected``` .

- ```__construct``` permet depuis une page de donner un valeur a un attribut dans class.
- Getter ```getLife```: récupérer un attribut private.
- Setter ```setLife``` : modifier un attribut.

- Pour crée un personnage :  
> ```$character1 = new Warrior ('Ryu');```  
> ```$character2 = new Mage ('Blanka');```

- Pour include toutes les page héritant du dossier caraters :  
> ```spl_autoload_register(function ($class_name) {```  
```include 'classes/'. $class_name . '.php';```  
```});```

- Pour crée le combat  dans l'index : 
> ```while ($character1->getLifePoints() > 0 && $character2->getLifePoints() > 0){```  
```echo $character1->attack($character2);```  
```$status = "Victoire de  $character1->name !";```  
```echo '<br>';```  
```if ($character2->getLifePoints() > 0){```  
```echo $character2->attack($character1);```  
```$status = "Victoire de  $character2->name !";```  
```echo '<br>';```  
```}```  
```}```


#  Project Fighters

## Principe
Mettre en place un combat entre deux personnages en utilisant de la POO.
Ce combat sera représenté uniquement par des lignes de textes.

## Exo
__________
### Exo 1 : initialisation des personnages
Créer un classe ```Character```, dans lequel les personnages auront les attributs suivant :
- un nom : ```name```
- un score d'attaque : ```attackPoint``` (15)
- des points de vie : ```lifePoints``` (100)
- (des points de magie : ```magicPoints```)

Et une méthode : 
- une action d'attaque : ```attack()```

___________
### Exo 2 : base du combat
Dans l'index.php, mettre en place une logique pour que le combat se déroule jusqu'à ce que l'un des deux personnage soit KO.

___________
### Exo 3 : les points de vie

Faire en sorte que les points de vie ne passe pas en dessous de 0.
_____________
### Exo 4 : les sous-classes de personnages

Ajouter un système de sous-classes, avec un Warrior et un Mage.  
> Important pour la suite : chaque sous-classe doit être indépendante et s'autogérer.
_______________
### Exo 5 : améliorer le système d'appel des classes.

Trouver une solution plus performante pour inclure (ou require) les classes dont on a besoin !

__________________
### Exo 6 : caractéristiques du Mage

Le Mage a des points de magie (magicPoints) : 100.
Il a une attaque de 5.
Son attaque : Boule de feu (fireball).
Utlise aléatoirement entre 1 et 20 points de magie.
Les dégâts de cette attaque sont égaux au coût en points de magie * un nombre aléatoire entre 1 et 3.
3 possibilités d'attaque :
Il a assez de points de magie : boule de feu normale.
Il n'a plus assez de points de magie : boule de feu lancé avec les points de magie restant.
Si il n'a plus de point de magie : il donne un coup de bâton.