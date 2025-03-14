<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/Git/public/css/register.css">
    <script>
        function validateForm() {
            var name = document.forms["registerForm"]["name"].value;
            var email = document.forms["registerForm"]["email"].value;
            var password = document.forms["registerForm"]["password"].value;
            if (name == "" || email == "" || password == "") {
                alert("All fields must be filled out");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <h2>Register</h2>
    <div class="form-container">
        <form name="registerForm" action="/Git/Register/KHRegister" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="name" class="form-control" placeholder="Enter username" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" name="btnRegister" class="btn btn-primary">Register</button>
        </form>
        <a href="/Git/Login" class="link">Already have an account? Login here</a>
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
</body>
</html>