<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepsi.com</title>
    <link rel="stylesheet" href="/Git/public/css/main.css">
    <link rel="stylesheet" href="/Git/public/css/base.css">
</head>
<body>
    <div class="app">
        <div class="app__header">
            <nav class="header__navbar">    
                <div class="header__navbar--logo"> 
                <a href="/Git/Home">
                    <img src="/Git/public/img/logoweb.png" alt="Logo website">
                </a>                
                </div> 
                <div class="header__navbar--menu" onclick="toggleMenu()">
                    <img src="/Git/public/img/Logomenu.png" alt="icon menu">
                </div>                                             
            </nav>

            <!-- menu ẩn-->
            <div class="app__menu--overlay" id="menu">
            <div class="app__menu__close--btn" onclick="toggleMenu()">✖</div>
            <div class="app__menu--logo">
                <img src="/Git/public/img/logoweb.png" alt="logo website">
            </div>
            <div class="app__menu--content">
                <a href="/Git/Login">Log In / Register <br></a>
                <!-- <a href="../Private/buypepsip1.html">Buy Pepsi <br></a>
                <a href="../Private/recipes.html">Recipes <br></a> -->
                <a href="#">View Products <br></a>
                <a href="#">Local Eats Deserve Pepsi <br></a>
                <a href="#">Contact Us <br></a>
            </div>
            <script>
                function toggleMenu() {
                document.getElementById("menu").classList.toggle("active");
            }
            </script>   
        </div>

        </div>
        
    </div>
</body>
</html>