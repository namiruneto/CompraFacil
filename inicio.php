<?php include_once("template/cabecera.php"); ?>

<!DOCTYPE html>
<html lang="es"></html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio</title>
  <link href="" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="/vista/estilos.css" rel="stylesheet">
</head>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script></body>
  <nav class="navbar navbar-default navbar-static-top">

    <title>Blog de java de Ashley</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="css\estilos.css" rel="stylesheet">
  </head>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script></body>
  <nav class="navbar navbar-default navbar-static-top">
  <body>
    <div>
        <img src="Img/logo.png" width="39%" height="18%">
        
        <nav>
          <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Tienda</a></li>
            
             </nav>
        
    </div>
    <div class="col-md-3">

<div class="card">

    <img class="card-img-top" src="holder.js/100x180/" alt="">

    <div class="card-body">
        <h4 class="card-title">Title</h4>
        <a name="" id="" class="btn btn-primary" href="#" role="button">ver más</a>
        <p class="card-text">Text</p>
    </div>

    </div>

    </div>
   
    <form action="#" method="post">
      
    </form>
    
    <img id="" src="#" alt="">

    <script>
        function mostrarImagen() {
          var archivo = document.getElementById().files[0];
          var vistaPrevia = document.getElementById();
          var lector = new FileReader();
          
          lector.onload = function(evento) {
            vistaPrevia.src = evento.target.result;
          }
          
          lector.readAsDataURL(archivo);
        }
      </script>
       <footer>
        <div class="columna">
          <img src="" alt="">
        </div>
        <div class="columna">
          <h3>Nuestras Redes Sociales:</h3>
          <ul>
            <li><a href="#">Facebook CompraFacil</a></li>
            <li><a href="#">TikTok @CompraFacil</a></li>
            <li><a href="#">Instagram @CompraFacil</a></li>
          </ul>
        </div>
        <div class="columna">
          <h3>Contacto</h3>
          <p>Celular: 1234567890</p>
          <p>Correo electrónico: Support@comprafacil.com</p>
        </div>
      </footer>
      
      <style>
        footer {
          background-color: #B75252;
          padding: 40px;
          display: flex;
          flex-wrap: wrap;
          position: fixed;
          bottom: 0;
          width: 100%;

        }
      
        .columna {
          flex: 1;
          margin-right: 20px;
        }
      
        .columna:last-child {
          margin-right: 0;
        }
      
        .columna img {
          max-width: 100%;
          height: auto;
        }
      
        .columna h3 {
          font-size: 1.2em;
          font-weight: bold;
          margin-bottom: 10px;
        }
      
        .columna ul {
          margin: 0;
          padding: 40;
          list-style: none;
        }
      
        .columna ul li {
          margin-bottom: 5px;
        }
      
        .columna ul li a {
          color: #000;
          text-decoration: none;
        }
      
        .columna p {
          margin-bottom: 5px;
        }
      </style>
  </body>
  <?php include_once("template/pie.php"); ?>
</html>
