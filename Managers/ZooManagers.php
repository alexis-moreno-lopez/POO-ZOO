<?php
class ZooManagers {
    
    
    
        private $db;
    
    
        public function __construct(PDO $db) //
        {
            $this->db = $db;
        }
    
        public function addZoo(Zoo $zoo)
        {
            $request = $this->db->prepare("INSERT INTO zoo (nom , nbr_maxi_enclos ) VALUES(:nom, :nbr_maxi_enclos)");
            $request->execute([
    
                ':nom' => $zoo->getNom(),
                ':maximumEnclos' => $zoo->maximumEnclos()
    
            ]);
            $id = $this->db->lastInsertId();
            $_SESSION["id_zoo"] = $id;
        }
    }  
?>