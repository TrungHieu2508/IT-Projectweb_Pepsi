document.addEventListener("DOMContentLoaded", function () {
    const searchBox = document.getElementById("searchBox"); // Lấy ô tìm kiếm
    const productItems = document.querySelectorAll(".showProduct__item"); // Lấy danh sách sản phẩm

    // Lắng nghe sự kiện nhập vào ô tìm kiếm
    searchBox.addEventListener("input", function () {
        const searchTerm = searchBox.value.toLowerCase(); // Lấy từ khóa tìm kiếm và chuyển về chữ thường

        productItems.forEach(item => {
            const productName = item.getAttribute("data-name").toLowerCase(); // Lấy tên sản phẩm và chuyển về chữ thường

            // Kiểm tra nếu tên sản phẩm chứa từ khóa tìm kiếm
            if (productName.includes(searchTerm)) {
                item.style.visibility = "visible"; // Hiển thị sản phẩm
                item.style.position = "static"; // Đặt lại vị trí bình thường
            } else {
                item.style.visibility = "hidden"; // Ẩn sản phẩm
                item.style.position = "absolute"; // Loại bỏ khỏi luồng bố cục
            }
        });
    });
});