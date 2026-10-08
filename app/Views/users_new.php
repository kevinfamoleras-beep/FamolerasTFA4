<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New User</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<nav>
    <a href="<?= site_url('/') ?>">Home</a>
    <a href="<?= site_url('about') ?>">About</a>
    <a href="<?= site_url('customers') ?>">Customer Accounts</a>
    <a href="<?= site_url('users') ?>">User Accounts</a>
</nav>

<div class="container">
    <form action="<?= site_url('logout') ?>" method="post">
        <?= csrf_field() ?>
        <button type="submit">Logout</button>
    </form>

    <h1>New User</h1>

    <?php if (isset($validation)): ?>
        <div class="errors">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('users/create') ?>" method="post">
        <?= csrf_field() ?>

        <p>
            <label>Username</label><br>
            <input type="text" name="username"
                   value="<?= esc(old('username')) ?>" required>
        </p>

        <p>
            <label>Full Name</label><br>
            <input type="text" name="full_name"
                   value="<?= esc(old('full_name')) ?>" required>
        </p>

        <p>
            <label>Password</label><br>
            <input type="password" name="password"
                   minlength="8" required>
        </p>

        <button type="submit">Add User</button>
    </form>
</div>

</body>
</html>