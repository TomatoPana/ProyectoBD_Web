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
        <div class="container">
    <div class="row">
      <div>
        <div class="login-form">
          <form action="/examples/actions/confirmation.php" method="post">
            <h2>Agregar juego nuevo</h2>
            <p class="hint-text">agregar todas las plataformas donde estara el juego</p>
            <div class="form-group">
              <input type="text" class="form-control" name="user" placeholder="Nombre del empleado" required="required">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="nombre del juego" required="required">
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="precio" placeholder="precio del juego" required="required">
            </div>
            <div>
            <input name="playStation" type="checkbox" /><h5>PlayStation</h5>
            <input name="xbox" type="checkbox" /><h5>Xbox</h5>
            <input name="pc" type="checkbox" /><h5>PC</h5>
            <input name="switch" type="checkbox" /><h5>Nintendo Switch</h5> 
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success btn-lg btn-block">agregar</button>
            </div>
          </form>
        </div>
      </div>
</body>
</html>