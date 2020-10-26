<html>
<style>
    .lista_articulos {
        list-style: none;
        display: grid;
        grid-template-columns: 33% 33% 33%;
        grid-template-rows: 33% 33% 33%;
    }

    .sidebar {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        right: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidebar a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidebar a:hover {
        color: #f1f1f1;
    }

    .sidebar .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    #no_bar {
        transition: margin-right .5s;
        padding: 16px;
    }
</style>

<body>


    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

    </div>

    <div id="no_bar">
        <h1>MENU</h1>

        <div id="items"></div>
    </div>




    <script type="text/javascript">
        let array_items = [{
                "nombre": "cafe",
                "descripcion": "Esto es un cafe que mas quieres",
                "precio": 1,
                "cantidad": 0
            },
            {
                "nombre": "bocadillo de queso",
                "descripcion": "Dioooos que hambre.",
                "precio": 1
            },
            {
                "nombre": "croisant",
                "descripcion": "Mmm un crosan to rico.",
                "precio": 1,
                "cantidad": 0
            },
            {
                "nombre": "ensaimada",
                "descripcion": "Mmm un crosan to rico.",
                "precio": 1,
                "cantidad": 0
            },
            {
                "nombre": "bocadillo de fuet",
                "descripcion": "Mmm un crosan to rico.",
                "precio": 1,
                "cantidad": 0
            },
            {
                "nombre": "Monster",
                "descripcion": "Mmm un crosan to rico.",
                "precio": 1,
                "cantidad": 0
            }
        ];
        let numEle
        let ulElement = document.createElement("ul");
        ulElement.classList.add("lista_articulos");

        for (let i = 0; i < array_items.length; i++) {
            const element = array_items[i];
            let liElement = document.createElement("li");
            liElement.innerHTML = element.nombre;
            liElement.onclick = function() {
                element.cantidad++;
                openNav();
            };
            ulElement.appendChild(liElement);
        }

        let itemsElement = document.querySelector("#items");
        itemsElement.appendChild(ulElement);


        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("no_bar").style.marginRight = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("no_bar").style.marginRight = "0";
        }
    </script>


</body>

</html>