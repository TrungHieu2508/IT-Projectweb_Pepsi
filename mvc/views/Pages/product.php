<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="./public/css/product.css">

</head>
<body>
    <div id="content">
        <h1>Product List</h1>
        <div class="product-list">
        <?php if (isset($data['product']) && !empty($data['product'])): ?>
            <?php foreach ($data['product'] as $products): ?>
                <div class="product-item">
                <?php
                $imageData = base64_encode($products['img']);
                ?>
                <!-- Link to the product detail page with the product ID -->
                <a href="index.php?url=Product/Detail/<?php echo $products['id']; ?>">
                <img src="data:image/jpeg;base64,<?php echo $imageData; ?>" alt="<?php echo htmlspecialchars($products['name']); ?>">                    
                <!-- <h2><?php echo htmlspecialchars($products['name']); ?></h2> -->
                <!-- <p><?php echo htmlspecialchars($products['description']); ?></p> -->
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No products found.</p>
        <?php endif; ?>
        </div> 
    </div>
</body>
</html>
