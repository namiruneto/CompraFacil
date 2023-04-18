
<div>
    <img src="Img/logo.png" width="10%" height="10%">

    <nav>
        <ul>
                <li><a href="vista/inicio.php">Inicio</a></li>
                <li><a href="vista/tienda.html">Tienda</a></li>
                <li><a href="vista/Añadir_produc.php">Añadir productos</a></li>
                <li><a href="vista/CRUD.php">CRUD</a></li>
                <li><a href="#">Carito</a></li>
        </ul>
    </nav>

</div>

<style>
nav {
background-color: white;
/* color de fondo del menú */
overflow: hidden;
display: inline-block;
}

nav ul li a {
font-size: 23px;
}

ul {
list-style-type: none;
/* quita los puntos de la lista */
margin: 0;
padding: 0;
display: flex;
/* cambia el comportamiento de la lista a flexbox */
}

li {
display: inline-block;
margin-right: 10px;
float: left;
/* alinea los elementos de la lista en horizontal */
}

li a {
display: block;
color: #F78101;
text-align: center;
padding: 14px 16px;
/* espacio alrededor del texto del enlace */
text-decoration: none;
}

li a:hover {
background-color: #111;
/* color de fondo del enlace cuando se pasa el mouse sobre él */
}

body {
background-image: linear-gradient(to top, #F78101, white);
background-size: 100% 100%;
height: 400vh;
}
</style>