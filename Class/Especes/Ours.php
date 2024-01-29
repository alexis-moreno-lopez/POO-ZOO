<?php
class Ours extends Animal{

    private $espece = "Ours";

    public function setEspece($espece) {
        $this->espece = $espece;
    }
    public function getEspece() {
        return $this->espece;
    }

    // Crie du tigre
    public function emettreSon() {
        echo "$this->espece hhhmmmmmm";
    }
    // déplacement du tigre
        public function seDeplacer() {
            echo "($this->espece) est en train de se prommener .\n";
        }
    

}
?>