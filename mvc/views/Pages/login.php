<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <div class="form-container">
        <form action="/Git/IT-Projectweb_Pepsi/Login/KHLogin" method="POST">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" name="btnLogin" class="btn btn-primary">Login</button>
        </form>
        <a href="/Git/IT-Projectweb_Pepsi/Register" class="link">Register</a>
    </div>
</body>
</html>