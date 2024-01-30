<?php
// require_once('../Class/Animal.php')
// Déclaration d'une classe abstraite Animal avec plusieurs propriétés protégées représentant les caractéristiques communes à tous les animaux
abstract class Animal {
     // Propriétés protégées représentant les caractéristiques communes à tous les animaux
protected int $poids;
protected int $taille;
protected string $espece;
protected int $age;
protected bool $faim = false;
protected bool $dort = false;
protected bool $malade = false;
protected bool $soigner = false;

// Constructeur pour initialiser les propriétés communes à tous les animaux
public function __construct($poids, $taille, $espece, $age) {
    $this->poids = $poids;
    $this->taille = $taille;
    $this->espece = $espece;
    $this->age = $age;
}
// Méthodes permettant de définir et récupérer la propriété poids
public function setPoids($poids) :void {
$this->poids = $poids;
}

public function getPoids() {
    return $this->poids;
}
// Méthodes permettant de définir et récupérer la propriété taille
public function setTaille($taille){
$this->taille = $taille;
}

public function getTaille() {
    return $this->taille;
}
// Méthodes permettant de définir et récupérer la propriété espèce
public function setEspece($espece){
$this->espece = $espece;
}
public function getEspece() {
    return $this->espece;
}
// Méthodes permettant de définir et récupérer la propriété age
public function setAge($age){
$this->age = $age;
}
public function getAge() {
    return $this->age;
}
// Méthodes permettant de définir et récupérer la propriété soigner
public function setSoigner($soigner){
$this->soigner = $soigner;
}
public function getSoigner() {
    return $this->soigner;
}
public function setFaim($faim){
$this->faim = $faim;
}
public function getFaim() {
    return $this->faim;
}
public function setDort($dort){
$this->dort = $dort;
}
public function getDort() {
    return $this->dort;
}
public function setMalade($malade){
$this->malade = $malade;
}
public function getMalade() {
    return $this->malade;
}
abstract protected function emettreSon(); // Méthode abstraite  
abstract protected function vagabonder(); // Méthode abstraite

    // Méthode pour afficher les caractéristiques communes de l'animal
 public function caracteristiqueAnimaux() {
    echo "Espèce: " . $this->getEspece() . "<br>"; // Affiche l'espèce(Type) de l'animal
    echo "Poids: " . $this->getPoids() . " kg<br>"; // Affiche le poids de l'animal
    echo "Taille: " . $this->getTaille() . " m<br>"; // Affiche la taille de l'animal
    echo "Âge: " . $this->getAge() . " ans<br>"; // Affiche l'age de l'animal
    echo "Faim: " . $this->getFaim() . "<br>"; // Affiche si l'animal à faim ou non
    echo "Dort: " . $this->getDort() . "<br>"; // Affiche si l'animal dort ou non
    echo "Malade: " . $this->getMalade() . "<br>"; // Affiche si l'animal est malade ou non
}



}
?>