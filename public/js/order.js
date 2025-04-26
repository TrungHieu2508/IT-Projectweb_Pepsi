document.addEventListener('DOMContentLoaded', function () {
    const cartItemsList = document.getElementById('cartItemsList');
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const productInput = document.getElementById('product');
    const productQuantityInput = document.getElementById('product-quantity');


    cartItemsList.innerHTML = '';

    if (cartItems.length > 0) {
        const productNames = [];
        cartItems.forEach(item => {
            const listItem = document.createElement('li');
            listItem.textContent = item.name; // Hiển thị tên sản phẩm
            cartItemsList.appendChild(listItem);
            productNames.push(item.name); // Lưu tên sản phẩm vào mảng
        });

        // Gán danh sách sản phẩm vào trường ẩn
        productInput.value = productNames.join(', ');
        // Cập nhật số lượng sản phẩm vào input
        productQuantityInput.value = cartItems.length;
    } else {
        cartItemsList.innerHTML = '<p>Your cart is empty.</p>';
        productQuantityInput.value = 0; // Nếu giỏ hàng trống, đặt số lượng là 0
    }
});