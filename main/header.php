<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guesser-Demo</title>

  <!--link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../Guesser-Demo/estilos/styles.css">
  <!--Integración iconos-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!--Integración librería JQuery-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!--Integración contador js hasta día siguiente-->
  <script src="../../Guesser-Demo/js/countdown.js"></script>
  <!--Integración cuadro texto js-->
  <script src="../../Guesser-Demo/js/cuadroTextoInfo.js"></script>
  <script src="../../Guesser-Demo/js/cuadroTextoPregunta.js"></script>
  <link rel="icon" href="../../Guesser-Demo/favicon.png" type="image/x-icon">

</head>

<body>

  <header class="navbar">
    <!--Contador siguiente reto-->
    <div class="countdown-container navbar-item">
      <div class="countdown">
        <p>Próximo reto</p>
        <div id="countdown-timer"></div>
      </div>
    </div>
    <!--Logo-->
    <div class="header-title logo navbar-item">
      <a href="/Guesser-Demo/index.php" class="title indextitle">GUESSER</a>
      <div class="demo-badge">DEMO</div>
    </div>
    <!--Iconos derecha de header-->
    <div class="icons-container navbar-item">
      <div class="icons">
        <a href="#" id="btn-question" class="btn-header"><i class="fas fa-question"></i></a>
        <div id="cuadroTextoPreg" class="cuadroTexto">
          <h2>Instrucciones</h2>
          <p>¡Cada día aparecerá un reto nuevo!</p>
          <p><u>Fotograma</u>: Se muestra un fotograma que deberás adivinar introduciendo la respuesta que creas conveniente. Si fallas se mostrará la siguiente imagen del reto.
          </p>
          <p><u>Emoji</u>: Se muestra un emoji sobre una temática. Cada vez que falles, se mostrará el siguiente emoji relacionado con el reto.</p>
          <p><u>Personaje</u>: Se muestra una imagen de un personaje con un zoom en una zola aleatoria. Cada vez que falles se reducirá el zoom.</p>
          <a href="#" id="btn-cerrar-question" class="fas fa-x btn-cerrar-header"></a>
        </div>
        <a href="#" id="btn-info" class="btn-header"><i class="fas fa-info"></i></a>
        <div id="cuadroTextoInfo" class="cuadroTexto">
          <h2>Acerca de</h2>
          <p> En esta web encontrarás distintos modos de juegos de adivinanzas sobre muchas temáticas.</p>
          <p style="margin: 0;">Es un juego inspirado en<a href="https://framed.wtf/" target="_blank" rel="noopener noreferrer"> Framed</a>,
            <a href="https://www.gamedle.wtf/" target="_blank" rel="noopener noreferrer"> Gamedle</a> y
            <a href="https://loldle.net/" target="_blank" rel="noopener noreferrer"> Loldle</a> entre
            <a href="
            https://medium.com/floodgates/the-complete-and-authoritative-list-of-wordle-spinoffs-fb00bfafc448" target="_blank" rel="noopener noreferrer"> otros</a>.
          </p><br />
          <p>
            <b>Derechos</b><br />
            • Iconos:<a href="https://www.flaticon.es/" target="_blank" rel="noopener noreferrer">flaticon</a>,<a href="https://iconic.app/"> iconic</a> .<br>
            • Imágenes de series y películas:<a href="https://beta.flim.ai/" target="_blank" rel="noopener noreferrer">flim.</a>
          </p>
          <a href="#" id="btn-cerrar-info" class="fas fa-x btn-cerrar-header"></a>
        </div>
        <!--Selector de idioma-->
        <script src="/Guesser-Demo/js/dropdown.js"></script>
        <div class="lang-menu">
          <div class="selected-lang">
            <a href="#"><i class="fas fa-globe"></i></a>
          </div>
          <ul>
            <li>
              <a href="#" class="es"><img src="/Guesser-Demo/imagenes/espana.png" alt="bandera España" class="imagen-idioma"> Español</a>
            </li>
            <li>
              <a href="#" class="us"><img src="/Guesser-Demo/imagenes/estados-unidos.png" alt="bandera España" class="imagen-idioma"> English</a>
            </li>
          </ul>
        </div>
      </div>
  </header>