<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Git/public/css/order.css">
    <title>Order</title>
</head>
<body>
    <script src="/Git/public/js/order.js"></script>
    <div class="app">
        <div class="app__container">
            <div class="container__logo--header">
                <a href="/Git/Home"><img src="/Git/public/img/logoweb.png" alt="logo"></a>
            </div>
            <div class="container__backgroundPepsi">
                <img src="/Git/public/img/4575b8f5880b7a6d51e4db5980e12642.gif" alt="pepsi loaction">
            </div>
            <div class="container__pepsiText"><p>Order now</p></div>
            <a href="#"><button class="container__pepsiBtn">New offers and gifts</button></a>
            <div class="container__form-product">
                <form class="form" id="orderForm" action="/Git/Order/Insert" method="post">
                    <h2 class="form__title">Order Your Pepsi</h2>
                    <div class="form__row">
                    <div class="form__group">
                    <label for="name">Name</label>
                     <input type="text" name="name" id="name" placeholder="Enter your name" value="<?php echo isset($username) ? htmlspecialchars($username) : ''; ?>" required>
                    </div>
                        <div class="form__group">
                            <label for="phone-number">Phone Number</label>
                            <input type="tel" name="phone-number" id="phone-number" placeholder="Enter your phone number" required>
                        </div>
                        <div class="form__group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" placeholder="Enter your address" required>
                        </div>
                        <div class="form__group">
                            <label for="product-quantity">Quantity</label>
                            <input type="number" name="product-quantity" id="product-quantity" placeholder="Enter quantity" min="1" required>
                        </div>
                        <div class="form__group">
                            <div class="container__cart">
                            <h2>Your Cart</h2>
                            <ul id="cartItemsList"></ul>
                            </div>
                        </div>
                         <!-- Trường ẩn để lưu danh sách sản phẩm -->
                         <input type="hidden" name="product" id="product">
                        <div class="form__group">
                            <button type="submit" class="form__btn">Send</button>
                        </div>
                    </div>
                    
                </form>
                <?php if (isset($data['message'])): ?>
                <div class="alert">
             <?php echo htmlspecialchars($data['message']); ?>
             </div>
            <?php endif; ?>
            </div>
        </div>



       
    </div>    
    <script src="/Git/public/js/order.js"></script>


</body>
</html>