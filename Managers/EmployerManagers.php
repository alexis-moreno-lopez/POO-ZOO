<?php
class EmployerManagers {
    private $db;
    private array $enclosArray = [];

    public function __construct(PDO $db) {
        $this->db = $$db;
    }
    public function add(Employer $employer){  // je crée la méthode qui ajoute mon héro à la BDD
        $request = $this->db->prepare("INSERT INTO employer (name ) VALUES(:name)"); // je prépare une requet qui ajoute mon héro dans la BDD
        $request->execute([ // j'éxécute 
    
            'name' => $employer->getnom(), // je récupère le nom du héro et je l'insert dans la colonne name de ma table combat
            
        ]);
        $id = $this->db->lastInsertId(); // je viens récupérer l'Id du dernier héro crée
        $employer->setId($id);
    } 
 
public function caracteristiqueAnimaux() { // je crée la méthode qui récupère tous les héros qui ont encore leur point de vie 
$request = $this->db->query("SELECT * FROM heroes WHERE ");
$allHeroes = $request->fetchAll();
 // je les récupère et les mets dans allHeroes
 foreach ($allHeroes as $hero ){ // je vais chercher tous mes héros dans le tableau $héro
    $newHeroes = new Hero($hero); //j'instencie un nouveau héro dans ma table héro et le stock dans la variable $newHeroes
    $newHeroes->setId($hero['id']); // j'associe l'id à mes héros
    
    
    $this->heroesArray[] = $newHeroes; // récupération des héros dans le tableau
}

return $this->heroesArray; 
}
} 
?>