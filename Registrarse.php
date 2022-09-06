<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrarse</title>
  <link rel="stylesheet" href="Front-end/css/ayudanos.css" />
  <link rel="stylesheet" href="Front-end/css/bar-lat.css" />
  <link rel="stylesheet" href="Front-end/css/barra-nav.css">
  <link rel="stylesheet" href="Front-end/css/general.css">
  <link rel="stylesheet" href="Front-end/css/iniciar_sesion.css" />
</head>

<body>
  <div class="cuerpo">
    <div class="barra-nav">
      <nav>
        <ul>
          <a href="index.html">
            <li>Inicio</li>
          </a>
          <a href="Categorias.html">
            <li>Categorías</li>
          </a>
          <a href="conocenos.html">
            <li>Conócenos</li>
          </a>
          <div class="buscador"></div>
        </ul>
      </nav>
    </div>
    <header>
      <h2>Registrarse</h2>
    </header>
    <div class="container">
      <article>
        Para ayudarnos debes registrarse
      </article>
      <div class="articulos">
        <article>
          <form action="Back-end/registro.php" method="post">
            <div class="formulario">
              <div class="input">
                <label for="email">Ingresa Correo electrónico</label>
                <input type="email" name="email" id="email" placeholder="Correo electrónico" minlength="6" >
              </div>
              <div class="input">
                <label for="pass">Ingresa la contraseña</label>
                <input type="password" name="pass" id="pass" placeholder="Contraseña" minlength="3">
              </div>
              <div class="button">
                <input type="submit" name="registro" value="Registrarse">
              </div>
            </div>
          </form>
          <div class="formulario">
            <a href="Iniciar_sesion.php">
              <span>Iniciar sesión</span>
            </a>
          </div>
        </article>
      </div>
    </div>
  </div>
</body>

</html>