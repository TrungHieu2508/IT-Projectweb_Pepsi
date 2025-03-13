<?php 
    require_once "./mvc/views/blocks/header_admin.php"; 
    ?>

<?php 
        require_once "./mvc/views/Admin/" . $data['admin'] . ".php";  
    ?>
    <?php 
        require_once "./mvc/views/blocks/footer.php"; 
    ?>