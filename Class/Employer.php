<?php
class Employer {
    
    protected $nom;
    protected $age;
    protected $sex;
    protected $id;

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
    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
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
echo "Nourrissage des animaux dans l'enclos :";
foreach ($enclos->animals as $animal) {
    $animal->manger();
}
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

// Méthode pour transférer un animal d'un enclos à un autre
public function transfererAnimalEnclos(Enclos $enclosDepart, Enclos $enclosArrivee, Animal $animal) {
    echo "Transfert d'un animal d'un enclos à un autre : ";
    $enclosDepart->enleverAnimal($animal);
    $enclosArrivee->ajouterAnimal($animal);
}



// // Méthode pour l'interface utilisateur
// public function interfaceUtilisateur() {
//     echo "Bienvenue dans le monde du zoo!\n";
//     echo "1. Examiner un enclos\n";
//     echo "2. Nettoyer un enclos\n";
//     echo "3. Nourrir les animaux\n";
//     echo "4. Ajouter un animal à un enclos\n";
//     echo "5. Enlever un animal d'un enclos\n";
//     echo "6. Transférer un animal d'un enclos à un autre\n";
//     echo "0. Quitter\n";

//     $choix = (int) readline("Entrez le numéro de votre choix : ");

//     switch ($choix) {
//         case 1:
//             // Examiner un enclos
//             $enclos = $this->choisirEnclos();
//             $this->examinerEnclos($enclos);
//             break;
//         case 2:
//             // Nettoyer un enclos
//             $enclos = $this->choisirEnclos();
//             $this->nettoyerEnclos($enclos);
//             break;
//         case 3:
//             // Nourrir les animaux
//             $enclos = $this->choisirEnclos();
//             $this->nourrirAnimaux($enclos);
//             break;
//         case 4:
//             // Ajouter un animal à un enclos
//             $enclos = $this->choisirEnclos();
//             $animal = $this->creerAnimal();
//             $this->ajouterAnimalEnclos($enclos, $animal);
//             break;
//         case 5:
//             // Enlever un animal d'un enclos
//             $enclos = $this->choisirEnclos();
//             $animal = $this->choisirAnimal($enclos);
//             $this->enleverAnimalEnclos($enclos, $animal);
//             break;
//         case 6:
//             // Transférer un animal d'un enclos à un autre
//             $enclosDepart = $this->choisirEnclos();
//             $enclosArrivee = $this->choisirEnclos();
//             $animal = $this->choisirAnimal($enclosDepart);
//             $this->transfererAnimalEnclos($enclosDepart, $enclosArrivee, $animal);
//             break;
//         case 0:
//             echo "Merci d'avoir visité le zoo!\n";
//             exit;
//         default:
//             echo "Choix invalide, veuillez réessayer.\n";
//             break;
//     }

//     // Répéter l'interface utilisateur
//     $this->interfaceUtilisateur();
// }
}

?>