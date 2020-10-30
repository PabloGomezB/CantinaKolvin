window.onload = function () {

    let comandaArray = localStorage.getItem("carrito");
    console.log(comandaArray);
    document.getElementById("inputHidden").setAttribute("value", comandaArray);

    document.getElementById("totalHidden").setAttribute("value", 2342334543);

    console.log(document.getElementById("totalHidden").value);

}