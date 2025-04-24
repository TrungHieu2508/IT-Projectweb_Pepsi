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
        <h2 style="text-align: center; font-size: 25px; font-weight: 900;">Product Detail</h2>
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
                        <td style='font-size: 20px; font-weight: 900;'><?php echo $product['name']; ?></td>
                    </tr>
                    <tr>
                        <th>Serving Size</th>
                        <td><?php echo $product['size']; ?></td>
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
    <div class="navigation-buttons" style="text-align: center; margin-top: 20px;">
    <?php if (!empty($data['prev_id'])): ?>
        <a href="/Git/Product/Previous/<?php echo $product['id']; ?>" class="btn btn-secondary">Previous</a>
    <?php endif; ?>
    
    <?php if (!empty($data['next_id'])): ?>
        <a href="/Git/Product/Next/<?php echo $product['id']; ?>" class="btn btn-secondary2">Next</a>
    <?php endif; ?>
</div>
</body>
</html>
