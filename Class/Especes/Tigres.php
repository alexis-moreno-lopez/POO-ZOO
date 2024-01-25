<?php
class Tigres extends Animal{

// Implémentation de la méthode abstraite pour le tigre
public function ActionSpecifique() {
    $this->vagabonder();
}
// Action spécifique au tigre
        public function vagabonder() {
            echo "Le tigre est en train de vagabonder.\n";
        }
    

}
?>