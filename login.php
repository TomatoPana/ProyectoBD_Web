<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </header>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="/img/gameflix.jpg" height="30px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Catálogo</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-5">
        <div class="login-form">
          <form action="/examples/actions/confirmation.php" method="post">
            <h2>Iniciar Sesión</h2>
            <p class="hint-text">Bienvenido a Gameflix</p>
            <div class="form-group">
              <input type="text" class="form-control" name="username" placeholder="Usuario" required="required">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-danger btn-lg btn-block">Iniciar Sesión</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-7">
        <div class="signup-form">
          <form action="/examples/actions/confirmation.php" method="post">
            <h2>Registrarse</h2>
            <p class="hint-text">Crea tu cuenta. Es gratis y solo tomará un minuto.</p>
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Nombre" required="required">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="usuario" placeholder="Usuario" required="required">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Correo" required="required">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Contraseña" required="required">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="confirm_password" placeholder="Confirme su contraseña" required="required">
            </div>
            <div class="form-group">
              <label class="form-check-label">
                <input type="checkbox" required="required"> Acepto los
                <a href="#">Terminos y condiciones</a>;
              </label>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-danger btn-lg btn-block" style="yellow">Registrarse</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>