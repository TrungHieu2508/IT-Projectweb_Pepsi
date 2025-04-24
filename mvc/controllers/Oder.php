<?php

class Order extends Controller
{
    private $orderModel;

    public function __construct()
    {
        $this->orderModel = $this->model('OrderModel');
    }

    public function admin_index()
    {
        $orders = $this->orderModel->getAllOrders();
        $this->view('Admin/manage_order', ['orders' => $orders]);
    }

    public function admin_edit($id)
    {
        $order = $this->orderModel->getOrderById($id);
        if ($order) {
            $this->view('Admin/edit_order', ['order' => $order]);
        } else {
            // Xử lý trường hợp không tìm thấy đơn hàng
            echo "Không tìm thấy đơn hàng với ID: " . $id;
        }
    }

    public function admin_update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'phone_number' => $_POST['phone_number'],
                'address' => $_POST['address'],
                'amount' => $_POST['amount'],
                'product' => $_POST['product'],
                'date_order' => $_POST['date_order'],
                'status' => $_POST['status']
            ];

            if ($this->orderModel->updateOrder($id, $data)) {
                header('Location: ' . _WEB_ROOT . '/order/admin_index');
            } else {
                // Xử lý lỗi cập nhật
                echo "Lỗi cập nhật đơn hàng.";
            }
        }
    }

    public function admin_delete($id)
    {
        if ($this->orderModel->deleteOrder($id)) {
            header('Location: ' . _WEB_ROOT . '/order/admin_index');
        } else {
            // Xử lý lỗi xóa
            echo "Lỗi xóa đơn hàng.";
        }
    }

    // Các action khác cho quản lý đơn hàng ở admin (ví dụ: xem chi tiết đơn hàng)
}

?>