<?php
 abstract class Poissons extends Animal{

// Implémentation de la méthode abstraite pour le poisson
    public function ActionSpecifique() {
        $this->nager();
    }

// Action spécifique au poisson
    private function nager() {
        echo "Le poisson est en train de nager.\n";
    }

}
?>