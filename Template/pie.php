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