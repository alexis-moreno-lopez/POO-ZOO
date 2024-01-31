<?php 
require_once('../config/db.php');
require_once('../config/autoload.php');



if (isset($_POST['zooName'])&& !empty($_POST['zooName'])) {
$zoo = new Zoo($_POST['zooName']);//ici je crée mon new zoo

$zooManager = new ZooManager($db);// la je m'occupe de la partie manager

$zooManager->addZoo($zoo);// la je l'ajout a la db


}


?>