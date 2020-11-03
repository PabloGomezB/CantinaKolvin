window.onload = function () {

    let comandaArray = localStorage.getItem("carrito");
    console.log(comandaArray);

    let comandaArrayJSON = JSON.parse(comandaArray);

    

    let tablaHTML = '<table border=1 style="width: 500px;">';
    tablaHTML += "<tr style='text-align: center;'>";
    tablaHTML += "<td><h4>Nombre</h4></td>"
    tablaHTML += "<td><h4>Precio</h4></td>"
    tablaHTML += "<td><h4>Cantidad</h4></td>"
    tablaHTML += "<td><h4>Total</h4></td>"
    tablaHTML += "</tr>";
    comandaArrayJSON.forEach(function (element) {
        tablaHTML += "<tr style='text-align: center; width: 500px;'>";
        tablaHTML += "<td>"
        tablaHTML += `<img src="${element.url_image}" alt='Producto' width='100px;'>`
        tablaHTML += element.nombre;
        tablaHTML += "</td>"

        tablaHTML += "<td style='text-align: center; width: 100px;'>"
        tablaHTML += element.precio;
        tablaHTML += "€"
        tablaHTML += "</td>"

        tablaHTML += "<td style='text-align: center; width: 100px;'>"
        tablaHTML += element.cantidad;
        tablaHTML += "</td>"

        tablaHTML += "<td style='text-align: center; width: 100px;'>"
        tablaHTML += element.precio*element.cantidad;
        tablaHTML += "€"
        tablaHTML += "</td>"

        

        tablaHTML += "</tr>";

    });
    
    tablaHTML += "<tr>";
    tablaHTML += "<td>"
    tablaHTML += "</td>"

    tablaHTML += "<td>"
    tablaHTML += "</td>"

    tablaHTML += "<td>"
    tablaHTML += "</td>"

    tablaHTML += "<td style='text-align: center; height: 50px;'>"
    tablaHTML += "Total: "
    tablaHTML += localStorage.getItem("total");
    tablaHTML += "€"
    tablaHTML += "</td>"
    tablaHTML += "</tr>";
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
