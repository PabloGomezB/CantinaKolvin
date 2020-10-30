window.onload = function () {

    let comandaArray = localStorage.getItem("carrito");

    alert(comandaArray);

    //comandaArray = JSON.parse(comandaArray);
    //console.log(comandaArray);

    function genera_tabla() {
        var miTabla = document.getElementById("tabla");

        var tabla = document.createElement('table');
        tabla.border = '1';

        var tBody = document.createElement('tbody');
        tabla.appendChild(tBody);

        for (var i = 0; i < 1; i++) {
            var tr = document.createElement('tr');
            tBody.appendChild(tr);

            for (var j = 0; j < 1; j++) {
                var td = document.createElement('td');
                td.width = '75';
                td.appendChild(document.createTextNode("Producto"));
                tr.appendChild(td);
            }

            for (var k = 0; k < 1; k++) {
                var td = document.createElement('td');
                td.width = '75';
                td.appendChild(document.createTextNode("Precio"));
                tr.appendChild(td);
            }

            for (var l = 0; l < 1; l++) {
                var td = document.createElement('td');
                td.width = '75';
                td.appendChild(document.createTextNode("Cantidad"));
                tr.appendChild(td);
            }

            for (var m = 0; m < 1; m++) {
                var td = document.createElement('td');
                td.width = '75';
                td.appendChild(document.createTextNode("Total"));
                tr.appendChild(td);
            }

        }

        for (var n = 0; n < 1; n++) {
            var tr = document.createElement('tr');
            tBody.appendChild(tr);

            for (var o = 0; o < 4; o++) {
                var td = document.createElement('td');
                td.width = '75';
                td.appendChild(document.createTextNode("Tabla creada 2"));
                tr.appendChild(td);
            }
        }

        for (var p = 0; p < 1; p++) {
            var tr = document.createElement('tr');
            tBody.appendChild(tr);

            for (var q = 0; q < 4; q++) {
                var td = document.createElement('td');
                td.width = '75';
                td.appendChild(document.createTextNode("Tabla creada 3"));
                tr.appendChild(td);
            }
        }
        miTabla.appendChild(tabla);

    }
      
    genera_tabla();

    console.log(comandaArray);
    document.getElementById("inputHidden").setAttribute("value", comandaArray);



}