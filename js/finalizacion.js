window.onload = function () {

    let comandaArray = localStorage.getItem("carrito");
    console.log(comandaArray);
    document.getElementById("inputHidden").setAttribute("value", comandaArray);


}