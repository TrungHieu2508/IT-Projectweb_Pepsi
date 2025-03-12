<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="/Git/IT-Projectweb_Pepsi/public/css/product.css">

</head>
<body>
    <div id="content">
        <div class="product-list">
        <?php if (isset($data['product']) && !empty($data['product'])): ?>
            <?php foreach ($data['product'] as $products): ?>
                <div class="product-item">
                <?php
                $imageData = base64_encode($products['img']);
                ?>
                <!-- Link to the product detail page with the product ID -->
                <a href="/Git/IT-Projectweb_Pepsi/Product/Detail/<?php echo $products['id']; ?>">
                <img src="data:image/jpeg;base64,<?php echo $imageData; ?>" alt="Product Image">
                </a>

                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No products found.</p>
        <?php endif; ?>
        </div> 
    </div>
</body>
</html>