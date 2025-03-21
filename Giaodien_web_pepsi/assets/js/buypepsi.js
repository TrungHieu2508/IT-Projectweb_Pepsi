// main.js
document.addEventListener('DOMContentLoaded', function () {
    // Khai báo mảng sản phẩm toàn cục
    const allProducts = [
        { name: "Pepsi Zero Sugar Wild Cherry", image: "../assets/img/sp1.png" },
        { name: "Pepsi Peach", image: "../assets/img/sp2.png" },
        { name: "Pepsi Zero Sugar Mango", image: "../assets/img/sp3.png" },
        { name: "Pepsi Mango", image: "../assets/img/sp4.png" },
        { name: "Diet Pepsi Caffeine Free", image: "../assets/img/sp5.png" },
        { name: "Pepsi Vanilla", image: "../assets/img/sp6.png" },
        { name: "Pepsi Berry", image: "../assets/img/sp7.png" },
        { name: "Pepsi Cherry Vanilla", image: "../assets/img/sp8.png" },
        { name: "Pepsi-Cola Soda", image: "../assets/img/sp9.png" },
        { name: "Pepsi Zero Sugar", image: "../assets/img/sp10.png" },
        { name: "Diet Wild Cherry Pepsi", image: "../assets/img/sp11.png" },
        { name: "Pepsi Wild Cherry", image: "../assets/img/sp12.png" },
        { name: "Pepsi Caffeine Free", image: "../assets/img/sp13.png" },
        { name: "Pepsi 1893", image: "../assets/img/sp14.png" },
        { name: "Pepsi", image: "../assets/img/sp15.png" },
        { name: "Diet Pepsi", image: "../assets/img/sp16.png" },
        { name: "Nitro Pepsi", image: "../assets/img/sp17.png" },
        { name: "Nitro Pepsi Vanilla", image: "../assets/img/sp18.png" },
        { name: "Nitro Pepsi Variety Pack", image: "../assets/img/sp19.jpeg" },
        { name: "Pepsi Real Sugar Glass", image: "../assets/img/sp20.png" },
        { name: "Pepsi Lime", image: "../assets/img/sp21.png" },
        { name: "Pepsi Pineapple", image: "../assets/img/sp22.png" },
        { name: "Pepsi Wild Cherry and Cream", image: "../assets/img/sp23.png" },
        { name: "Pepsi Zero Sugar Wild Cherry and Cream", image: "../assets/img/sp24.png" }
    ];

    // Khai báo các phần tử DOM
    const searchBox = document.getElementById('searchBox');
    const productContainer = document.querySelector('.product__showProduct');
    const paginationControls = document.getElementById('paginationControls');
    let noResult = document.querySelector('.no-result');
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const cartNotice = document.querySelector('.product__header__shopping--notice');
    const cartList = document.querySelector('.shopping__cart--list--item');
    const noCartMsg = document.querySelector('.shopping__cart--list--msg');
    const noCartImg = document.querySelector('.shopping__cart--list--no--cart--img');
    const noCartMsgHeader = document.querySelector('.shopping__cart--list--msg--header');
    const cartContainer = document.querySelector('.shopping__cart--list');

    console.log('DOM loaded. Initial cart items:', cartItems);

    // Kiểm tra các phần tử cần thiết
    if (!searchBox) console.error('Error: searchBox element not found.');
    if (!productContainer) console.error('Error: productContainer element not found.');
    if (!cartNotice) console.error('Error: cartNotice element not found.');
    if (!cartList) console.error('Error: cartList element not found.');
    if (!cartContainer) console.error('Error: cartContainer element not found.');

    // Tạo noResult nếu chưa tồn tại
    if (!noResult) {
        noResult = document.createElement('div');
        noResult.className = 'no-result';
        noResult.textContent = 'No products found matching your search.';
        if (productContainer && productContainer.parentNode) {
            productContainer.parentNode.insertBefore(noResult, productContainer.nextSibling);
        }
    }

    const paginationParent = paginationControls ? paginationControls.parentNode : null;
    const paginationHTML = paginationControls ? paginationControls.outerHTML : '';
    const isPage1 = window.location.pathname.includes('buypepsip1.html');
    const initialProducts = isPage1 ? allProducts.slice(0, 12) : allProducts.slice(12);

    // Hàm tạo HTML cho một sản phẩm
    function createProductItem(product) {
        const nameParts = product.name.split(' - ');
        let nameHTML = nameParts.map(part => `<p>${part.trim()}</p>`).join('');
        if (nameParts.length === 1) {
            nameHTML = `<p>${product.name}</p>`;
        }

        return `
            <div class="showProduct__item">
                <div class="item__checkbox"><input type="checkbox" id="${product.name.replace(/ /g, '_')}"></div>
                <div class="item__img"><img src="${product.image}" alt="${product.name}" style="margin-left: 35px;"></div>
                <div class="item__name">${nameHTML}</div>
            </div>
        `;
    }

    // Hàm hiển thị sản phẩm
    function displayProducts(products) {
        if (!productContainer) return;
        productContainer.innerHTML = '';
        let rows = [];
        for (let i = 0; i < products.length; i += 3) {
            const rowProducts = products.slice(i, i + 3);
            const rowHTML = rowProducts.map(product => createProductItem(product)).join('');
            rows.push(`<div class="showProduct_row">${rowHTML}</div>`);
        }
        productContainer.innerHTML = rows.join('');
        console.log('Products displayed:', products);

        // Gắn lại sự kiện cho các checkbox
        attachCheckboxEvents();
    }

    // Hàm khôi phục paginationControls
    function restorePagination() {
        if (!paginationParent || document.getElementById('paginationControls')) return;
        paginationParent.insertAdjacentHTML('beforeend', paginationHTML);
        console.log('Pagination restored');
    }

    // Cập nhật số lượng sản phẩm trong giỏ hàng
    function updateCartNotice() {
        if (!cartNotice) return;
        cartNotice.textContent = cartItems.length;
        console.log('Cart notice updated:', cartItems.length);
    }

    // Cập nhật giao diện giỏ hàng
    function updateCartUI() {
        if (!cartList || !cartContainer) return;
        cartList.innerHTML = '';

        if (cartItems.length > 0) {
            cartItems.forEach((item, index) => {
                const cartItem = document.createElement('li');
                cartItem.classList.add('shopping__cart--item');

                cartItem.innerHTML = `
                    <div class="shopping__cart--img">
                        <img src="${item.image}" alt="${item.name}" style="width: auto; height: 70px; object-fit: contain;">
                    </div>
                    <div class="shopping__cart--item-info">
                        <h5 class="shopping__cart--item-name">${item.name}</h5>
                        <div class="shopping__cart--item-delete">
                            <img src="../assets/img/delete.png" alt="delete-icon" data-index="${index}">
                        </div>
                    </div>
                `;

                cartList.appendChild(cartItem);
            });

            document.querySelectorAll('.shopping__cart--item-delete img').forEach(deleteIcon => {
                deleteIcon.addEventListener('click', function () {
                    const index = parseInt(this.getAttribute('data-index'));
                    cartItems.splice(index, 1);
                    localStorage.setItem('cartItems', JSON.stringify(cartItems));
                    updateCartUI();
                    updateCartNotice();
                    syncCheckboxes();
                    console.log('Item removed, cart now:', cartItems);
                });
            });

            if (noCartMsg) noCartMsg.style.display = 'none';
            if (noCartImg) noCartImg.style.display = 'none';
            if (noCartMsgHeader) noCartMsgHeader.style.display = 'none';
            cartList.style.display = 'block';
            cartContainer.classList.remove('shopping__cart--list--no-cart');
            cartContainer.style.display = 'block';
            const cartHeading = document.querySelector('.shopping__cart--heading');
            if (cartHeading) cartHeading.style.display = 'block';
        } else {
            if (noCartMsg) noCartMsg.style.display = 'block';
            if (noCartImg) noCartImg.style.display = 'block';
            if (noCartMsgHeader) noCartMsgHeader.style.display = 'block';
            cartList.style.display = 'none';
            cartContainer.classList.add('shopping__cart--list--no-cart');
            cartContainer.style.display = 'block';
            const cartHeading = document.querySelector('.shopping__cart--heading');
            if (cartHeading) cartHeading.style.display = 'block';
        }
        console.log('Cart UI updated:', cartItems);
    }

    // Đồng bộ trạng thái checkbox với giỏ hàng
    function syncCheckboxes() {
        document.querySelectorAll('.item__checkbox input').forEach(checkbox => {
            const productItem = checkbox.closest('.showProduct__item');
            if (!productItem) return;
            const productNameElements = productItem.querySelectorAll('.item__name p');
            const productName = Array.from(productNameElements)
                .map(p => p.textContent.trim())
                .join(' ')
                .trim();
            const productImage = productItem.querySelector('.item__img img')?.src || '';
            const productPage = window.location.pathname;

            const isInCart = cartItems.some(item =>
                item.name.trim() === productName && item.image === productImage && item.page === productPage
            );
            checkbox.checked = isInCart;
            console.log(`Syncing checkbox for ${productName}, checked: ${isInCart}`);
        });
    }

    // Gắn sự kiện cho các checkbox
    function attachCheckboxEvents() {
        document.querySelectorAll('.item__checkbox input').forEach(checkbox => {
            // Xóa sự kiện cũ nếu có để tránh trùng lặp
            checkbox.removeEventListener('change', handleCheckboxChange);
            checkbox.addEventListener('change', handleCheckboxChange);
        });
    }

    function handleCheckboxChange() {
        const productItem = this.closest('.showProduct__item');
        if (!productItem) return;
        const productNameElements = productItem.querySelectorAll('.item__name p');
        const productName = Array.from(productNameElements)
            .map(p => p.textContent.trim())
            .join(' ')
            .trim();
        const productImage = productItem.querySelector('.item__img img')?.src || '';
        const productPage = window.location.pathname;

        console.log(`Checkbox changed for ${productName}, checked: ${this.checked}`);

        if (this.checked) {
            if (!cartItems.some(item => item.name.trim() === productName && item.page === productPage)) {
                cartItems.push({ name: productName, image: productImage, page: productPage });
                console.log('Added to cart:', { name: productName, image: productImage, page: productPage });
            }
        } else {
            const index = cartItems.findIndex(item =>
                item.name.trim() === productName && item.image === productImage && item.page === productPage
            );
            if (index !== -1) {
                cartItems.splice(index, 1);
                console.log('Removed from cart:', productName);
            }
        }

        localStorage.setItem('cartItems', JSON.stringify(cartItems));
        updateCartUI();
        updateCartNotice();
        syncCheckboxes();
    }

    // Tìm kiếm sản phẩm
    if (searchBox) {
        searchBox.addEventListener('input', function () {
            const searchTerm = this.value.toLowerCase().trim();

            if (searchTerm === '') {
                displayProducts(initialProducts);
                if (noResult) noResult.style.display = 'none';
                restorePagination();
            } else {
                const filteredProducts = allProducts.filter(product =>
                    product.name.toLowerCase().includes(searchTerm)
                );
                displayProducts(filteredProducts);

                if (filteredProducts.length === 0) {
                    if (noResult) noResult.style.display = 'block';
                    if (paginationControls) {
                        paginationControls.remove();
                    }
                } else {
                    if (noResult) noResult.style.display = 'none';
                    if (paginationControls) {
                        paginationControls.remove();
                    }
                }
            }
        });
    }

    // Khởi tạo giao diện
    displayProducts(initialProducts);
    updateCartUI();
    updateCartNotice();
    syncCheckboxes();

    // Hiển thị giỏ hàng khi hover
    const shoppingIcon = document.querySelector('.product__header__shopping');
    if (shoppingIcon) {
        shoppingIcon.addEventListener('mouseenter', () => {
            if (cartContainer) cartContainer.style.display = 'block';
        });
        shoppingIcon.addEventListener('mouseleave', () => {
            if (cartContainer && cartItems.length === 0) {
                cartContainer.style.display = 'none';
            }
        });
    }
});