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

    /******************************************************************************************************************************** */

    validarForm();

    function validarForm(){

        let OkNombre = false;
        let OkTel = false;
        let OkEmail = false;
    
        document.getElementById("confirmar").disabled=true;
        document.getElementById("nombre").focus();

        // - Validar que el nombre solo contenga letras
        document.getElementById("nombre").addEventListener("keyup", function(){
            let patron = /^[a-zA-Z ]+$/;
            let valido = patron.test(this.value);

            if (!valido){
                toggleCheck("imgNombre",false);
                OkNombre = false;
                toggleBoton(OkNombre, OkTel, OkEmail);
            }
            else{
                toggleCheck("imgNombre",true);
                OkNombre = true;
                toggleBoton(OkNombre, OkTel, OkEmail);
            }
        });


        // - Validar que el email sea valido y con dominio "inspedralbes.cat"
        document.getElementById("email").addEventListener("keyup", function(){
            let patron = /^[\w]+@{1}[\w]+\.[a-z]{2,3}$/;
            splited = this.value.split('@');
            correo = splited[1];
            let valido = patron.test(this.value);
    
            if (!valido || correo !== "inspedralbes.cat"){
                toggleCheck("imgEmail",false);
                OkTel=false;
                toggleBoton(OkNombre, OkTel, OkEmail);
            }
            else{
                toggleCheck("imgEmail",true);
                OkTel = true;
                toggleBoton(OkNombre, OkTel, OkEmail);
            }
        });
    
        // - Validar que el telefono tenga 9 digitos
        document.getElementById("numero").addEventListener("keyup", function(){
            let patron = /^[9|6]{1}([\d]{2}[-]*){3}[\d]{2}$/; //^(?:\D*\d){9}\D*$/;
            let valido = patron.test(this.value);

            if (!valido){
                toggleCheck("imgNumero",false);
                OkEmail = false;
                toggleBoton(OkNombre, OkTel, OkEmail);
            }
            else{
                toggleCheck("imgNumero",true);
                OkEmail = true;
                toggleBoton(OkNombre, OkTel, OkEmail);
            }
        });
    
        /******************************************************************************************************************************** */
        function toggleCheck(id, valido){
            let img = document.getElementById(id);
            if(valido){
                img.removeAttribute("src");
                img.setAttribute("src", "img/finalizacion/ok.png");
            }
            else{
                img.removeAttribute("src");
                img.setAttribute("src", "img/finalizacion/ko.png");
            }
            
        }

        function toggleBoton(n,t,e){
            if(n && t && e){
                document.getElementById("confirmar").disabled=false;
            }else{
                document.getElementById("confirmar").disabled=true;
            }
        };
        
    }

}

//Para recibir la cantidad de un elemento --> element.cantidad
//Para el total lo cojeis de localStorage con id "total"
//VAMOOS KEVIIIIIIIIIIIIIN
//De nada chavales
