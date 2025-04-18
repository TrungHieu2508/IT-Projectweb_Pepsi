<!-- filepath: c:\xampp\htdocs\Git\mvc\views\Pages\myaccount.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <link rel="stylesheet" href="/Git/public/css/my_account.css">
</head>
<body>
    <h2>My Account</h2>
    <div class="account-container">
        <div class="account-info">
            <p><strong>Name:</strong> <?php echo $_SESSION['user']['name']; ?></p>
            <p><strong>Email:</strong> <?php echo $_SESSION['user']['email']; ?></p>
        </div>
        <a href="/Git/Logout" class="btn btn-primary">Logout</a>
    </div>
</body>
</html>