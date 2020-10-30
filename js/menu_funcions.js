window.onload = function () {

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
        "url_image": "img/menu/croissant.jpg",
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
        "precio": 1,
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
        "url_image": "img/menu/escudella.jpg",
        "hora": "hora_dinar"
    }
    ];


    let menu_array = [];
    let fechaAhora = new Date();
    let fechaCambio = new Date();
    fechaCambio.setHours(11);
    fechaCambio.setMinutes(30);

    if (fechaAhora < fechaCambio) {
        menu_array = array_items.filter(item => item.hora == "hora_pati");
    } else {
        menu_array = array_items.filter(item => item.hora == "hora_dinar");;
    }


    let carrito = [];
    let total = 0;

    let itemsElement = document.querySelector("#items");
    let totalElement = document.querySelector('#total');
    let carritoElement = document.querySelector('#carrito');
    let botonVaciar = document.querySelector('#botonVaciar');
    let comprarElement = document.querySelector("#comprar");

    function renderItems(params) {

        menu_array.forEach(item => {   //Por cada item en el array
            // Estructura
            let divElement = document.createElement('div');
            divElement.classList.add('card', 'col-sm-4');
            // Body
            let divCardBodyElement = document.createElement('div');
            divCardBodyElement.classList.add('card-body');
            // Titulo
            let titleElement = document.createElement('h5');
            titleElement.classList.add('card-title');
            titleElement.textContent = item.nombre;
            // Imagen
            let imageElement = document.createElement('img');
            imageElement.classList.add('img-fluid');
            imageElement.setAttribute('src', item.url_image);
            // Precio
            let priceElement = document.createElement('p');
            priceElement.classList.add('card-text');
            priceElement.textContent = item.precio + '€';
            // Boton 
            let buttonPlusElement = document.createElement('button');
            buttonPlusElement.classList.add('btn', 'btn-primary');
            buttonPlusElement.textContent = '+';
            buttonPlusElement.setAttribute('marcador', item.id);
            buttonPlusElement.addEventListener('click', anadirCarrito);
            // Insertamos
            divCardBodyElement.appendChild(imageElement);
            divCardBodyElement.appendChild(titleElement);
            divCardBodyElement.appendChild(priceElement);
            divCardBodyElement.appendChild(buttonPlusElement);
            divElement.appendChild(divCardBodyElement);
            itemsElement.appendChild(divElement);
        });

    }

    function anadirCarrito() {
        //Elemento que hemos clickado se añade en el array carrito
        carrito.push(this.getAttribute('marcador'));
        //Renderizamos carrito
        renderizarCarrito();
        //Calculamos total
        calcularTotal();
    }

    function renderizarCarrito() {
        // Vaciamos todo el html
        carritoElement.textContent = '';
        // Quitamos los duplicados
        let carritoSinDuplicados = [...new Set(carrito)];
        // Generamos los Nodos a partir de carrito
        carritoSinDuplicados.forEach(function (item, indice) {
            // Obtenemos el item que necesitamos de la variable menu_array
            let itemDelMenu_array = menu_array.filter(function (item_of_menu_array) {
                return item_of_menu_array['id'] == item;
            });
            // Cuenta el número de veces que se repite el producto
            let numeroUnidadesItem = carrito.reduce(function (total, itemId) {
                return itemId === item ? total += 1 : total;
            }, 0);

            // Creamos el nodo del item del carrito
            let itemCarritoElement = document.createElement('li');
            itemCarritoElement.classList.add('list-group-item', 'text-right', 'mx-2');
            itemCarritoElement.textContent = `${numeroUnidadesItem} x ${itemDelMenu_array[0]['nombre']} - ${itemDelMenu_array[0]['precio']}€`;
            // Boton de borrar
            let miBoton = document.createElement('button');
            miBoton.classList.add('btn', 'btn-danger', 'mx-5');
            miBoton.textContent = 'X';
            miBoton.style.marginLeft = '1rem';
            miBoton.setAttribute('item', item);
            miBoton.addEventListener('click', borrarItemCarrito);
            // Mezclamos nodos
            itemCarritoElement.appendChild(miBoton);
            carritoElement.appendChild(itemCarritoElement);
        })
    }

    function borrarItemCarrito() {
        console.log()
        // Obtenemos el producto ID que hay en el boton pulsado
        let id = this.getAttribute('item');
        // Borramos todos los productos
        carrito = carrito.filter(function (carritoId) {
            return carritoId !== id;
        });
        // volvemos a renderizar
        renderizarCarrito();
        // Calculamos de nuevo el precio
        calcularTotal();
    }

    function calcularTotal() {
        // Limpiamos precio anterior
        total = 0;
        // Recorremos el array del carrito
        carrito.forEach(itemId => {
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
        totalElement.textContent = totalDosDecimales;
    }

    function vaciarCarrito() {
        // Limpiamos los productos guardados
        carrito = [];
        // Renderizamos los cambios
        renderizarCarrito();
        calcularTotal();
    }

    function prepareJson() {
        let arrayComanda = new Array();

        let carritoSinDuplicados = [...new Set(carrito)];

        carritoSinDuplicados.forEach(function (item, indice) {
            // Obtenemos el item que necesitamos de la variable menu_array
            let itemDelMenu_array = menu_array.filter(function (item_of_menu_array) {
                return item_of_menu_array['id'] == item;
            });

            // Cuenta el número de veces que se repite el producto
            let numeroUnidadesItem = carrito.reduce(function (total, itemId) {
                return itemId === item ? total += 1 : total;
            }, 0);

            itemDelMenu_array[0].cantidad = numeroUnidadesItem;

            arrayComanda.push(itemDelMenu_array[0]);

        })

        console.log(arrayComanda);

        return JSON.stringify(arrayComanda);
    }

    comprarElement.addEventListener('click', function () {
        if (carrito.length == 0) {
            alert("ERROR. Añade al menos un item a tu compra.");
        } else {
            // prepareJson();
            localStorage.setItem("carrito", prepareJson());
            localStorage.setItem("total",total)
            window.location.href = "finalizacion.php";
        }
    });

    botonVaciar.addEventListener('click', vaciarCarrito);

    renderItems();

}