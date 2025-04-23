<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/Git/public/css/login.css">
</head>
<body>
    <div class="app__container">
            <div class="container__logosignin">
                <img src="/Git/public/img/logoweb.png" alt="logoweb">
            </div>
            <div class="container__text">
                <h2>SIGN IN</h2>
                <p>Enter your email and password used at registration or your PepsiCo Tasty</p><p> Rewards credentials to access your account.</p>
            </div>
            <div class="form-container">
                <form  action="./Login/KHLogin" method="POST">
                    <div class="form">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    </div>
                    <button type="submit" name="btnLogin" class="btn btn-primary" style="margin-left: 100px;">Login</button>
                </form>
                    <div class="forgot-password"  >
                        Forget your password? <a href="#">Click here to reset.</a>
                    </div>
                    <div class="forgot-password" style="padding-bottom: 10px">
                        Not yet registered?
                    </div>
                    <a href="/Git/Register" class="register-now">REGISTER NOW</a>
                    </div>
        <?php if (isset($_SESSION['error'])): ?>
            <script>
                alert('<?php echo htmlspecialchars($_SESSION['error']); ?>');
            </script>
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>
</div>

</body>
</html>
