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
                        <a class="nav-link active" aria-current="page" href="/index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Catálogo</a>
                    </li>
                </ul>
                <a href="/login.php" class="btn btn-danger">Iniciar Sesión</a>
            </div>
        </div>
    </nav>


    <div class="pagina-juego">
        <div class="banner"></div>
        <div class="main-container">
            <div class="portada-juego">
                <img src="https://th.bing.com/th/id/OIP.kIZGJpNxIo9s4WFCHALHRQHaHy?pid=ImgDet&rs=1" alt="" width="450">
            </div>
            <div class="titulo-juego">
                <h2>OVERWATCH 2</h2>
                <p>Precio: $000.00</p>
            </div>
            <div class="info-juego">
                <h3>DESCRIPCION</h3>
                <p>Overwatch 2 es un videojuego de disparos en primera persona. Fue desarrollado y publicado por Blizzard Entertainment.
                    Es una secuela del hero shooter de 2016 Overwatch. El videojuego se diseñó para tener un entorno compartido para los modos
                    de jugador contra jugador (JcJ) con el primer videojuego al tiempo que presenta modos cooperativos persistentes. Un cambio
                    importante en el JcJ fue reducir el tamaño de los equipos de seis a cinco, lo que requirió que se reelaboraran varios
                    personajes. El videojuego tuvo una beta cerrada en abril y mayo de 2022. El videojuego se lanzó como un título gratuito en
                    acceso anticipado el 4 de octubre de 2022.</p>
            </div>
            <br>
            <div class="rating">
                <h2>¿Cómo calificaría este videojuego?</h2>
                <div>
                    import React from 'react';
                    import { MDBContainer, MDBRating } from 'mdbreact';

                    const RatingPage = () => {
                    return (
                    <MDBContainer>
                        <MDBRating iconRegular />
                    </MDBContainer>
                    );
                    };

                    export default RatingPage;
                </div>
            </div>
            <br>
            
            <input type="button" class="btn-danger" name="comprar" id="comprar" value="Comprar">
        </div>
    </div>




</body>

</html>