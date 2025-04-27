<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Git/public/css/detail.css">
    <title>Product Detail</title>
</head>
<body>
    <div class="product-detail-container">
        <?php if (isset($data['product']) && !empty($data['product'])): ?>
            <?php
                $product = $data['product']; // Assign the product data
                $imageData = base64_encode($product['img']); // Base64 encode the image
            ?>
            <div class="product-info">
                <div class="product-image">
                <div class="product-image navigation-arrows">
                <?php if (!empty($data['prev_id'])): ?>
                 <a href="/Git/Product/Previous/<?php echo $data['prev_id']; ?>" class="arrow left-arrow">
                &#9664; <!-- Mũi tên trái -->
                                 </a>
                <?php endif; ?>

                <img src="data:image/jpeg;base64,<?php echo $imageData; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">

                <?php if (!empty($data['next_id'])): ?>
                <a href="/Git/Product/Next/<?php echo $data['next_id']; ?>" class="arrow right-arrow">
             &#9654; <!-- Mũi tên phải -->
             </a>
            <?php endif; ?>
    </div>
                </div>
                <div class="product-details">
                    <h1><?php echo htmlspecialchars($product['name']); ?></h1>
                    <h2>Nutrition Facts</h2>
                    <hr>
                    <p>Serving Size <?php echo htmlspecialchars($product['size']); ?> fl oz</p>
                    <p>Servings Per Container 1</p>
                    <p>Amount Per Serving </p>
                    <table>
                        <tr>
                            <td>Calories</td>
                            <td><?php echo htmlspecialchars($product['calories']); ?></td>
                        </tr>
                        <tr>
                            <td>Total Fat</td>
                            <td><?php echo htmlspecialchars($product['total_fat']); ?>g</td>
                            <td><?php echo htmlspecialchars($product['value_fat']); ?>%</td>
                        </tr>
                        <tr>
                            <td>Sodium</td>
                            <td><?php echo htmlspecialchars($product['sodium']); ?>mg</td>
                            <td><?php echo htmlspecialchars($product['value_sodium']); ?>%</td>
                        </tr>
                        <tr>
                            <td>Total Carbohydrate</td>
                            <td><?php echo htmlspecialchars($product['total_carbohydrates']); ?>g</td>
                            <td><?php echo htmlspecialchars($product['value_carbohydrate']); ?>%</td>
                        </tr>
                        <tr>
                            <td>Sugars</td>
                            <td><?php echo htmlspecialchars($product['sugars']); ?>g</td>
                        </tr>
                        <tr>
                            <td>Protein</td>
                            <td><?php echo htmlspecialchars($product['protein']); ?>g</td>
                        </tr>
                    </table>
                    <hr>
                    <p><?php echo htmlspecialchars($product['components']); ?></p>
                    <!-- <a href="#" class="btn btn-primary">More Nutritional Info</a> -->
                    <a href="/Git/Buy" class="btn btn-secondary">Buy Now</a>
                </div>
            </div>
        <?php else: ?>
            <p>Product not found.</p>
        <?php endif; ?>
    </div>
   
 
</body>
</html>