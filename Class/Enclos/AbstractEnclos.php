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
    
    // Accesseurs et mutateurs habituels
  // Méthodes abstraites spécifiques à chaque enclos

// Méthode abstraite pour afficher les caractéristiques de l'enclos
 abstract public function afficherCaracteristiques();

// Méthode abstraite pour afficher les caractéristiques des animaux dans l'enclos
   abstract  public function afficherCaracteristiquesAnimaux(Animal $animal);



 // Méthode commune à tous les enclos pour l'entretien
    public function entretenirEnclos() {
 // Vérification si l'enclos est vide       
        if ($this->nombreAnimaux === 0) { // si l'enclos est stictement égale à zero alors il est vide et donc il peut etre nétoyer
            echo "L'enclos \"$this->nom\" est vide, il a été nettoyé.\n";
            $this->proprete = "bonne";
        } else { // sinon il y as des animaux donc je ne peut pas nétoyer
            echo "L'enclos \"$this->nom\" n'est pas vide, l'entretien n'est pas nécessaire.\n";
        }
    }
    // Méthode abstraite pour ajouter un animal à l'enclos
   public function ajouterAnimal(Animal $animal) {
        if ($this->nombreAnimaux < 6) { // si le nombre de mes animaux est inférieur à 6
            $this->animals[] = $animal; // j'instencie un animal dans mon tableau
            $this->nombreAnimaux ++; // j'ajoute un animal
        } else {
            echo "l'enclos est complet.";
        }
    }
     // Méthode abstraite pour enlever un animal de l'enclos
   public function enleverAnimal(Animal $animal){
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