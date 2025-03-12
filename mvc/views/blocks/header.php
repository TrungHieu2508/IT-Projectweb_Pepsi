<!-- filepath: c:\xampp\htdocs\Git\IT-Projectweb_Pepsi\mvc\views\blocks\header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepsi.com</title>
    <link rel="stylesheet" href="/Git/IT-Projectweb_Pepsi/public/css/main.css">
    <link rel="stylesheet" href="/Git/IT-Projectweb_Pepsi/public/css/base.css">
</head>
<body>
    <div class="app">
        <div class="app__header">
            <nav class="header__navbar">    
                <div class="header__navbar--logo"> 
                    <img src="/Git/IT-Projectweb_Pepsi/public/img/logoweb.png" alt="Logo website">
                </div> 
                <div class="header__navbar--menu" onclick="toggleMenu()">
                    <img src="/Git/IT-Projectweb_Pepsi/public/img/Logomenu.png" alt="icon menu">
                </div>                                             
            </nav>

            <!-- menu ẩn-->
            <div class="app__menu--overlay" id="menu">
                <div class="app__menu__close--btn" onclick="toggleMenu()">✖</div>
                <div class="app__menu--logo">
                    <img src="/Git/IT-Projectweb_Pepsi/public/img/logoweb.png" alt="logo website">
                </div>
                <div class="app__menu--content">
                    <?php if(isset($_SESSION['user'])): ?>
                        <a>Welcome, <?php echo $_SESSION['user']['name']; ?> <br></a>
                        <a href="/Git/IT-Projectweb_Pepsi/MyAccount/Show">My Account <br></a>
                    <?php else: ?>
                        <a href="/Git/IT-Projectweb_Pepsi/Login">Log In / Register <br></a>
                    <?php endif; ?>
                    <a href="#">Buy Pepsi <br></a>
                    <a href="#">Recipes <br></a>
                    <a href="/Git/IT-Projectweb_Pepsi/Product/Detail">View Products <br></a>
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