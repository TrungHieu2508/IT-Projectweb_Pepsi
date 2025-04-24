<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="/Git/public/css/manage_product.css">
</head>
<body>
    <div class="head">
        <h3>Manage Products</h3>
        <p>Product List</p>
    </div>
    

    <div id="table__product">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($data['products']) && !empty($data['products'])): ?>
                    <?php $i = 1; ?>
                    <?php foreach ($data['products'] as $products): ?>
                        <tr>
                            
                            <td><?php echo $i++; ?></td>
                            <?php
                            $imageData = base64_encode($products['img']);
                            ?>
                            <td><img src="data:image/jpeg;base64,<?php echo $imageData;?>" alt="Product Image"></td>
                            <td><?php echo htmlspecialchars($products['name']); ?></td>
                            <td class="action__btn">
                                <form action="/Git/Admin/<?php echo $products['id']; ?>" method="POST" style="display:inline;">
                                    <button type="submit" name="action" value="edit" class="edit__btn">Edit</button>
                                </form>
                                <form action="/Git/Admin/<?php echo $products['id']; ?>" method="POST" style="display:inline;">
                                    <button type="submit" name="action" value="delete" class="delete__btn" onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
                                </form>
                            </td>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3">No products found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>