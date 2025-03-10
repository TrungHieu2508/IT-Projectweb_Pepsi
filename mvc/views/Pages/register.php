<h2>Register</h2>
<div class="form-container">
    <form action="/Git/IT-Projectweb_Pepsi/Register/KHRegister" method="POST">
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
    <a href="/Git/IT-Projectweb_Pepsi/Login" class="link">Already have an account? Login here</a>
    <h3><?php
    if(isset($data['result'])){
        if($data['result'] == 1){
            echo "Đăng kí thành công";
            echo "<script>setTimeout(function(){ window.location.href = '/Git/IT-Projectweb_Pepsi/Login'; }, 2000);</script>";
        }else{
            echo "Đăng kí thất bại";
        }
    }
    ?></h3>
</div>