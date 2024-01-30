<?php
// Définition de la classe Aviary qui étend la classe Enclos
class Aviary extends Enclos
{
    protected $nom = "aigle";
    protected $hauteur; // Hauteur de la volière



    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
    }

    public function getHauteur() {
        return $this->hauteur;
    }

    public function entretenirEnclos() {
        // Vérification si l'enclos est vide       
               if ($this->nombreAnimaux === 0 && $this->getProprete() === "sale") { // si l'enclos est stictement égale à zero alors il est vide et donc il peut etre nétoyer
                echo "L'enclos \"$this->nom\" n'est pas vide, l'entretien et la vérification du sommet de la cage n'est pas nécessaire .\n";
                $this->proprete = "bonne";
            } else { // sinon il y as des animaux donc je ne peut pas nétoyer
                echo "L'enclos \"$this->nom\" est vide, il a été nettoyé et le sommet de la cage à été vérifier.\n";
                $this->proprete = "mauvais";
               }
           }
    // Méthodes spécifiques à la volière pour afficher les caractéristiques de l'enclos
    public function afficherCaracteristiques()
    {
        echo "Nom : $this->nom\n"; // Affiche le nom de l'enclos
        echo "Propreté : $this->proprete\n"; // Affiche le niveau de propreté de l'enclos
        echo "Nombre d'animaux : $this->nombreAnimaux\n"; // Affiche le nombre d'animaux dans l'enclos
        echo "Hauteur : $this->hauteur m\n"; // Affiche la hauteur de la volière
    }

    // Méthodes pour ajouter un animal dans la volière
    public function ajouterAnimal(Animal $animal) {
        if ($this->nombreAnimaux < 6) { // si le nombre de mes animaux est inférieur à 6
          if  ($animal instanceof aigles){ // je vérifie si mon animal est un tigre ou un ours 
           // j'instencie un animal dans mon tableau
          $this->animals[] = $animal;   // j'instencie un animal dans mon tableau
            $this->nombreAnimaux ++; // j'ajoute un animal
        } else {
            echo "ce n'est pas un animal volant";
        }
        } else {
            echo "l'enclos est complet.";
        }
    }

}
