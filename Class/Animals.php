<?php
class Animals {
private $poids;
private $taille;
private $espece;
private $age;
private $faim = false;
private $dort = false;
private $malade = false;
private $crie;
private $soigner;

public function __construct($poids, $taille, $espece, $age) {
    $this->poids = $poids;
    $this->taille = $taille;
    $this->espece = $espece;
    $this->age = $age;
}

public function setPoids($poids){
$this->poids = $poids;
}
public function getPoids() {
    return $this->poids;
}
public function setTaille($taille){
$this->taille = $taille;
}
public function getTaille() {
    return $this->taille;
}
public function setEspece($espece){
$this->espece = $espece;
}
public function getEspece() {
    return $this->espece;
}
public function setAge($age){
$this->age = $age;
}
public function getAge() {
    return $this->age;
}
public function setCrie($crie){
$this->crie = $crie;
}
public function getCrie() {
    return $this->crie;
}
public function setSoigner($soigner){
$this->soigner = $soigner;
}
public function getSoigner() {
    return $this->soigner;
}

public function caracteristique() {
    echo "Espèce: " . $this->getEspece() . "<br>";
    echo "Poids: " . $this->getPoids() . " kg<br>";
    echo "Taille: " . $this->getTaille() . " m<br>";
    echo "Âge: " . $this->getAge() . " ans<br>";
    echo "Faim: " . ($this->faim ? "Oui" : "Non") . "<br>";
    echo "Dort: " . ($this->dort ? "Oui" : "Non") . "<br>";
    echo "Malade: " . ($this->malade ? "Oui" : "Non") . "<br>";
}
public function mouvement() {
    
}

}
class Tigres extends Animals{
    public function faim() {
    
    }

}

class Ours extends Animals{

}
class Poissons extends Animals{

}
class Aigles extends Animals{

}
?>