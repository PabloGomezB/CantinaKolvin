window.onload = function () {

    let comandaArray = localStorage.getItem("carrito");
    console.log(comandaArray);

    let comandaArrayJSON = JSON.parse(comandaArray);

    let tablaHTML = '<table border=1>';
    tablaHTML += "<tr>";
    tablaHTML += "<td>Nombre</td>"
    tablaHTML += "<td>Precio</td>"
    tablaHTML += "</tr>";
    comandaArrayJSON.forEach(function (element) {
        tablaHTML += "<tr>";
        tablaHTML += "<td>"
        tablaHTML += element.nombre;
        tablaHTML += "</td>"

        tablaHTML += "<td>"
        tablaHTML += element.precio;
        tablaHTML += "</td>"

        tablaHTML += "<td>"
        tablaHTML += element.cantidad; // <-- AQUI
        tablaHTML += "</td>"
        tablaHTML += "</tr>";

    });
    tablaHTML += "</table>";

    let tablaDivElement = document.querySelector("#tabla");
    tablaDivElement.innerHTML = tablaHTML;


    document.getElementById("inputHidden").setAttribute("value", comandaArray);

    document.getElementById("totalHidden").setAttribute("value", 2342334543);

    console.log(document.getElementById("totalHidden").value);
}

//Para recibir la cantidad de un elemento --> element.cantidad
//Para el total lo cojeis de localStorage con id "total"
//VAMOOS KEVIIIIIIIIIIIIIN
//De nada chavales
