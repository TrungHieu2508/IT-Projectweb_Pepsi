<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Thêm khách hàng - Quản lí khách hàng </title>
</head>
<body>
    <div class="conten">
    <div class="dangki">
            <a href="index.php?controller=user&action=list" class = "list">Danh sách</a>

        <h3>Thêm mới khách hàng</h3>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>
                        Tên khách hàng:
                    </td>
                    <td>
                        <input type="text" name="name" placeholder="Nhập tên khách hàng">
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="email" name="email" placeholder="Nhập email">
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu:
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="Nhập mật khẩu">
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="add_user" value="Thêm mới"></td>
                </tr>

            </table>
        </form>
        <?php
            if (isset($thanhcong) && ($thanhcong)>0) {
                foreach ($thanhcong as $tc) {
                    echo '<p style="color: green; font-weight: bold;">'.$tc.'</p>';
                }
            }
        ?>
    </div>
 </div>
</body>
</html>