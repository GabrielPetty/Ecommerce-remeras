
<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css/paginaPrincipal.css">
  <title>T-SHIRT</title>
</head>

<body translate="no">
  <?php
  
  /* Verificación de información pasada por metodo POST  */
  if (isset($_POST['nombre']) == true) {
    echo "Ingrese algún nombre o alias para continuar";
    exit;
  }/*else{
    require("../config/db-config.php");
  }*/
  if (isset($_POST['nombre']) == true) {
    $nombre = $_POST['nombre']; ?>
    <h1 style="text-align: center;"> Bienvenido
      <?php echo $nombre ?> !!!
    </h1>
    <?php
  }
  ?> 

  <h1 class="tituloPrincipal" id="tituloPrincipal">T-SHIRT</h1>

  <div class="login">
    <a href="../index.php">Administración</a>
  </div>
  
  <header>
    <nav class="navegacion">
      <ul class="menu">
        <li><a href="../inicio.html">INICIO</a></li>
        <li><a href="#contacto">CONTACTO</a></li>
        <li><a href="#sobre nosotros">NOSOTROS</a></li>
      </ul>
    </nav>
  </header>
  <div class="item" id="inicio">
    <h2 class="subtitulo1">Estilos de Remeras</h2>
    <section>
      <a href="/remeras/remeras/retro.php"><img id="imagen"
          src="../imagen/Imagen de WhatsApp 2023-12-02 a las 20.14.41_7c541c55.jpg"></a>
      <a href="/remeras/remeras/moderno.php"><img id="imagen" src="../imagen/images (1).jpg"></a>
      <a href="/remeras/remeras/ficcion.php"><img id="imagen" src="../imagen/mono 2 remera.webp"></a>
    </section>
    <div class="estilos">
      <ul class="t1">
        <li>RETRO</li>
        <li>MODERNO</li>
        <li>FICCIÓN</li>
      </ul>
    </div>
    <section>
      <a href="/remeras/remeras/infantil.php"><img id="imagen" src="../imagen/mono remera.webp"></a>
      <a href="/remeras/remeras/anime.php"><img id="imagen" src="../imagen/pez remera.webp"></a>
      <a href="/remeras/remeras/color.php"><img id="imagen"
          src="../imagen/piet-remera-negra-cuadrado-blanco-01.jpg"></a>
    </section>
    <div class="estilos">
      <ul class="t1">
        <li>INFANTIL</li>
        <li>ANIMÉ</li>
        <li>COLOR</li>
      </ul>
    </div>
    <section>
      <a href="/remeras/remeras/clasico.php"><img id="imagen" src="../imagen/Remera-sublimar-hombre-.jpg"></a>
    </section>
    <div class="estilos">
      <ul class="t1">
        <li>CLÁSICO</li>
      </ul>
    </div>
  </div>
  <br>
  <br>
  <footer>
    <div class="item1" id="contacto">
      <h2>
        <br>
        <p id="parrafo_1">E-mail: tshirt@remeras.gmail.com</p>
        <p id="parrafo_2">Dirección: Matheu 350 Lomas del Mirador</p>
        <p id="parrafo_3">Tel: 2168-1591</p>
        <p id="parrafo_4">Whatsapp: 11-2126-5833</p>
        <p id="parrafo_5">Instagram: T-SHIRT_remeras</p>
        <br>
        <br>
      </h2>
    </div>

    <div class="item2" id="sobre nosotros">
      <div class="titulo">
        Sector destinado para una breve historia de cómo surgió la empresa, sus metas, qué servicios ofrece al igual que aspiraciones.
      </div>
      <h3 id="historia">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptates vitae natus. Quae, autem molestias
        ipsa cupiditate velit earum recusandae quisquam deleniti est similique dolor excepturi amet perspiciatis
        quidem quos?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla natus dolores deleniti? Ipsam
        quibusdam harum atque, debitis nesciunt deleniti quisquam eveniet voluptates, officia doloribus ea, aut
        ducimus accusantium tempore architecto!Lorem
      </h3>
      <br>
    </div>
    
  </footer>
  
  <br>
  <br>
  <br>

  <!-- INICIO BOTON VOLVER -FUNCIONES- -->
  <button onclick="volverArriba()" id="volver-arriba" title="Volver arriba">Volver arriba</button>

  <script>
    window.onscroll = function () { mostrarBotonVolverArriba() };

    function mostrarBotonVolverArriba() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("volver-arriba").style.display = "block";
      } else {
        document.getElementById("volver-arriba").style.display = "none";
      }
    }

    function volverArriba() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>



</body>


</html>