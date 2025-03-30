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
            <?php if (isset($_SESSION['user'])): ?>
                <a>Welcome, <?php echo htmlspecialchars($_SESSION['user']['name']); ?> <br></a>
                <a href="/Git/MyAccount/Show">My Account <br></a>
            <?php else: ?>
                <a href="/Git/Login">Log In / Register <br></a>
                 <?php endif; ?>
                 <a href="/Git/Buy">Buy Pepsi <br></a>
                <a href="#">Recipes <br></a>
                <a href="/Git/Product">View Products <br></a>
                <a href="#">Local Eats Deserve Pepsi <br></a>
                <a href="/Git/Contact">Contact Us <br></a>
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