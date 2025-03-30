<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="/Git/public/css/contact.css">
</head>
<body>
<div class="app__container">
            <div class="container__logo--header">
            <a href="/Git/Home">
                <img src="/Git/public/img/logoweb.png" alt="logo">
            </div>
            <div class="container__backgroundPepsi">
                <img src="/Git/public/img/pepsilocation.png" alt="pepsi loaction">
            </div>
            <div class="container__pepsiText"><p>Pepsi Order</p></div>
            <a href="#"><button class="container__pepsiBtn">New offers and gifts</button></a>
            <div class="container__textHeader"><p>Explore 24 Pepsi products, compare prices, and enjoy exciting promotions. Find your favorite Pepsi and place your order easily! Enjoy quick delivery  and  </p>exclusive deals available only online. Don’t miss out on your Pepsi favorites!</p></div>
            <div class="container__form-product">
                <form class="form" id="orderForm" action="/Git/Contact/Submit" method="post">
                    <div class="form__row">
                        <div class="form__row--left">
                            <div class="form__group">
                                <input type="text" name="fullname" id="fullname" placeholder="NAME" required>
                            </div>
                            <div class="form__group">
                                <input type="tel" name="phone-number" id="phone-number" placeholder="PHONE NUMBER" required>
                            </div>   
                            <div class="form__group">
                                <input type="email" name="email" id="email" placeholder="EMAIL" required>
                            </div>  
                            <div class="form__group">
                                <input type="text" name="address" id="address" placeholder="ADDRESS" required>
                            </div>  
                                              
                        </div>
                        <div class="form__row--right">
                            <div class="form__group">
                                <select name="contact-reason" id="contact-reason" required>
                                    <option value selected hidden >REASON TO CONTACT</option>
                                    <option value="PRODUCT ORDER">PRODUCT ORDER</option>
                                    <option value="PRODUCT’S INFORMATION">PRODUCT’S INFORMATION</option>
                                    <option value="COLLABORATION – SPONSORSHIP">COLLABORATION – SPONSORSHIP</option>
                                    <option value="RECRUITMENT">RECRUITMENT</option>
                                    <option value="OTHERS">OTHERS</option>
                                </select>
                            </div>  
                            <div class="form__group">
                                <textarea name="message" id="message" rows="8" placeholder="MESSAGE" required></textarea>
                            </div>  
                            <div class="form__group"></div> 
                            <button type="submit" class="form__btn">Send</button>
                        </div>
                    </div>
                    <?php if (isset($data['result'])): ?>
    <div id="result-message">
        <h3><?php echo htmlspecialchars($data['result']); ?></h3>
    </div>
<?php endif; ?>
                </form>
                
                
            </div>
        </div>


</body>
</html>