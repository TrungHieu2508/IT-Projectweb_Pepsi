<?php 
    require_once "./mvc/views/blocks/header.php"; 
?>

<div id="content">
    <?php if (isset($data['product'])): ?>
        <div class="product-detail">
            <?php
            $imageData = base64_encode($data['product']['img']);
            ?>
            <img src="data:image/jpeg;base64,<?php echo $imageData; ?>" alt="<?php echo htmlspecialchars($data['product']['name']); ?>">
            <h1><?php echo htmlspecialchars($data['product']['name']); ?></h1>
            <p><?php echo htmlspecialchars($data['product']['description']); ?></p>
        </div>
    <?php else: ?>
        <p>Product not found.</p>
    <?php endif; ?>
</div>

<?php 
    require_once "./mvc/views/blocks/footer.php"; 
?>