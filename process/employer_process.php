<?php
require_once('../config/db.php');
require_once('../config/autoload.php');


?>



<?php


if (
    isset($_POST['nom']) && !empty($_POST['nom'])
    && isset($_POST['age']) && !empty($_POST['age'])
    && isset($_POST['sexe']) && !empty($_POST['sexe'])
    ) {
    $employe = new Employer($_POST['nom'], $_POST['age'], $_POST['sexe']);




    $employerManager = new EmployerManager($db);

    $employerManager->addEmployer($employe);
}

?>