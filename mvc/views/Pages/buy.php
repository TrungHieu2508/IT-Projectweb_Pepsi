<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy</title>
    <link rel="stylesheet" href="/Git/public/css/block.css">
</head>
<body>
<div class="app__container">
            <div class="container__logo--header">
                <a href="/Git/Home"><img src="/Git/public/img/logoweb.png" alt="logo"></a>
            </div>
            <div class="container__backgroundPepsi">
                <img src="/Git/public/img/pepsilocation.png" alt="pepsi loaction">
            </div>
            <div class="container__pepsiText"><p>Pepsi Explorer</p></div>
            <a href="#"><button class="container__pepsiBtn">New offers and gifts</button></a>
            <div class="container__textHeader">
            Product Locator - Pepsi: Explore 

        <?php echo isset($data['product']) ? count($data['product']) : 0; ?> 

        Pepsi products, compare prices, and enjoy exclusive promotions. 
        From classics to new flavors, find your perfect Pepsi.
        <p> Use search and filters to discover favorites and special offers.</p></div>
            <div class="container__product">
                <div class="product__header">
                    <div class="product__header__text">
                        <p>Select one or more products to begin.</p><br>
                        <p style="text-align: center;">
                        <?php echo isset($data['product']) ? count($data['product']) : 0; ?> Products Found 
                            
                        <span style="color:#0025ff;text-decoration: underline; cursor:pointer">Pepsi</span></p></div>
                     <!-- layout cart -->
                     <div class="product__header__findProduct">
                        <div class="product__header__shopping">
                            <img src="/Git/public/img/shopping-cart.png" alt="shopping cart">
                            <span class="product__header__shopping--notice">0</span>

               <!-- no card: shopping__cart--list--no-cart -->
               <div class="shopping__cart--list shopping__cart--list--no-cart">
                                <h4 class="shopping__cart--heading">Selected Products</h4>
                                <div class="shopping__cart--list--no--cart--img">
                                    <img src="/Git/public/img/cartoon-word-png-sticker-transparent-background_53876-993545.jpg" alt="shopping cart">
                                </div>
                                <p class="shopping__cart--list--msg">There are no products in your cart.</p>
                                <ul class="shopping__cart--list--item">
                                    <!-- Các sản phẩm sẽ được thêm vào đây bằng JavaScript -->
                                </ul>
                            </div>
                        </div>
                        <div class="product__header__findBtn">
                    <?php if (isset($_SESSION['user'])): ?>
                     <!-- Nếu đã đăng nhập -->
                     <a href="/Git/Contact"><button>Order</button></a>
                    <?php else: ?>
                     <!-- Nếu chưa đăng nhập -->
                     <a href="/Git/Login"><button>Order</button></a>
                 <?php endif; ?>
                    </div>
                    </div>
                </div>
                <div class="product__search">
                    <p class="search__text">Product Selection</p>
                    <input type="text" id="searchBox" placeholder="Search by Keyword ...">
                </div>
            <div class="product__showProduct">
                <div class="showProduct_grid">
                <?php if (isset($data['product']) && !empty($data['product'])): ?>
                <?php foreach ($data['product'] as $products): ?>
                <?php
                $imageData = base64_encode($products['img']); // Base64 encode the image
                ?>
                <div class="showProduct__item"
                     data-id="<?php echo htmlspecialchars($products['id']); ?>" 
                     data-name="<?php echo htmlspecialchars($products['name']); ?>" 
                     data-image="data:image/jpeg;base64,<?php echo $imageData; ?>">
                <div class="item__checkbox">
                        <input type="checkbox" name="selected_products[]" value="<?php echo htmlspecialchars($products['id']); ?>">
                    </div>
                    
                    <div class="item__img">

                        <img src="data:image/jpeg;base64,<?php echo $imageData;  ?>" alt="<?php echo htmlspecialchars($products['name']); ?>">
                    </div>
                    <div class="item__name">
                        <p><?php echo htmlspecialchars($products['name']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No products available.</p>
        <?php endif; ?>
          
    </div>
</div
<div class="product__nextPage">
        <div class="nextPage__text">
            <!-- <p>Viewing Products 1 - 12 of 24</p> -->
        </div>
        <div class="nextPage__Btn">
            <a href="/Git/Home"><button>home</button></a>
        </div>
    </div>

    <script src="/Git/public/js/buy.js"></script>

</body>
</html>