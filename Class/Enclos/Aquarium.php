<?php
// Définition de la classe Aquarium qui étend la classe Enclos
class Aquarium extends Enclos
{

    private $salinite; // Salinite de l'eau de l'aquarium

    // Constructeur pour initialiser les propriétés spécifiques à l'aquarium
    public function __construct($nom, $proprete, $salinite)
    {
        // Appel du constructeur de la classe parente (Enclos)
        // Initialisation des propriétés héritées de la classe Enclos
        parent::__construct($nom, $proprete);
        $this->salinite = $salinite;
    }
    // Méthodes spécifiques à la volière
    public function afficherCaracteristiques()
    {
        echo "Nom : $this->nom\n"; // Affiche le nom de l'enclos
        echo "Propreté : $this->proprete\n"; // Affiche le niveau de proprete de l'enclos
        echo "Nombre d'animaux : $this->nombreAnimaux\n"; // Affiche le nombre d'animaux dans l'enclos
        echo "salinite : $this->salinite\n"; // Affiche le niveau de salinite dans l'enclos
    }
    // Méthodes spécifiques à l'aquarium pour afficher les caractéristiques des animaux aquatiques
    public function afficherCaracteristiquesAnimaux()
    {
        echo "Caractéristiques des animaux dans la volière :\n";
        // Afficher les caractéristiques des animaux
    }
    // Méthodes pour ajouter un animal dans l'aquarium
    public function ajouterAnimal(Animal $animal)
    {
        // Ajouter un animal dans l'aquarium
        // Vérifier que l'animal est aquatique
    }
    // Méthodes pour enlever un animal de l'aquarium
    public function enleverAnimal(Animal $animal)
    {
        // enelever un animal dans l'aquarium

    }
}
