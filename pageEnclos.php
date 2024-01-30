<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css" />
    <title>Enclos</title>
</head>
<body class="page2">
    <div class="justify-content-center d-flex">
    <h1>Choisir l'enclos</h1>
</div>
<div class="d-flex">
<div id="card" class="card" style="width: 18rem;">
  <img src="./Img/aigle.webp" class="card-img-top" height="150px" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data->getNomEnclos() ?>Aigles</h5>
    <p class="card-text"><?php echo "Life : " . $data->getNombreAnimaux()?></p>
    <form action="" method="post">
    <input type="hidden" name="hero_id"<?php echo $data->getId(); ?>>
    <button class="btn" type="submit">choisir</button>
</form>
  </div>
</div>
<div id="card" class="card" style="width: 18rem;">
  <img src="./Img/ours.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ours</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary">Visiter</a>
  </div>
</div>
<div id="card" class="card" style="width: 18rem;">
  <img src="./Img/tigres.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Tigres</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary">Visiter</a>
  </div>
</div>
<div id="card" class="card" style="width: 18rem;">
  <img src="./Img/poisson.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Poissons</h5>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary">Visiter</a>
  </div>
</div>
    </div>
</body>
</html>
