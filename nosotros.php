<?php require_once('./fragments/bootstrap.header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
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
    <br><br><br>
    <div class="nosotros">
        <img src="/img/logoGameflix.png" alt="" height="100px">
        <div class="linea"></div>
        <br>
        <div class="us" >
        <h4>Bienvenido/a a nuestra página web, el destino definitivo para los amantes de los videojuegos en línea. 
            Aquí en nuestra tienda virtual, nos apasiona brindarte una experiencia de juego inigualable directamente
             desde la comodidad de tu hogar. Con una amplia selección de títulos de última generación, desde emocionantes 
             aventuras de acción hasta cautivadores juegos de rol y emocionantes desafíos multijugador, nuestro catálogo está
              diseñado para satisfacer las necesidades de todos los jugadores. Nuestro objetivo es ofrecerte la mejor variedad 
              de videojuegos, garantizando la calidad y la diversión en cada experiencia de juego. Sumérgete en nuestro mundo 
              virtual y descubre el poder de los videojuegos en línea. ¡Prepárate para vivir emociones intensas y desafíos 
              emocionantes en cada clic!</h4>
</div>
        <div class="linea"></div>
        <br>
        <h5>Centro de Enseñanza Técnica Industrial <br>
        Plantel Colomos <br>
        Desarrollo de Software <br>
        <br> EQUIPO: <br>
            Moises David Lozano Bobadilla   18310167 <br>
            Janne Oman Herrera Pineda       18310146 <br>
            Jacqueline López Rios           21310437 <br>
            <br> CONTACTO: <br>
            <a href="mailto:a21310437@ceti.mx">e-mail a Jacqueline</a><br>
            <a href="mailto:a18310146@ceti.mx">e-mail a Janne</a><br>
            <a href="mailto:a18310167@ceti.mx">e-mail a Moises</a><br>
            <div class="linea"></div>
            <br>
        </h5>
    </div>
</body>

</html>