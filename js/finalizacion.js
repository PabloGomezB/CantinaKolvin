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

    validarForm();

    function validarForm(){

        let formularioValido = false;
    
        let passLong = false;
        let passMayus = false;
        let passMinus = false;
    
        document.getElementById("nombre").focus();
    
        /******************************************************************************************************************************** */
    
    
        // Si el usuario modifica la password le reseteo la confirmación para si comprobarla de nuevo mas facilmente
        // document.getElementById("pass1").addEventListener("keyup", function(){
        //     document.getElementById("pass2").value = "";
        //     document.getElementById("pass2").style.backgroundColor = "yellow";
        //     formularioValido = false;
    
        //     let password = document.getElementById("pass1").value;
        //     // Codigo en Passwordv3.js
        //     let resultadoPassword = passwordValidation(password);
    
        //     if(resultadoPassword.long){
        //         document.getElementById("digitos").classList.remove("passError");
        //         document.getElementById("digitos").classList.add("passValida");
        //         passLong = true;
        //     }else{
        //         document.getElementById("digitos").classList.remove("passValida");
        //         document.getElementById("digitos").classList.add("passError");
        //         passLong = false;
        //     }
        //     if(resultadoPassword.minus){
        //         document.getElementById("minuscula").classList.remove("passError");
        //         document.getElementById("minuscula").classList.add("passValida");
        //         passMinus = true;
        //     }else{
        //         document.getElementById("digitos").classList.remove("passValida");
        //         document.getElementById("digitos").classList.add("passError");
        //         passLong = false;
        //     }
        //     if(resultadoPassword.uppercase){
        //         document.getElementById("mayuscula").classList.remove("passError");
        //         document.getElementById("mayuscula").classList.add("passValida");
        //         passMayus = true;
        //     }else{
        //         document.getElementById("mayuscula").classList.remove("passValida");
        //         document.getElementById("mayuscula").classList.add("passError");
        //         passMayus = false;
        //     }
            
        // });
        
     
        // El primer listener es al hacer click y no deja interactuar si no se ha introducido password
        // En el else añado otro listener "keypu" para comprobar si introduce la misma password
        // document.getElementById("pass2").addEventListener("focus", function(){
        //     let password = document.getElementById("pass1").value;
        //     if(password == ""){
        //         alert("Introduce primero la contraseña");
        //         document.getElementById("pass1").focus();
        //     }
        //     else{
        //         this.addEventListener("keyup", function(){
        //             if (password != this.value){
        //                 this.style.backgroundColor = "#E33333";
        //                 formularioValido = false;
        //             }else{
        //                 this.style.backgroundColor = "#5CFF56";
        //                 formularioValido = true;
        //             }
        //         });
        //     }
    
        // });
        
        /******************************************************************************************************************************** */
        
    
        // - Has de validar que el codi postal te format de 5 nombres.
        document.getElementById("numero").addEventListener("keyup", function(){
            console.log(this);
            let patron = /^([0-9])*9/;
    
            let valido = patron.test(this.value);
    
            if (!valido){
                this.setAttribute("src", "img/finalizacion/ko.png");
                formularioValido = false;
            }
            else{
                this.setAttribute("src", "img/finalizacion/ok.png");
                formularioValido = true;
            }
            
        });
    
        /******************************************************************************************************************************** */
    
        // - Si l'usuari fa un submit tot i haver un error, no l'ha de deixar fer el submit i ho te que avisar mitjançant un sweetalert2 (swal).
        // document.getElementById('signup').onsubmit = function() {
            
        //     let todoCompleto = true;
    
        //     let campos = {"Nombre": document.getElementById("name1").value, "Codigo Postal": document.getElementById("zip").value, "Contraseña": document.getElementById("pass1").value, "Confirmar contraseña": document.getElementById("pass2").value,};
            
        //     let mensajeHtml = '<strong>Los siguientes campos se encuentran vacíos:</strong><br><br><ul>';
    
        //     let i = 0;
        //     for (let key in campos) {
        //         if (campos[key] == ""){
        //             mensajeHtml += '<li>' + key + '</li>';
        //             todoCompleto = false;
        //         }
        //         i++;
        //     }
        //     mensajeHtml += '</ul>';
            
        //     if(!todoCompleto){
    
        //         swal({
        //             type: "error",
        //             title: "¡Vaya!",
        //             html: mensajeHtml
        //         });
        //           return false;
        //     }
            
        //     else if(!passLong || !passMinus || !passMayus){
        //         swal({
        //             type: "error",
        //             title: "¡Vigila la contraseña!",
        //             text: "Se deben complir todos los requisitos marcados en rojo",
        //           });
        //         return false;
        //     }
    
        //     else if(!formularioValido){
        //         swal({
        //             type: "error",
        //             title: "¡Vaya, algo ha ido mal!",
        //             text: "Verifique que no haya algún error en los datos introducidos",
        //           });
        //         return false;
        //     }
        //     else{
        //         return true;
        //     }
        // };
        
        
    }
    
    



}

//Para recibir la cantidad de un elemento --> element.cantidad
//Para el total lo cojeis de localStorage con id "total"
//VAMOOS KEVIIIIIIIIIIIIIN
//De nada chavales
