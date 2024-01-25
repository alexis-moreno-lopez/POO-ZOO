<?php
// Définition de la classe Terrarium qui étend la classe Enclos
class Terrarium extends Enclos
{
    // Début du constructeur de la classe Terrarium
    public function __construct($nom, $proprete)
    {
        // Initialisation des propriétés propres à la classe Terrarium
        $this->nom = $nom;
        $this->proprete = $proprete;
    }
    // Méthodes spécifiques au terrarium pour afficher les caractéristiques de l'enclos
    public function afficherCaracteristiques()
    {
        echo "Nom : $this->nom\n"; // Affiche le nom de l'enclos
        echo "Propreté : $this->proprete`\n"; // Affiche le niveau de propreté
        echo "Nombre d'animaux :  $this->nombreAnimaux\n"; // Affiche le nombre d'animaux présents dans l'enclos

    }
    // Méthodes spécifiques au terrarium pour afficher les caractéristiques des animaux terrestres
    public function afficherCaracteristiquesAnimaux()
    {
        echo "Caractéristiques des animaux dans le terrarium"; // Affiche les caractéristiques des animaux dans le terrarium
    }
    // Méthodes pour ajouter une animal du terrarium
    public function ajouterAnimal(Animal $animal)
    {
        // Ajouter un animal dans le terrarium
        // Vérifier que l'animal est "terrestre"
    }
    // Méthodes pour enlever un animal du terrarium
    public function enleverAnimal(Animal $animal)
    {
        // enelever un animal du terrarium

    }
}
