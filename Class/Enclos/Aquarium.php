<?php
// Définition de la classe Aquarium qui étend la classe Enclos
class Aquarium extends Enclos
{
    protected $nom = "poisson";
    protected $salinite; // Salinite de l'eau de l'aquarium



    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function getNom() {
        return $this->nom;
    }
    public function setSalinite($salinite) {
        $this->salinite = $salinite;
    }
    public function getSalinite() {
        return $this->salinite;
    }

    public function entretenirEnclos() {
        // Vérification si l'enclos est vide       
               if ($this->nombreAnimaux === 0 && $this->getProprete() === "sale") { // si l'enclos est stictement égale à zero alors il est vide et donc il peut etre nétoyer
                echo "L'enclos \"$this->nom\" n'est pas vide, l'entretien et la vérification de la salinité à été faite.\n";
                $this->proprete = "bonne";
            } else { // sinon il y as des animaux donc je ne peut pas nétoyer
                echo "L'enclos \"$this->nom\" est vide, il a été nettoyé et la vérification de la salinite à été faite.\n";
                   $this->proprete = "mauvais";
               }
           }

    // Méthodes spécifiques à la volière
    public function afficherCaracteristiques()
    {
        echo "Nom : $this->nom\n"; // Affiche le nom de l'enclos
        echo "Propreté : $this->proprete\n"; // Affiche le niveau de proprete de l'enclos
        echo "Nombre d'animaux : $this->nombreAnimaux\n"; // Affiche le nombre d'animaux dans l'enclos
        echo "salinite : $this->salinite\n"; // Affiche le niveau de salinite dans l'enclos
    }

    // Méthodes pour ajouter un animal dans l'aquarium
    public function ajouterAnimal(Animal $animal) {
        if ($this->nombreAnimaux < 6) { // si le nombre de mes animaux est inférieur à 6
          if  ($animal instanceof Poissons){ // je vérifie si mon animal est un tigre ou un ours 
           // j'instencie un animal dans mon tableau
          $this->animals[] = $animal;   // j'instencie un animal dans mon tableau
            $this->nombreAnimaux ++; // j'ajoute un animal
        } else { // sinon
            echo "ce n'est pas un animal aquatique";
        }
        } else { // sinon
            echo "l'enclos est complet.";
        }
    }
}
