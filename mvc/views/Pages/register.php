<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="/Git/public/css/register.css">
</head>
<body>
    <div class="app__container">
    <div class="container__logosignin">
        <img src="/Git/public/img/logoweb.png" alt="logoweb">
    </div>
    <div class="container__text">
        <h2>REGISTER</h2>
        <p>Let's start by creating your account</p>
    </div>
    <div class="form-container">
        <form name="registerForm" action="/Git/Register/KHRegister" method="POST" onsubmit="return validateForm()">
            <div class="form">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter username" required>
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                </div>

                <div class="form-group">
                    <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password" required>
                </div>
            </div>
            <div class="checkbox-container">
                <input type="checkbox" name="newsletter" id="newsletter">
                <label for="newsletter">
                    YES! Sign me up to receive email from PepsiCo Tasty Rewards, PepsiCo and its brands so I never miss out on exciting updates, offers or sweepstakes. You may opt out at ANY time.
                </label>
            </div>
            <button type="submit" name="btnRegister" class="btn btn-primary">Register</button>
        </form>
        <a href="/Git/Login" class="link">Already have an account? Login here</a>
        <div class="return-home">
            To learn more about how we use your information, please read PepsiCo's 
            <a href="#">Privacy Policy</a>, <a href="#">Terms of Use</a> and <a href="#">About Our Ads</a> for details.
        </div>
        <div id="result-message">
            <h3>
            <?php
            if(isset($data['result'])){
                if($data['result'] == 1){
                    echo "Đăng kí thành công";
                    echo "<script>setTimeout(function(){ window.location.href = '/Git/Login'; }, 2000);</script>";
                }else if($data['result'] == -1){
                    echo "Email đã tồn tại. Vui lòng sử dụng email khác.";
                }else{
                    echo "Đăng kí thất bại";
                }
            }
            ?>
            </h3>
        </div>
    </div>
</div>
</body>
</html>

