<?php
require_once './Class/Animal.php';
abstract class Aigles extends Animal{

    private $espece = "aigle";

    public function setEspece($espece) {
        $this->espece = $espece;
    }
    public function getEspece() {
        return $this->espece;
    }

    // Crie du tigre
    public function emettreSon() {
        echo "$this->espece Piou Piou";
    }
    // déplacement du tigre
        public function seDeplacer() {
            echo "($this->espece) est en train de voler.\n";
        }
    

}
// $aigle = new Aigles();
// echo $aigles->__toSting();
?>