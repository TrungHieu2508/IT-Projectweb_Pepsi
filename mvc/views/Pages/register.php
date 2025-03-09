<h2>Register</h2>
<form action="./Register/KHRegister" method="POST">
<div class="mb-3">
  <label>Username</label>
  <input type="text" name="name" class="form-control" placeholder="Enter username">
</div>

<div class="mb-3">
  <label>Email</label>
  <input type="email" name="email" class="form-control" placeholder="Enter email">
</div>

<div class="mb-3">
  <label>Password</label>
  <input type="password" name="password" class="form-control" placeholder="Password">
</div>
<button type="submit" name="btnRegister" class="btn btn-primary">Register</button>
</form>
<a href="./Login" class="btn btn-link">Already have an account? Login here</a>
<h3><?php
if(isset($data['result'])){
    if($data['result'] == 1){
        echo "Đăng kí thành công";
        echo "<script>setTimeout(function(){ window.location.href = '/Login'; }, 2000);</script>";
    }else{
        echo "Đăng kí thất bại";
    }
}
?></h3>