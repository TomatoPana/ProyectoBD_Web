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
                            <h2>Eliminar Juego</h2>
                            <div class="input-group">
                                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                <button type="button" class="btn btn-outline-primary">search</button>
                            </div>
                            <div class="stats">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="./img/genshinimpact.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">nombre del juego</h5>
                                        <p class="card-text">desripcion del juego.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">precio del juego</li>
                                        <li class="list-group-item">$ventas del juego</li>
                                        <li class="list-group-item">
                                            <input name="playStation" type="checkbox" />
                                            PlayStation
                                            <input name="xbox" type="checkbox" />
                                            Xbox
                                            <input name="pc" type="checkbox" />
                                            PC
                                            <input name="switch" type="checkbox" />
                                            Nintendo Switch
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger btn-lg btn-block">Eliminar</button>
                    </div>
                    </form>
                </div>
            </div>
</body>

</html>