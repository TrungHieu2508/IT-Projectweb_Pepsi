<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="/Git/public/css/manage_users.css">
</head>
<body>
    <div class="manage-users-container">
        <h2>Manage Users</h2>
        
        <!-- Hiển thị danh sách người dùng hiện có -->
        <h3>User List</h3>
        <div class="user-list">
            <?php if (isset($data['users']) && !empty($data['users'])): ?>
                <table>
                    <thead>
                        <tr> 
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                           
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['users'] as $user): ?>
                            <tr>
                                <td><?php echo $user['id']; ?></td>
                                <td><?php echo $user['name']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td>
                                    <a href="/Git/Admin/EditUser/<?php echo $user['id']; ?>">Edit</a>
                                    <a href="/Git/Admin/DeleteUser/<?php echo $user['id']; ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No users found.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>