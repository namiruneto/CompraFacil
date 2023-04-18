
<?php include_once("template/cabecera.php"); ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>
    <link href="CRUD.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div>
        <img src="Img/logo.png" width="10%" height="10%">

        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Tienda</a></li>
                <li><a href="#">Añadir productos</a></li>
                <li><a href="#">CRUD</a></li>
            </ul>
        </nav>

    </div>
    
    <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Cantidad Disponible</th>
            <th>Vendido</th>
            <th>Precio</th>
            <th>Operaciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Producto 1</td>
            <td>10</td>
            <td>5</td>
            <td>$10.00</td>
            <td>
              <div class="button-container">
                <button><img src="boton1.png" alt="Botón 1"></button>
                <button><img src="boton2.png" alt="Botón 2"></button>
                <button><img src="boton3.png" alt="Botón 3"></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Producto 2</td>
            <td>5</td>
            <td>2</td>
            <td>$20.00</td>
            <td>
              <div class="button-container">
                <button><img src="boton1.png" alt="Botón 1"></button>
                <button><img src="boton2.png" alt="Botón 2"></button>
                <button><img src="boton3.png" alt="Botón 3"></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Producto 3</td>
            <td>3</td>
            <td>1</td>
            <td>$15.00</td>
            <td>
              <div class="button-container">
                <button><img src="boton1.png" alt="Botón 1"></button>
                <button><img src="boton2.png" alt="Botón 2"></button>
                <button><img src="boton3.png" alt="Botón 3"></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>Producto 4</td>
            <td>8</td>
            <td>3</td>
            <td>$25.00</td>
            <td>
              <div class="button-container">
                <button><img src="boton1.png" alt="Botón 1"></button>
                <button><img src="boton2.png" alt="Botón 2"></button>
                <button><img src="boton3.png" alt="Botón 3"></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>Producto 5</td>
            <td>2</td>
            <td>0</td>
            <td>$30.00</td>
            <td>
              <div class="button-container">
                <button><img src="boton1.png" alt="Botón 1"></button>
                <button><img src="boton2.png" alt="Botón 2"></button>
                <button><img src="boton3.png" alt="Botón 3"></button>
              </div>
      
    <script>
        function mostrarImagen() {
            var archivo = document.getElementById('imagen').files[0];
            var vistaPrevia = document.getElementById('imagen-preview');
            var lector = new FileReader();

            lector.onload = function (evento) {
                vistaPrevia.src = evento.target.result;
            }

            lector.readAsDataURL(archivo);
        }
    </script>
    <footer>
        <div class="columna">
            <img src="Img/logo.png" alt="Logo de la empresa">
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
            padding: 5px;
            display: flex;
            flex-wrap: wrap;
            position: fixed;
            bottom: 0;
            width: 100%;

        }

        .columna {
            flex: 1;
            margin-right: 10px;
        }

        .columna:last-child {
            margin-right: 0;
        }

        .columna img {
            max-width: 50%;
            height: auto;
        }

        .columna h3 {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .columna ul {
            margin: 0;
            padding: 0;
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
</html>