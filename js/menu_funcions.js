let array_items = [{
    "nombre": "cafe",
    "descripcion": "Esto es un cafe que mas quieres",
    "precio": 1,
    // "cantidad": 0,
    "url_image": "img/cafe.jpg"
},
{
    "nombre": "bocadillo de queso",
    "descripcion": "Dioooos que hambre.",
    "precio": 1,
    // "cantidad": 0,
    "url_image": "img/queso.jpg"
},
{
    "nombre": "cruasan",
    "descripcion": "Mmm un cruasan to rico.",
    "precio": 1,
    // "cantidad": 0,
    "url_image": "img/cruasan.jpg"
},
{
    "nombre": "ensaimada",
    "descripcion": "Mmm un ensaimada to rico.",
    "precio": 1,
    // "cantidad": 0,
    "url_image": "img/ensaimada.jpg"
},
{
    "nombre": "bocadillo de fuet",
    "descripcion": "Mmm un fuet to rico.",
    "precio": 1,
    // "cantidad": 0,
    "url_image": "img/fuet.jpg"
},
{
    "nombre": "Monster",
    "descripcion": "Mmm un monster to rico.",
    "precio": 1,
    // "cantidad": 0,
    "url_image": "img/monster.jpg"
}
];

let comandaArray = [];

function elementsBuilder() {
    let ulElement = document.createElement("ul");
    ulElement.classList.add("lista_articulos");


    for (let i = 0; i < array_items.length; i++) {
        const element = array_items[i];
        let liElement = document.createElement("li");
        liElement.classList.add("listaMenu");
        liElement.onclick = function () {
            comandaArray.push(element);
            anadirElementoSidebar(element);
            
        };
        ulElement.appendChild(liElement);

        liElement.insertAdjacentHTML("beforeend", '<img src="' + element.url_image + '" alt="' + element.nombre + '" width="150" height="150">' + "<br>");
        liElement.insertAdjacentHTML("beforeend", element.nombre + "<br>");
        liElement.insertAdjacentHTML("beforeend", element.descripcion + "<br>");
    }

    let itemsElement = document.querySelector("#items");
    itemsElement.appendChild(ulElement);
}

function anadirElementoSidebar(element) {
    let sidebarElement = document.querySelector("#mySidebar");
    sidebarElement.insertAdjacentHTML("beforeend","<div>"+ element.nombre +"</div><br>");
    let comandaArrayElement = document.querySelector("#arrayComanda"); 
    comandaArrayElement.setAttribute("value",prepareJsonToPhp());
     prepareJsonToPhp();
}

function prepareJsonToPhp() {
    return JSON.stringify(comandaArray); 

}

window.onload = function () {
    elementsBuilder();
}