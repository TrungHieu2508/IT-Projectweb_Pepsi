<h1>Chỉnh sửa đơn hàng #<?php echo $order['id']; ?></h1>
<form action="<?php echo _WEB_ROOT; ?>/order/admin_update/<?php echo $order['id']; ?>" method="post">
    <div>
        <label for="name">Tên khách hàng:</label>
        <input type="text" id="name" name="name" value="<?php echo $order['name']; ?>">
    </div>
    <div>
        <label for="phone_number">Số điện thoại:</label>
        <input type="text" id="phone_number" name="phone_number" value="<?php echo $order['phone_number']; ?>">
    </div>
    <div>
        <label for="address">Địa chỉ:</label>
        <input type="text" id="address" name="address" value="<?php echo $order['address']; ?>">
    </div>
    <div>
        <label for="amount">Tổng tiền:</label>
        <input type="text" id="amount" name="amount" value="<?php echo $order['amount']; ?>">
    </div>
    <div>
        <label for="product">Sản phẩm:</label>
        <input type="text" id="product" name="product" value="<?php echo $order['product']; ?>">
    </div>
    <div>
        <label for="date_order">Ngày đặt:</label>
        <input type="text" id="date_order" name="date_order" value="<?php echo $order['date_order']; ?>">
    </div>
    <div>
        <label for="status">Trạng thái:</label>
        <select name="status" id="status">
            <option value="Pending" <?php if ($order['status'] === 'Pending') echo 'selected'; ?>>Chờ xử lý</option>
            <option value="Process" <?php if ($order['status'] === 'Process') echo 'selected'; ?>>Đang xử lý</option>
            <option value="Completed" <?php if ($order['status'] === 'Completed') echo 'selected'; ?>>Hoàn thành</option>
            <option value="Cancelled" <?php if ($order['status'] === 'Cancelled') echo 'selected'; ?>>Đã hủy</option>
        </select>
    </div>
    <button type="submit">Cập nhật</button>
</form>
<br>
<a href="<?php echo _WEB_ROOT; ?>/order/admin_index">Quay lại danh sách đơn hàng</a>