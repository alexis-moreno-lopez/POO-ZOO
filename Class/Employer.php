<?php
class Employer {
    
    private $nom;
    private $age;
    private $sex;

    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function getNom() {
        return $this->nom;
    }
    public function setAge($age) {
        $this->age = $age;
    }
    public function getAge() {
        return $this->age;
    }
    public function setEspece($sex) {
        $this->sex = $sex;
    }
    public function getSex() {
        return $this->sex;
    }


 
 public function entretenirEnclos( Enclos $enclos) {
    // Vérification si l'enclos est vide       
           if ($this->nombreAnimaux === 0) { // si l'enclos est stictement égale à zero alors il est vide et donc il peut etre nétoyer
               echo "L'enclos \"$this->nom\" est vide, il a été nettoyé.\n";
               $this->proprete = "bonne";
           } else { // sinon il y as des animaux donc je ne peut pas nétoyer
               echo "L'enclos \"$this->nom\" n'est pas vide, l'entretien n'est pas nécessaire.\n";
           }
       }
       public function nourrirAnimaux(Enclos $enclos) {

       }
       public function transfererAnimaux(Enclos $retirerEnclos, Enclos $ajouterEnclos, Animal $animal) {
        $retirerEnclos->enleverAnimal($animal);
        $ajouterEnclos->ajouterAnimal($animal);
       }

       public function ajouterAnimal(Animal $animal, Enclos $enclos) {
        //
    }

       public function enleverUnAnimal(Enclos $enclos) {
        //
    }
    public function examinerEnclos(Enclos $enclos) {
        //
    }

}

?>