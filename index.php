<?php require_once('./fragments/bootstrap.header.php'); ?>

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

<main class="py-56">

  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" >
        <img src="/img/genshinimpact.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/img/fallguys.jpg"  class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/img/overwatch.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container">
    <div class="card-group">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Juego 1</h5>
          <p class="card-text">Publicado por: Nintendo</p>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">Last updated 3 mins ago</small>
        </div>
      </div>
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Juego 2</h5>
          <p class="card-text">Publicado por: Nintendo</p>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">Last updated 3 mins ago</small>
        </div>
      </div>
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Juego 3</h5>
          <p class="card-text">Publicado por: Nintendo</p>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
  </div>

</main>
