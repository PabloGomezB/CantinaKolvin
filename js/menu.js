window.onload = function () {
    //Creo un array donde tengo todos los items que pueden estar en el menu.
    let array_items = [{
        "id": 1,
        "nombre": "Café",
        "descripcion": "",
        "precio": 1,
        "url_image": "img/menu/cafe.jpg",
        "hora": "hora_pati"
    },
    {
        "id": 2,
        "nombre": "Croissant",
        "descripcion": "",
        "precio": 1,
        "url_image": "img/menu/cruasan.jpg",
        "hora": "hora_pati"
    },
    {
        "id": 3,
        "nombre": "Caracola",
        "descripcion": "",
        "precio": 1,
        "url_image": "img/menu/caracola.jpg",
        "hora": "hora_pati"
    },
    {
        "id": 4,
        "nombre": "Pizza",
        "descripcion": "",
        "precio": 1,
        "url_image": "img/menu/pizza.jpg",
        "hora": "hora_pati"
    },
    {
        "id": 5,
        "nombre": "Monster",
        "descripcion": "",
        "precio": 2,
        "url_image": "img/menu/monster.jpg",
        "hora": "hora_pati"
    },
    {
        "id": 6,
        "nombre": "Ensaimada",
        "descripcion": "",
        "precio": 1,
        "url_image": "img/menu/ensaimada.jpg",
        "hora": "hora_pati"
    },
    {
        "id": 7,
        "nombre": "Sopa",
        "descripcion": "",
        "precio": 1.5,
        "url_image": "img/menu/sopa.jpg",
        "hora": "hora_dinar"
    },
    {
        "id": 8,
        "nombre": "Macarrones",
        "descripcion": "",
        "precio": 2,
        "url_image": "img/menu/macarrones.jpg",
        "hora": "hora_dinar"
    },
    {
        "id": 9,
        "nombre": "Espaguetis carbonara",
        "descripcion": "s",
        "precio": 1,
        "url_image": "img/menu/espaguetis_carbonara.jpg",
        "hora": "hora_dinar"
    },
    {
        "id": 10,
        "nombre": "Escudella",
        "descripcion": "",
        "precio": 1,
        "url_image": "img/menu/escudella.jpeg",
        "hora": "hora_dinar"
    }
    ];

    let menu_array = [];
    let fechaAhora = new Date();
    let fechaCambio = new Date();
    fechaCambio.setHours(11);
    fechaCambio.setMinutes(30);

    //Dependiendo de la hora habrá un menu u otro.
    if (fechaAhora < fechaCambio) {
        menu_array = array_items.filter(item => item.hora == "hora_pati");
    } else {
        menu_array = array_items.filter(item => item.hora == "hora_dinar");;
    }

    let carrito = [];
    let total = 0;

    let itemsElement = document.querySelector("#items");
    let carritoElement = document.querySelector('#carrito');
    let botonVaciar = document.querySelector('#botonVaciar');
    let comprarElement = document.querySelector("#comprar");

    function renderItems() {

        menu_array.forEach(item => {   //Por cada item en el array
            // Estructura
            let divElement = document.createElement('div');
            divElement.classList.add('col-md-4');
            // Body
            let divCardBodyElement = document.createElement('div');
            divCardBodyElement.classList.add('card', 'mb-4', 'shadow-sm');
            divCardBodyElement.setAttribute('marcador', item.id);
            divCardBodyElement.addEventListener('click', anadirCarrito);
            // Titulo
            let titleElement = document.createElement('h5');
            titleElement.classList.add('card-title');
            titleElement.textContent = item.nombre;
            titleElement.style.textAlign = 'center';
            // Imagen
            let imageElement = document.createElement('img');
            imageElement.classList.add('mx-auto');
            imageElement.setAttribute('src', item.url_image);
            imageElement.setAttribute('width', '200px');
            imageElement.setAttribute('height', '200px');
            imageElement.style.marginTop = "10%";
            // Precio
            let priceElement = document.createElement('p');
            priceElement.classList.add('card-text');
            priceElement.textContent = item.precio + '€';
            priceElement.style.textAlign = 'center';
            // Insertamos
            divCardBodyElement.appendChild(imageElement);
            divCardBodyElement.appendChild(titleElement);
            divCardBodyElement.appendChild(priceElement);
            // divCardBodyElement.appendChild(buttonPlusElement);
            divElement.appendChild(divCardBodyElement);
            itemsElement.appendChild(divElement);
        });

    }

    function anadirCarrito() {
        //Elemento que hemos clickado se añade en el array carrito
        carrito.push(this.getAttribute('marcador'));
        //Calculamos total
        calcularTotal();
        //Renderizamos carrito
        renderizarCarrito();
        
    }

    function renderizarCarrito() {
        // Vaciamos todo el html
        carritoElement.textContent = '';
        // Quitamos los duplicados
        let carritoSinDuplicados = [...new Set(carrito)];
        // Generamos los Nodos a partir de carrito

        let tablaHTML = '<table>';
        tablaHTML += "<tr style='border-bottom: 1px solid grey;'>";
        tablaHTML += "<td style='text-align: left;' width='400px' ><h4>Mi carrito (" + carritoSinDuplicados.length + ")</h4></td>";
        tablaHTML += "<td width='250px' style='text-align: center;'><h4>Cant.</h4></td>"
        tablaHTML += "<td width='250px' style='text-align: center;'><h4></h4></td>"
        tablaHTML += "</tr>";

        carritoSinDuplicados.forEach(function (item) {
            // Obtenemos el item que necesitamos de la variable menu_array
            let itemDelMenu_array = obtenerObjetoPorId(menu_array, item);
            // Cuenta el número de veces que se repite el producto
            let numeroUnidadesItem = contarProducto(carrito, item);

            // Creamos el nodo del item del carrito


            tablaHTML += "<tr>";

            tablaHTML += "<td style='text-align: left; padding: 10px;'>"
            tablaHTML += "<span style='margin-left: 10px;'>" + itemDelMenu_array[0].nombre + "</span>";
            tablaHTML += "</td>"

            tablaHTML += "<td style='text-align: center;'>"
            tablaHTML += numeroUnidadesItem;
            tablaHTML += "</td>"

            tablaHTML += "<td style='text-align: center;'>"
            tablaHTML += "<button item="+ item +" class='btn borrar'><i class='fa fa-minus' aria-hidden='true' style='color: red;'></i></button>";
            tablaHTML += "</td>"

            tablaHTML += "</tr>";

        })

        tablaHTML += "<tr style='border-top: 1px solid grey;'>";

        tablaHTML += "<td style='text-align: center;'>"
        tablaHTML += "Total:"
        tablaHTML += "</td>"

        tablaHTML += "<td>"
        tablaHTML += "</td>"

        tablaHTML += "<td id='total' style='text-align: right;'>"
        tablaHTML += total + "€"
        tablaHTML += "</td>"
        tablaHTML += "</tr>";
        tablaHTML += "</table>";

        carritoElement.innerHTML = tablaHTML;

        let botonesBorrar = document.querySelectorAll(".borrar");
        botonesBorrar.forEach(element => {
            element.addEventListener('click',borrarItemCarrito);
        });
    }

    function obtenerObjetoPorId(menu_array, item) {
        return menu_array.filter(function (item_of_menu_array) {
            return item_of_menu_array['id'] == item;
        });
    }

    function contarProducto(carrito, item) {
        return carrito.reduce(function (total, itemId) {
            return itemId === item ? total += 1 : total;
        }, 0);
    }

    function borrarItemCarrito() {
        console.log(carrito);
        // Obtenemos el producto ID que hay en el boton pulsado
        let id = this.getAttribute('item');
        // Borramos todos los productos
        carrito = carrito.filter(function (carritoId) {
            return carritoId !== id;
        });

        // Calculamos de nuevo el precio
        calcularTotal();

        // volvemos a renderizar
        renderizarCarrito();
        
    }

    function calcularTotal() {
        // Limpiamos precio anterior
        total = 0;
        // Recorremos el array del carrito
        carrito.forEach(function (itemId) {
            //Filtramos en array_items el que tenga de id lo que hay carrito (itemId) y obtenemos es objeto
            let itemSeleccionado = menu_array.filter(function (item_of_array_items) {
                return item_of_array_items['id'] == itemId;
            });
            //Añadimos el precio al total.
            total = total + itemSeleccionado[0]['precio'];
        });

        // Formateamos el total para que solo tenga dos decimales
        let totalDosDecimales = total.toFixed(2);
        // Renderizamos el precio en el HTML
        total = totalDosDecimales;
    }

    function vaciarCarrito() {
        // Limpiamos los productos guardados
        carrito = [];

        //Calculamos de nuevo el total.
        calcularTotal();
        // Renderizamos los cambios
        renderizarCarrito();
        
    }


    //Preparo JSON para enviarlo en localStorage.
    function prepareJson() {
        //Creamos un array 
        let arrayComanda = new Array();
        //Transformamos carrito en un array sin duplicados.
        //Esto serviá para obtener el objeto con esa id que hay en carritoSinDuplicado.
        let carritoSinDuplicados = [...new Set(carrito)];

        carritoSinDuplicados.forEach(function (item) {
            // Obtenemos el item que necesitamos de la variable menu_array
            let itemDelMenu_array = obtenerObjetoPorId(menu_array, item);

            // Cuenta el número de veces que se repite el producto
            let numeroUnidadesItem = contarProducto(carrito, item);

            itemDelMenu_array[0].cantidad = numeroUnidadesItem;
            //Añado este objeto en un array.
            arrayComanda.push(itemDelMenu_array[0]);

        })
        //Converts a JavaScript value to a JavaScript Object Notation (JSON) string
        return JSON.stringify(arrayComanda);
    }

    comprarElement.addEventListener('click', function () {
        //Si carrito está vacío muestra un alert si no lo guarda en localStorage el arrayComanda y el total.
        if (carrito.length == 0) {
            
            swal({
                title: "ERROR",
                text: "Parece que tu cesta esta vacía. ¿De verdad que no quieres comer nada?",
                icon: "error",
                button: "OK",
              });
        } else {
            localStorage.setItem("carrito", prepareJson());
            localStorage.setItem("total", total);
            //Redireccion a finalizacion.php
            window.location.href = "finalizacion.php";
        }
    });

    //Para vaciar el carrito.
    botonVaciar.addEventListener('click', vaciarCarrito);

    //Inicializa el renderizado del menu.
    renderItems();

    //Inicializa el renderizado del carrito.
    renderizarCarrito();



}