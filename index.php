<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Quản lí khách hàng</title>
</head>
<body>
    
</body>
</html>
<?php
    include "Model/DBconfig.php";
    $db = new Database;
    $db->connect();

    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }else{
        $controller = '';
    }
    switch ($controller) {
        case 'user':{
            require_once('Controller/user/index.php');
        }
            
    
}
?>