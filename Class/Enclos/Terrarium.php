<?php
// Définition de la classe Terrarium qui étend la classe Enclos
class Terrarium extends Enclos
{
   
   
    public function entretenirEnclos() {
        // Vérification si l'enclos est vide       
               if ($this->nombreAnimaux === 0 && $this->getProprete() === "sale") { // si l'enclos est stictement égale à zero alors il est vide et donc il peut etre nétoyer
                echo "L'enclos \"$this->nom\" n'est pas vide, l'entretien  n'est pas nécessaire .\n";
                $this->proprete = "bonne";
            } else { // sinon il y as des animaux donc je ne peut pas nétoyer
                echo "L'enclos \"$this->nom\" est vide, il a été nettoyé.\n";
                   $this->proprete = "mauvais";
               }
           }
    
    public function afficherCaracteristiques()
    {
        echo "Nom : $this->nom\n"; // Affiche le nom de l'enclos
        echo "Propreté : $this->proprete\n"; // Affiche le niveau de propreté de l'enclos
        echo "Nombre d'animaux : $this->nombreAnimaux\n"; // Affiche le nombre d'animaux dans l'enclos
        
    }
    public function ajouterAnimal(Animal $animal) {
        if ($this->nombreAnimaux < 6) { // si le nombre de mes animaux est inférieur à 6
          if  ($animal instanceof Tigres || $animal instanceof Ours){ // je vérifie si mon animal est un tigre ou un ours 
           // j'instencie un animal dans mon tableau
          $this->animals[] = $animal;   // j'instencie un animal dans mon tableau
            $this->nombreAnimaux ++; // j'ajoute un animal
        } else {
            echo "ce n'est pas un animal terrestre";
        }
        } else {
            echo "l'enclos est complet.";
        }
    }
    
  
}
