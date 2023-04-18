<?php session_start();
include ("conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>


    <link href="/CSS/AnadirProducto.css" rel="stylesheet" type="text/css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="estilos/estilo.css">


 <!-- importante -->
 <script src="CSS/carrito.css"></script>




</head>
<body>
       





<!-- nabvar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mi tienda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Página</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="cursor:pointer;" onclick="consultar_carrito();"><i class="fas fa-shopping-cart"></i> Mi Carrito</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" id="buscar" name="buscar" onkeyup="buscar_ahora($('#buscar').val());" type="search" placeholder="buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>












<!-- MODAL CARRITO -->
<div class="modal fade" id="modal_cart" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mi carrito</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
			<div class="modal-body">
				<div>
					<div class="p-2">
					

              <div id="mi_carrito"></div>


					</div>
				</div>
			</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a type="button" class="btn btn-primary" onclick="borrar_carrito();">Vaciar carrito</a>
      </div>
    </div>
  </div>
</div>
<!-- END MODAL CARRITO -->





















<!-- articulos -->
<div class="album py-5 bg-light">
<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <?php 
    $buscardor=mysqli_query($conexion,"SELECT * FROM articulos"); 
    while($resultado = mysqli_fetch_assoc($buscardor)){ 
    ?>
      <div class="col-4">
        <div class="card shadow-sm">
          <img src="img/<?php echo $resultado["img"]; ?>.jpg" alt="">
          <div class="card-body">
            <p class="card-text"><?php echo $resultado["nombre"]; ?></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Detalles</button>
                <button type="submit" class="btn btn-sm btn-outline-secondary"  onclick=" envia_carrito($('#ref<?php echo $resultado['id']; ?>').val(),$('#titulo<?php echo $resultado['id']; ?>').val(),$('#precio<?php echo $resultado['id']; ?>').val(),$('#cantidad<?php echo $resultado['id']; ?>').val());">Añadir al carrito</button>
                <input name="ref" type="hidden" id="ref<?php echo $resultado["id"]; ?>" value="<?php echo $resultado["id"]; ?>" />                           
                <input name="precio" type="hidden" id="precio<?php echo $resultado["id"]; ?>" value="<?php echo $resultado["precio"]; ?>" />
                <input name="titulo" type="hidden" id="titulo<?php echo $resultado["id"]; ?>" value="<?php echo $resultado["nombre"]; ?>" />
                <input name="cantidad" type="hidden" id="cantidad<?php echo $resultado["id"]; ?>" value="1" class="pl-2" />
              </div>
              <small class="text-muted"><?php echo $resultado["precio"]; ?>€</small>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
</div>




<!-- mandamos al carrito -->
<script type="text/javascript">
function envia_carrito(ref,titulo,precio,cantidad) {
  var parametros = {"ref":ref,"titulo":titulo,"precio":precio,"cantidad":cantidad};
     $.ajax({
    data:parametros,
    url:'cart.php',
    type: 'POST',
    beforeSend: function () {
     
    },
    success: function (response) {  
        
// todo ok
        
    },
    error: function (response, error) {
     
  //error

    }
});
}
</script>

<!-- consultamos nuestro carrito -->
<script type="text/javascript">
        function consultar_carrito() {
        var parametros = {};
        $.ajax({
        data:parametros,
        type: 'POST',
        url: 'modal_carrito.php',
        success: function(data) {
        document.getElementById("mi_carrito").innerHTML = data;
        }
        });
        }
</script>


<!-- borrar carro -->
<script type="text/javascript">
        function borrar_carrito() {
        var parametros = {};
        $.ajax({
        data:parametros,
        type: 'POST',
        url: 'borrarcarro.php',
        success: function(data) {
        
          consultar_carrito();

        }
        });
        }
</script>









        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>


</body>
</html>