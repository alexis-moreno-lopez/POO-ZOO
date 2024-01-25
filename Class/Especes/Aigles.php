<?php
abstract class Aigles extends Animal{

// Implémentation de la méthode abstraite pour l'aigle
        public function ActionSpecifique() {
            $this->voler();
        }

     // Action spécifique à l'aigle
        private function voler() {
            echo "L'aigle est en train de voler.\n";
        }

}
?>