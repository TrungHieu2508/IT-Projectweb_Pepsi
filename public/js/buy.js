document.addEventListener('DOMContentLoaded', function () {
    // Khai báo các phần tử DOM
    const searchBox = document.getElementById('searchBox');

    const productContainer = document.querySelector('.product__showProduct');
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const cartNotice = document.querySelector('.product__header__shopping--notice');
    const cartList = document.querySelector('.shopping__cart--list--item');
    const noCartMsg = document.querySelector('.shopping__cart--list--msg');
    const noCartImg = document.querySelector('.shopping__cart--list--no--cart--img');

    // Gắn sự kiện cho các checkbox
    function attachCheckboxEvents() {
        document.querySelectorAll('.item__checkbox input').forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                const productElement = this.closest('.showProduct__item');
                const productId = productElement.getAttribute('data-id');
                const productName = productElement.getAttribute('data-name');
                const productImage = productElement.getAttribute('data-image');

                if (this.checked) {
                    cartItems.push({ id: productId, name: productName, image: productImage });
                } else {
                    const index = cartItems.findIndex(item => item.id === productId);
                    if (index !== -1) {
                        cartItems.splice(index, 1);
                    }
                }

                localStorage.setItem('cartItems', JSON.stringify(cartItems));
                updateCartUI();
                updateCartNotice();
            });
        });
    }

    // Cập nhật số lượng sản phẩm trong giỏ hàng
    function updateCartNotice() {
        if (!cartNotice) return;
        cartNotice.textContent = cartItems.length;
    }

    // Cập nhật giao diện giỏ hàng
    function updateCartUI() {
        if (!cartList) return;
        cartList.innerHTML = '';
    
        if (cartItems.length > 0) {
            cartItems.forEach((item, index) => {
                const cartItem = document.createElement('li');
                cartItem.classList.add('shopping__cart--item');
    
                cartItem.innerHTML = `
                    <div class="shopping__cart--img">
                        <img src="${item.image}" alt="${item.name}">
                    </div>
                    <div class="shopping__cart--item-info">
                        <h5 class="shopping__cart--item-name">${item.name}</h5>
                        <div class="shopping__cart--item-delete">
                            <img src="/Git/public/img/delete.png" alt="delete-icon" data-index="${index}">
                        </div>
                    </div>
                `;
    
                cartList.appendChild(cartItem);
            });
    
            // Gắn sự kiện xóa sản phẩm
            document.querySelectorAll('.shopping__cart--item-delete img').forEach(deleteIcon => {
                deleteIcon.addEventListener('click', function () {
                    const index = this.getAttribute('data-index');
                    cartItems.splice(index, 1); // Xóa sản phẩm khỏi mảng
                    localStorage.setItem('cartItems', JSON.stringify(cartItems)); // Cập nhật localStorage
                    updateCartUI(); // Cập nhật giao diện
                    updateCartNotice(); // Cập nhật số lượng
                });
            });
    
            noCartMsg.style.display = 'none';
            noCartImg.style.display = 'none';
        } else {
            noCartMsg.style.display = 'block';
            noCartImg.style.display = 'block';
        }
    }
    // Gắn sự kiện khi trang được tải
    attachCheckboxEvents();
    updateCartUI();
    updateCartNotice();
});