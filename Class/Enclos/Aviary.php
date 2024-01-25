<?php
// Définition de la classe Aviary qui étend la classe Enclos
class Aviary extends Enclos
{

    private $hauteur; // Hauteur de la volière


    // Constructeur pour initialiser les propriétés spécifiques à la volière
    public function __construct($nom, $proprete, $hauteur)
    {
        // Appel du constructeur de la classe parente (Enclos)
        // Initialisation des propriétés héritées de la classe Enclos
        parent::__construct($nom, $proprete);
        $this->hauteur = $hauteur;
    }
    // Méthodes spécifiques à la volière pour afficher les caractéristiques de l'enclos
    public function afficherCaracteristiques()
    {
        echo "Nom : $this->nom\n"; // Affiche le nom de l'enclos
        echo "Propreté : $this->proprete\n"; // Affiche le niveau de propreté de l'enclos
        echo "Nombre d'animaux : $this->nombreAnimaux\n"; // Affiche le nombre d'animaux dans l'enclos
        echo "Hauteur : $this->hauteur m\n"; // Affiche la hauteur de la volière
    }
    // Méthodes spécifiques au terrarium pour afficher les caractéristiques des animaux volants
    public function afficherCaracteristiquesAnimaux()
    {
        echo "Caractéristiques des animaux dans la volière :\n";
        // Afficher les caractéristiques des animaux
    }
    // Méthodes pour ajouter un animal dans la volière
    public function ajouterAnimal(Animal $animal)
    {
        // Ajouter un animal dans la volière
        // Vérifier que l'animal est volant
    }
    // Méthodes pour enlever un animal de la volière
    public function enleverAnimal(Animal $animal)
    {
        // enelever un animal dans la volière

    }
}
