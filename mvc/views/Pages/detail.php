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
                        <td><?php echo $product['total_fat']; ?></td>
                        <td><?php echo $product['value_fat']; ?>%</td> 

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
                        <td><?php echo $product['protein']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $product['components']; ?></td>
                    </tr>

                </table>
            </div>
            <a href="/Git/Product/Show" class="btn btn-primary">Back to Products</a>
        <?php else: ?>
            <p>Product not found.</p>
        <?php endif; ?>
    </div>
</body>
</html>
