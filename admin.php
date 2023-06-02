<?php require_once('./fragments/bootstrap.header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Detalles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.php"><img src="/img/gameflix.jpg" height="30px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/admin.php">admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/agregar.php">agregar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/eliminar.php">eliminar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/modificar.php">modificar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Catálogo</a>
                    </li>
                </ul>
                <a href="/login.php" class="btn btn-danger">Iniciar Sesión</a>
            </div>
        </div>
    </nav>
    <br><br><br>
    <div class="nosotros">
    <img src="/img/logoGameflix.png" alt="" height="100px">
        <div class="linea"></div>
        <br>
        <div class="stats">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Visitas</div>
  <div class="card-body">
    <h5 class="card-title">cantidad numerica</h5>
    <p class="card-text">informacion estadistica de cuando visitan mas la pagina</p>
  </div>
</div>

<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">cuentas nuevas</div>
  <div class="card-body">
    <h5 class="card-title">cantidad de cuentas nuevas</h5>
    <p class="card-text">estadistica de crecimiento</p>
  </div>
</div>
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">ventas</div>
  <div class="card-body">
    <h5 class="card-title">cantidad vendida</h5>
    <p class="card-text">estadistica de crecimiento porcentual mensual</p>
  </div>
</div>

<div class="card text-dark bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header">juego mas vendido</div>
  <div class="card-body">
    <h5 class="card-title">nombre del juego</h5>
    <p class="card-text">en que plataformas se vendio el juego</p>
  </div>
</div>
</div>

</body>
</html>