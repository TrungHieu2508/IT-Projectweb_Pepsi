<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepsi.com</title>
</head>
<body>
    <?php 
        require_once "./mvc/views/blocks/header.php"; 
    ?>

    <?php 
        require_once "./mvc/views/Pages/" . $data['page'] . ".php";  
    ?>

    <?php 
        require_once "./mvc/views/blocks/footer.php"; 
    ?>
</body>
</html>