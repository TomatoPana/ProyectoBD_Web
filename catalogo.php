<?php require_once('./fragments/bootstrap.header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ct{alogo</title>
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
                        <a class="nav-link active" aria-current="page" href="/index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/catalogo.php">Catálogo</a>
                    </li>
                </ul>
                <a href="/login.php" class="btn btn-danger">Iniciar Sesión</a>
            </div>
        </div>
    </nav>


    <main>
        <section id="productos-container">
            <div class="container">
                <div class="row">
                    <!-- Filtros -->
                    <div class="col-xs-12 col-md-3 listado-filtros">
                        <div id="filtros-container">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    <h5 class="list-group-item-heading">Precio</h5>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    De menor a mayor
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    De mayor a menor
                                </a>
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    <h5 class="list-group-item-heading">Calificación</h5>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    De mayor a menor
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    De menor a mayor
                                </a>
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    <h5 class="list-group-item-heading">Categoría</h5>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="form-check">
                                        <label for="" class="form-check-label">
                                            <input type="checkbox" value="carreras" class="form-check-input">
                                            Carreras
                                        </label>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="form-check">
                                        <label for="" class="form-check-label">
                                            <input type="checkbox" value="shooter" class="form-check-input">
                                            Shooter
                                        </label>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="form-check">
                                        <label for="" class="form-check-label">
                                            <input type="checkbox" value="survival" class="form-check-input">
                                            Survival
                                        </label>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                <div class="form-check">
                                        <label for="" class="form-check-label">
                                            <input type="checkbox" value="Terror" class="form-check-input">
                                            Terror
                                        </label>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Filtros -->

                    <!-- Productos -->
                    <div class="col-xs-12 col-md-9 listado-productos">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-lg-4">
                                <div class="card">
                                    <img src="https://th.bing.com/th/id/OIP.hJ1c37JAEFTr-zJ3kDXIqAHaGe?pid=ImgDet&rs=1" alt="Producto 1" class="card-img-top img-fluid">
                                    <div class="card-block">
                                        <h4 class="card-title">Producto 1</h4>
                                    <p class="card-text">$000.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-4">
                                <div class="card">
                                    <img src="https://th.bing.com/th/id/OIP.hJ1c37JAEFTr-zJ3kDXIqAHaGe?pid=ImgDet&rs=1" alt="Producto 1" class="card-img-top img-fluid">
                                    <div class="card-block">
                                        <h4 class="card-title">Producto 1</h4>
                                    <p class="card-text">$000.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-4">
                                <div class="card">
                                    <img src="https://th.bing.com/th/id/OIP.hJ1c37JAEFTr-zJ3kDXIqAHaGe?pid=ImgDet&rs=1" alt="Producto 1" class="card-img-top img-fluid">
                                    <div class="card-block">
                                        <h4 class="card-title">Producto 1</h4>
                                    <p class="card-text">$000.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-4">
                                <div class="card">
                                    <img src="https://th.bing.com/th/id/OIP.hJ1c37JAEFTr-zJ3kDXIqAHaGe?pid=ImgDet&rs=1" alt="Producto 1" class="card-img-top img-fluid">
                                    <div class="card-block">
                                        <h4 class="card-title">Producto 1</h4>
                                    <p class="card-text">$000.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-4">
                                <div class="card">
                                    <img src="https://th.bing.com/th/id/OIP.hJ1c37JAEFTr-zJ3kDXIqAHaGe?pid=ImgDet&rs=1" alt="Producto 1" class="card-img-top img-fluid">
                                    <div class="card-block">
                                        <h4 class="card-title">Producto 1</h4>
                                    <p class="card-text">$000.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-4">
                                <div class="card">
                                    <img src="https://th.bing.com/th/id/OIP.hJ1c37JAEFTr-zJ3kDXIqAHaGe?pid=ImgDet&rs=1" alt="Producto 1" class="card-img-top img-fluid">
                                    <div class="card-block">
                                        <h4 class="card-title">Producto 1</h4>
                                    <p class="card-text">$000.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-4">
                                <div class="card">
                                    <img src="https://th.bing.com/th/id/OIP.hJ1c37JAEFTr-zJ3kDXIqAHaGe?pid=ImgDet&rs=1" alt="Producto 1" class="card-img-top img-fluid">
                                    <div class="card-block">
                                        <h4 class="card-title">Producto 1</h4>
                                    <p class="card-text">$000.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-4">
                                <div class="card">
                                    <img src="https://th.bing.com/th/id/OIP.hJ1c37JAEFTr-zJ3kDXIqAHaGe?pid=ImgDet&rs=1" alt="Producto 1" class="card-img-top img-fluid">
                                    <div class="card-block">
                                        <h4 class="card-title">Producto 1</h4>
                                    <p class="card-text">$000.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-4">
                                <div class="card">
                                    <img src="https://th.bing.com/th/id/OIP.hJ1c37JAEFTr-zJ3kDXIqAHaGe?pid=ImgDet&rs=1" alt="Producto 1" class="card-img-top img-fluid">
                                    <div class="card-block">
                                        <h4 class="card-title">Producto 1</h4>
                                    <p class="card-text">$000.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 text-center" id="paginator-container">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                        <a href="#" class="page-link">
                                            &laquo;
                                        </a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">
                                                &raquo;
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Productos -->
                </div>

            </div>

        </section>
    </main>

</body>

</html>