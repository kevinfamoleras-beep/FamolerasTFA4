<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Accounts</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<nav>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/customers">Customer Accounts</a>
    <a href="/users">User Accounts</a>
</nav>

<div class="container">

    <h1>User Accounts</h1>

    <p>
        <a href="/users/new">Add New User</a>
    </p>

    <table>
        <tr>
            <th>Avatar</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>

        <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <?php if (!empty($user['avatar'])): ?>

                        <img
                            src="<?= base_url('uploads/avatars/' . $user['avatar']) ?>"
                            alt="User Avatar"
                            class="avatar">

                    <?php else: ?>

                        <div class="avatar-placeholder">
                            No Image
                        </div>

                    <?php endif; ?>
                </td>

                <td><?= esc($user['username']) ?></td>

                <td><?= esc($user['full_name']) ?></td>

                <td><?= esc($user['created_at']) ?></td>

                <td>
                    <a href="/users/edit/<?= $user['id'] ?>">
                        Edit
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>

</div>

</body>
</html>