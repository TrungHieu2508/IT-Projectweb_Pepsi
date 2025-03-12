<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/Git/IT-Projectweb_Pepsi/public/css/login.css">
</head>
<body>
    <h2>Login</h2>
    <div class="form-container">
        <form action="./Login/KHLogin" method="POST">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" name="btnLogin" class="btn btn-primary">Login</button>
        </form>
        <a href="/Git/IT-Projectweb_Pepsi/Register" class="link">Register</a>
        <?php if (isset($data['error'])): ?>
            <div class="error-message">
                <?php echo $data['error']; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>