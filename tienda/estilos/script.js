let mostrador = document.getElementById("mostrador");
let seleccion = document.getElementById("seleccion");
let imgSeleccionada = document.getElementById("img");
let modeloSeleccionado = document.getElementById("modelo");
let descripSeleccionada = document.getElementById("oculto");
let cantidad = document.getElementById("oculto1");
let precioSeleccionado = document.getElementById("precio");

var oculto = document.getElementById("oculto");

    // Obtén el valor del atributo 'style' del elemento 'oculto'
    var estiloIcono = oculto.getAttribute("style");
    
    // Asigna el estilo del icono al contenido HTML del elemento 'oculto'
    oculto.innerHTML = "<i style='" + estiloIcono + "'></i>";

    var oculto1 = document.getElementById("oculto1");

    // Obtén el valor del atributo 'style' del elemento 'oculto'
    var estiloIcono1 = oculto1.getAttribute("style");
    
    // Asigna el estilo del icono al contenido HTML del elemento 'oculto'
    oculto1.innerHTML = "<u style='" + estiloIcono1 + "'></u>";
function cargar(item){
    quitarBordes();
    mostrador.style.width = "60%";
    seleccion.style.width = "40%";
    seleccion.style.opacity = "1";
    item.style.border = "2px solid red";

    imgSeleccionada.src = item.getElementsByTagName("img")[0].src;

    modeloSeleccionado.innerHTML =  item.getElementsByTagName("p")[0].innerHTML;

    descripSeleccionada.innerHTML = item.getElementsByTagName("i")[0].innerHTML;

    precioSeleccionado.innerHTML =  item.getElementsByTagName("span")[0].innerHTML;

    cantidad.innerHTML= item.getElementsByTagName("u")[o].innerHTML

}
function cerrar(){
    mostrador.style.width = "100%";
    seleccion.style.width = "0%";
    seleccion.style.opacity = "0";
    quitarBordes();
}
function quitarBordes(){
    var items = document.getElementsByClassName("item");
    for(i=0;i <items.length; i++){
        items[i].style.border = "none";
    }
}


