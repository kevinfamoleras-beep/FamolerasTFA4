<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Customer</title>
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

    <h1>New Customer</h1>

    <?php if (isset($validation)): ?>
        <div class="errors">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('customers/create') ?>" method="post">
        <?= csrf_field() ?>

        <p>
            <label>Full Name</label><br>
            <input type="text" name="full_name"
                   value="<?= esc(old('full_name')) ?>" required>
        </p>

        <p>
            <label>Email</label><br>
            <input type="email" name="email"
                   value="<?= esc(old('email')) ?>" required>
        </p>

        <p>
            <label>Phone</label><br>
            <input type="text" name="phone"
                   value="<?= esc(old('phone')) ?>">
        </p>

        <button type="submit">Add Customer</button>
    </form>
</div>

</body>
</html>