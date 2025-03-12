<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Git/IT-Projectweb_Pepsi/public/css/chitiet.css">

    <title>Product Detail</title>
</head>
<body>
    <!-- <div class="product-detail-container">
        <h2>Product Detail</h2>
        <?php if (isset($data['product']) && !empty($data['product'])): ?>
            <?php
                $product = $data['product']; // Assign the product data
                $imageData = base64_encode($product['img']); // Base64 encode the image
            ?>
            <div class="product-info">
                <p><strong>Name:</strong> <?php echo $product['name']; ?></p>
                <p><strong>Image:</strong> 
                    <img src="data:image/jpeg;base64,<?php echo $imageData; ?>" alt="<?php echo $product['name']; ?>">
                </p>
                <p><strong>Size:</strong> <?php echo $product['size']; ?></p>
                <p><strong>Calories:</strong> <?php echo $product['calories']; ?></p>
                <p><strong>Total Fat:</strong> <?php echo $product['tolat_fat']; ?></p>
                <p><strong>Sodium:</strong> <?php echo $product['sodium']; ?></p>
                <p><strong>Total Carbohydrates:</strong> <?php echo $product['total_carbohydrates']; ?></p>
                <p><strong>Sugars:</strong> <?php echo $product['sugars']; ?></p>
                <p><strong>Protein:</strong> <?php echo $product['protetin']; ?></p>
                <p><strong>Components:</strong> <?php echo $product['components']; ?></p>
                <p><strong>Value Fat:</strong> <?php echo $product['value_fat']; ?></p>
                <p><strong>Value Sodium:</strong> <?php echo $product['value_sodium']; ?></p>
            </div>
            <a href="/Git/IT-Projectweb_Pepsi/Product/Show" class="btn btn-primary">Back to Products</a>
        <?php else: ?>
            <p>Product not found.</p>
        <?php endif; ?>
    </div> -->
    <div class="product-detail-container">
        <h2 style="text-align: center;">Product Detail</h2>
        <?php if (isset($data['product']) && !empty($data['product'])): ?>
            <?php
                $product = $data['product']; // Assign the product data
                $imageData = base64_encode($product['img']); // Base64 encode the image
            ?>
            <div class="product-info">
                <div class="product-image">
                    <img src="data:image/jpeg;base64,<?php echo $imageData; ?>" alt="<?php echo $product['name']; ?>">
                </div>
                <table>
                    <tr>
                        <th>Name</th>
                        <td><?php echo $product['name']; ?></td>
                    </tr>
                    <tr>
                        <th>Serving Size</th>
                        <td><?php echo $product['size']; ?> fl oz</td>
                    </tr>
                    <tr>
                        <th>Calories</th>
                        <td><?php echo $product['calories']; ?></td>
                    </tr>
                    <tr>
                        <th>Total Fat</th>
                        <td><?php echo $product['tolat_fat']; ?></td>
                        <td><?php echo $product['value_sodium']; ?>%</td> 

                    </tr>
                    <tr>
                        <th>Sodium</th>
                        <td><?php echo $product['sodium']; ?></td>
                        <td><?php echo $product['value_sodium']; ?>%</td> 

                        

                    </tr>
                    <tr>
                        <th>Total Carbohydrates</th>
                        <td><?php echo $product['total_carbohydrates']; ?></td>
                        <td><?php echo $product['value_Carbohydrate']; ?>%</td> 
                    </tr>
                    <tr>
                        <th>Sugars</th>
                        <td><?php echo $product['sugars']; ?></td>
                    </tr>
                    <tr>
                        <th>Protein</th>
                        <td><?php echo $product['protetin']; ?></td>
                    </tr>
                    <tr>
                        <th>Components</th>
                        <td><?php echo $product['components']; ?></td>
                    </tr>

                </table>
            </div>
            <a href="/Git/IT-Projectweb_Pepsi/Product/Show" class="btn btn-primary">Back to Products</a>
        <?php else: ?>
            <p>Product not found.</p>
        <?php endif; ?>
    </div>
</body>
</html>
