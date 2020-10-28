window.onload = function () {

    let array_items = [{
        "id": 1,
        "nombre": "cafe",
        "descripcion": "Esto es un cafe que mas quieres",
        "precio": 1,
        "url_image": "img/menu/cafe.jpg"
    },
    {
        "id": 2,
        "nombre": "bocadillo de queso",
        "descripcion": "Dioooos que hambre.",
        "precio": 2,
        "url_image": "img/menu/queso.jpg"
    },
    {
        "id": 3,
        "nombre": "cruasan",
        "descripcion": "Mmm un cruasan to rico.",
        "precio": 3,
        "url_image": "img/menu/cruasan.jpg"
    },
    {
        "id": 4,
        "nombre": "ensaimada",
        "descripcion": "Mmm un ensaimada to rico.",
        "precio": 4,
        "url_image": "img/menu/ensaimada.jpg"
    },
    {
        "id": 5,
        "nombre": "bocadillo de fuet",
        "descripcion": "Mmm un fuet to rico.",
        "precio": 5,
        "url_image": "img/menu/fuet.jpg"
    },
    {
        "id": 6,
        "nombre": "Monster",
        "descripcion": "Mmm un monster to rico.",
        "precio": 6,
        "url_image": "img/menu/monster.jpg"
    }
    ];


    let carrito = [];
    let total = 0;

    let mainElement = document.querySelector("#items");
    let totalElement = document.querySelector('#total');
    let carritoElement = document.querySelector('#carrito');
    let botonVaciar = document.querySelector('#botonVaciar');
    let comandaElement = document.querySelector("#arrayComanda");

    function renderItems(params) {

        array_items.forEach(item => {   //Por cada item en el array
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
            mainElement.appendChild(divElement);
        });

    }

    function anadirCarrito() {
        //Elemento que hemos clickado se añade en el array carrito
        carrito.push(this.getAttribute('marcador'));
        //Renderizamos carrito
        renderizarCarrito();
        //Calculamos total
        calcularTotal();
        //Modificamos el valor del array que se va a enviar a finalizacion.php
        comandaElement.setAttribute("value", prepareJsonToPhp());
        console.log(prepareJsonToPhp());
    }

    function prepareJsonToPhp() {
        let arrayComanda =[];
        carrito.forEach(item => {
            let itemDelArray_items = array_items.filter(function (item_of_array_items) {
                return item_of_array_items['id'] == item;
            });
            arrayComanda.push(itemDelArray_items);
        });
        return JSON.stringify(arrayComanda); 
    }

    function renderizarCarrito() {
        // Vaciamos todo el html
        carritoElement.textContent = '';
        // Quitamos los duplicados
        let carritoSinDuplicados = [...new Set(carrito)];
        // Generamos los Nodos a partir de carrito
        carritoSinDuplicados.forEach(function (item, indice) {
            // Obtenemos el item que necesitamos de la variable base de datos
            let itemDelArray_items = array_items.filter(function (item_of_array_items) {
                return item_of_array_items['id'] == item;
            });
            // Cuenta el número de veces que se repite el producto
            let numeroUnidadesItem = carrito.reduce(function (total, itemId) {
                return itemId === item ? total += 1 : total;
            }, 0);
            // Creamos el nodo del item del carrito
            let itemCarritoElement = document.createElement('li');
            itemCarritoElement.classList.add('list-group-item', 'text-right', 'mx-2');
            itemCarritoElement.textContent = `${numeroUnidadesItem} x ${itemDelArray_items[0]['nombre']} - ${itemDelArray_items[0]['precio']}€`;
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
            let itemSeleccionado = array_items.filter(function (item_of_array_items) {
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


    botonVaciar.addEventListener('click', vaciarCarrito);

    renderItems();

}