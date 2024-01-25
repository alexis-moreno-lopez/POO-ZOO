<?php
class Ours extends Animal{

    // Implémentation de la méthode abstraite pour l'ours
    public function ActionSpecifique() {
        $this->attraperPoisson();
    }
// Action spécifique à l'ours
    private function attraperPoisson() {
        echo "L'ours est en train d'attraper un poisson.\n";
    }
}
?>