<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Accounts</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/customers">Customer Accounts</a> |
        <a href="/users">User Accounts</a>
    </nav>

    <div class="container">
    <h1>User Accounts</h1>

    <table>
        <tr>
    <th>Username</th>
    <th>Full Name</th>
    <th>Created At</th>
</tr>
        </tr>

        <?php foreach ($users as $user): ?>
    <tr>
        <td><?= esc($user['username']) ?></td>
        <td><?= esc($user['full_name']) ?></td>
        <td><?= esc($user['created_at']) ?></td>
    </tr>
<?php endforeach; ?>

    </table>
</div>
</body>
</html>