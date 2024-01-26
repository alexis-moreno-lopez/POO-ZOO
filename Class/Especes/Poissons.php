<?php
 abstract class Poissons extends Animal{

    private $espece = "poissons";


    public function setEspece($espece) {
        $this->espece = $espece;
    }
    public function getEspece() {
        return $this->espece;
    }

    // Crie du tigre
    public function emettreSon() {
        echo "$this->crie bloop bloop";
    }
    // déplacement du tigre
        public function seDeplacer() {
            echo "($this->espece) est en train de nager .\n";
        }
    

}
?>