function changeCss () {
    var navElement = document.getElementById("navBar");
    if(this.scrollY > 100){
        navElement.style.position = "fixed";
        navElement.style.top = 0;
        navElement.style.width = "100%";
    }
    else{
        navElement.style.position = "relative";
    }
  }
  
  window.addEventListener("scroll", changeCss , false);