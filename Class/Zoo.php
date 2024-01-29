<?php
class Zoo {
    private string $nom;
    private Employe $employe;
    private int $maximumEnclos;
    private array $enclos = [];

    public function afficherContenuEnclos() {

    }

    public function afficherNombreAnimaux() {

    }

    public function main() {
        while() {
            // animaux setter Aleatoire
            // enclos setter Aleatoire
        }
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getEmploye(): Employe
    {
        return $this->employe;
    }

    public function setEmploye(Employe $employe): void
    {
        $this->employe = $employe;
    }

    public function getMaximumEnclos(): int
    {
        return $this->maximumEnclos;
    }

    public function setMaximumEnclos(int $maximumEnclos): void
    {
        $this->maximumEnclos = $maximumEnclos;
    }

    public function getEnclos(): array
    {
        return $this->enclos;
    }

    public function setEnclos(array $enclos): void
    {
        $this->enclos = $enclos;
    }



}





    ?>