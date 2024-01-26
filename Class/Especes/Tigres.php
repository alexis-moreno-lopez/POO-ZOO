<?php
require_once('../POO-ZOO/Class/Animal.php');
class Tigres extends Animal{

    private $espece = "tigre";

    public function setEspece($espece) {
        $this->espece = $espece;
    }
    public function getEspece() {
        return $this->espece;
    }

    // Crie du tigre
    public function emettreSon() {
        echo "$this->crie Rwwwwwaaaaaaa";
    }
    // déplacement du tigre
        public function seDeplacer() {
            echo "($this->espece) est en train de vagabonder.\n";
        }
    

}
?>