<?php
require_once ('./Config/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css" />
    <title>Document</title>
</head>
<body class="page1">
    <div class="page1 justify-content-center d-flex pt-5">

    <form action="./pageEnclos.php"method="post">
<input type="text" name="pseudo" placeholder="Nom">
<input type="text" name="age" placeholder="age">
<select id="select">
    <option selected>Homme</option>
    <option value="1">Femme</option>
    <option value="2">poulpe</option>
</select>
<button class="btn ms-1" type="submit" name="validation">Valider</button>
</form>
<div>





</form>
</div>
</div>




    

</body>
</html>