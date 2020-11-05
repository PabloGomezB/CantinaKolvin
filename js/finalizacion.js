window.onload = function () {
    let comandaArray = localStorage.getItem("carrito");
    let total = localStorage.getItem("total");

    let comandaArrayJSON = JSON.parse(comandaArray);

    let tablaHTML = '<table>';
    tablaHTML += "<tr style='border-bottom: 1px solid grey;'>";
    tablaHTML += "<td style='text-align: left;' width='400px' ><h4>Mi carrito (" + comandaArrayJSON.length + ")</h4></td>";
    tablaHTML += "<td width='250px' style='text-align: center;'><h4>Precio</h4></td>"
    tablaHTML += "<td width='250px' style='text-align: center;'><h4>Cant.</h4></td>"
    tablaHTML += "<td style='text-align: right;' width='250px'><h4>Total</h4></td>"
    tablaHTML += "</tr>";
    comandaArrayJSON.forEach(function (element) {
        tablaHTML += "<tr>";
        tablaHTML += "<td style='text-align: left; padding: 10px;'>"
        tablaHTML += `<img src="${element.url_image}" alt='Producto' width='100px;'>`
        tablaHTML += "<span style='margin-left: 10px;'>"+ element.nombre +"</span>";
        tablaHTML += "</td>"

        tablaHTML += "<td style='text-align: center;'>"
        tablaHTML += element.precio;
        tablaHTML += "€"
        tablaHTML += "</td>"

        tablaHTML += "<td style='text-align: center;'>"
        tablaHTML += element.cantidad;
        tablaHTML += "</td>"

        tablaHTML += "<td style='text-align: right;'>"
        tablaHTML += element.precio * element.cantidad;
        tablaHTML += "€"
        tablaHTML += "</td>"
        tablaHTML += "</tr>";

    });
    tablaHTML += "<tr style='border-top: 1px solid grey;'>";
    tablaHTML += "<td>"
    tablaHTML += "</td>"
    tablaHTML += "<td>"
    tablaHTML += "</td>"
    tablaHTML += "<td style='text-align: center;'>"
    tablaHTML += "Total:"
    tablaHTML += "</td>"
    tablaHTML += "<td style='text-align: right;'>"
    tablaHTML += localStorage.getItem("total");
    tablaHTML += "€"
    tablaHTML += "</td>"
    tablaHTML += "</tr>";
    tablaHTML += "</table>";


    let tablaDivElement = document.querySelector("#tabla");
    tablaDivElement.innerHTML = tablaHTML;


    document.getElementById("inputHidden").setAttribute("value", comandaArray);

    document.getElementById("totalHidden").setAttribute("value", total);

    console.log(document.getElementById("totalHidden").value);
}

//Para recibir la cantidad de un elemento --> element.cantidad
//Para el total lo cojeis de localStorage con id "total"
//VAMOOS KEVIIIIIIIIIIIIIN
//De nada chavales
