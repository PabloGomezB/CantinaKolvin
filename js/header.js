function changeCss () {
    var bodyElement = document.querySelector("body");
    var navElement = document.getElementById("navOpciones");
    if(this.scrollY > 10){
        navElement.style.position = "fixed";
        navElement.style.top = 0;
        navElement.style.width = "100%";
    }
    else{
        navElement.style.position = "relative";
    }
  }
  
  window.addEventListener("scroll", changeCss , false);