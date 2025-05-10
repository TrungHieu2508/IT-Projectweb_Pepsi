<!-- filepath: c:\xampp\htdocs\Git\mvc\views\Admin\edit_product.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="/Git/public/css/edit_product.css"> <!-- Đường dẫn tới file CSS -->
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>
        <form action="/Git/Admin/EditProduct" method="post" enctype="multipart/form-data">
            <!-- Hidden field for product ID -->
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['product']['id']); ?>">

            <!-- Image -->
            <label for="img">Product Image:</label>
            <input type="file" name="img" id="img">
            <img src="data:image/jpeg;base64,<?php echo base64_encode($data['product']['img']); ?>" alt="Product Image" style="width: 100px; height: auto;">

            <!-- Name -->
            <label for="name">Product Name:</label>
            <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($data['product']['name']); ?>" required>

            <!-- Size -->
            <label for="size">Size:</label>
            <input type="number" step="0.01" name="size" id="size" value="<?php echo htmlspecialchars($data['product']['size']); ?>" required>

            <!-- Calories -->
            <label for="calories">Calories:</label>
            <input type="number" name="calories" id="calories" value="<?php echo htmlspecialchars($data['product']['calories']); ?>" required>

            <!-- Total Fat -->
            <label for="total_fat">Total Fat:</label>
            <input type="number" name="total_fat" id="total_fat" value="<?php echo htmlspecialchars($data['product']['total_fat']); ?>" required>

            <!-- Sodium -->
            <label for="sodium">Sodium:</label>
            <input type="number" name="sodium" id="sodium" value="<?php echo htmlspecialchars($data['product']['sodium']); ?>" required>

            <!-- Total Carbohydrates -->
            <label for="total_carbohydrates">Total Carbohydrates:</label>
            <input type="number" name="total_carbohydrates" id="total_carbohydrates" value="<?php echo htmlspecialchars($data['product']['total_carbohydrates']); ?>" required>

            <!-- Sugars -->
            <label for="sugars">Sugars:</label>
            <input type="number" name="sugars" id="sugars" value="<?php echo htmlspecialchars($data['product']['sugars']); ?>" required>

            <!-- Protein -->
            <label for="protein">Protein:</label>
            <input type="number" name="protein" id="protein" value="<?php echo htmlspecialchars($data['product']['protein']); ?>" required>
             <!-- Value Fat -->
             <label for="value_fat">Value Fat:</label>
            <input type="number" name="value_fat" id="value_fat" value="<?php echo htmlspecialchars($data['product']['value_fat']); ?>" required>

            <!-- Value Sodium -->
            <label for="value_sodium">Value Sodium:</label>
            <input type="number" name="value_sodium" id="value_sodium" value="<?php echo htmlspecialchars($data['product']['value_sodium']); ?>" required>

            <!-- Value Carbohydrate -->
            <label for="value_carbohydrate">Value Carbohydrate:</label>
            <input type="number" name="value_carbohydrate" id="value_carbohydrate" value="<?php echo htmlspecialchars($data['product']['value_carbohydrate']); ?>" required>

            <!-- Components -->
            <label for="components">Components:</label>
            <textarea name="components" id="components" rows="4"><?php echo htmlspecialchars($data['product']['components']); ?></textarea>            <!-- Submit Button -->
            <button type="submit">Update Product</button>
        </form>
    </div>
</body>
</html>