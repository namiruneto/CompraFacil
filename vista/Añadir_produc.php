<!DOCTYPE html>
<html>

<head>
    <title>Anadir Productos</title>
    <link href="CSS/AnadirProducto.css" rel="stylesheet" type="text/css">

</head>

<body>
<?php include_once("template/cabecera.php"); ?>
   
    <div class="formularioDeAnadirProducto">
        <div class="mostrar producto">
            <label for="imagen">Subir Imagen</label>
            <input type="file" id="imagen" name="imagen">

            <div class="image-container">
                <div class="message">Imagen Del Producto</div>
            </div>




        </div>
        <div class="ingresarDatosFormulario">

            <form action="#" method="post">
                <label for="opcion1">Título del producto</label>
                <input type="text" id="opcion1" name="opcion1">
                <label for="opcion2">Descripción del Producto</label>
                <input type="text" id="opcion2" name="opcion2">
                <label for="opcion3">Precio</label>
                <input type="text" id="opcion3" name="opcion3">




            </form>
        </div>

    </div>
    <div style="display:flex; align-items:center; justify-content:center; height:20vh;">
        <input type="submit" value="Publicar"
            style="background-color: #E83B19; color: white; font-size: 34px; padding: 10px 20px; width: 50%; margin: 0 auto;  border-radius: 10px;">
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
