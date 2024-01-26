<?php
require('../Class/Animal.php');
// Définition de la classe abstraite Enclos
abstract class Enclos { 
    protected $nom; // nom de l'enclos
    protected $proprete; // niveau de proprete
    protected $nombreAnimaux = 0; // nombre d'animaux dans l'enclos
    protected $animals=[]; // mon tableau animals dans le quel j'ajoute mes animaux 

    // je met PROTECTED ce qui signifie que la propriété est accessible
    // dans la classe elle-même et dans ses sous-classes. Cependant,
    // elle n'est pas accessible en dehors de la classe ni par des instances de la classe directement.

    // Constructeur pour initialiser les propriétés communes à tous les enclos
    public function __construct($nom, $proprete) {
        $this->nom = $nom;
        $this->proprete = $proprete;
    }

public function setNom($nom) {
    $this->nom=$nom;
}

public function getNom() {
    return $this->nom;
}

public function setProprete($proprete) {
    $this->proprete=$proprete;
}

public function getProprete() {
    return $this->proprete;
}

public function setNombreAnimaux($nombreAnimaux) {
    $this->nombreAnimaux=$nombreAnimaux;
}

public function getNombreAnimaux() {
    return $this->nombreAnimaux;
}

public function setAnimals($animals) {
    $this->animals=$animals;
}

public function getAnimals() {
    return $this->animals;
}
    
    // Accesseurs et mutateurs habituels
  // Méthodes abstraites spécifiques à chaque enclos

// Méthode abstraite pour afficher les caractéristiques des animaux dans l'enclos
 public function afficherCaracteristiquesAnimaux(Animal $animal){
   echo "Espèce: " . $animal->getEspece() . "<br>"; // Affiche l'espèce(Type) de l'animal
   echo "Poids: " . $animal->getPoids() . " kg<br>"; // Affiche le poids de l'animal
   echo "Taille: " . $animal->getTaille() . " m<br>"; // Affiche la taille de l'animal
   echo "Âge: " . $animal->getAge() . " ans<br>"; // Affiche l'age de l'animal
   echo "Faim: " . $animal->getFaim() . "<br>"; // Affiche si l'animal à faim ou non
   echo "Dort: " . $animal->getdort() . "<br>"; // Affiche si l'animal dort ou non
   echo "Malade: " . $animal->getmalade() . "<br>"; // Affiche si l'animal est malade ou non
}

    // Méthodes spécifiques au terrarium pour afficher les caractéristiques de l'enclos
  abstract  public function afficherCaracteristiques();

 // Méthode commune à tous les enclos pour l'entretien
  abstract public function entretenirEnclos();

    // Méthode abstraite pour ajouter un animal à l'enclos
   abstract public function ajouterAnimal(Animal $animal);

     // Méthode abstraite pour enlever un animal de l'enclos
   public function enleverAnimal(Enclos $animal){
    if ($this->nombreAnimaux >= 1 ) { // si le nombre de mes animaux est supérieur à 6
        $this->animals[] = $animal; // j'enlève un animal de mon tableau
        $this->nombreAnimaux --; // je retire un animal
    } else {
           echo "il y à plus d'animaux dans l'enclos";
    }
   }









//     public function addAnimal(Animaux $animal){
//         if ($this->place_disponible > 0){
//              $this->animaux[] = $animal;
//              $this->place_disponible--; 
//              echo "$animal a été ajout à l'enclos .\n";
//         }else{             
//             echo "L'enclos est plein . Impossible d'ajouter un autre .\n";
//           }  
//      }   
//     public function removeAnimal(Animaux $animal){
//         if ($this->place_disponible < 0){
//              $this->animaux[] = $animal;
//              $this->place_disponible++;
//              echo "$animal a été enlever à l'enclos .\n";
//       }else{         
//               echo "L'enclos est vide . Impossible d'enlever un autre .\n";     
//   }   
//  }
}
    ?>