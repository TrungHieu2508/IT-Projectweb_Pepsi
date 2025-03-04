<div class ="danhsach">
    <h3>Danh sách tài khoản - Quản lí danh sách tài khoản</h3>
    <table border="1px">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Password</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $stt = 1;
                foreach ($data as $value) {
            ?>
            <tr>
                <td> <?php echo $stt;?></td>
                <td><?php echo $value ['name'];?></td>
                <td><?php echo $value ['email'];?></td>
                <td><?php echo $value ['password'];?></td>


                <td>
                    <a href="">Edit</a> 
                    <a href="">Delete</a>
                </td>

            </tr>
            <?php
                $stt++;
                }
            ?>
        </tbody>
    </table>
</div>