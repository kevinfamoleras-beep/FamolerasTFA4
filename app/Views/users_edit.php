<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
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

    <h1>Edit User</h1>

    <?php if (isset($validation)): ?>
        <div class="errors">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($user['avatar'])): ?>
        <p>
            <img
                src="<?= base_url('uploads/avatars/' . rawurlencode($user['avatar'])) ?>"
                alt="Current Avatar"
                class="avatar-preview">
        </p>
    <?php endif; ?>

    <form action="<?= site_url('users/update/' . $user['id']) ?>"
          method="post"
          enctype="multipart/form-data">
        <?= csrf_field() ?>

        <p>
            <label>Username</label><br>
            <input type="text" name="username"
                   value="<?= esc(old('username', $user['username'])) ?>"
                   required>
        </p>

        <p>
            <label>Full Name</label><br>
            <input type="text" name="full_name"
                   value="<?= esc(old('full_name', $user['full_name'])) ?>"
                   required>
        </p>

        <p>
            <label>Profile Picture</label><br>
            <input type="file"
                   name="avatar"
                   accept=".jpg,.jpeg,.png">
            <br>
            <small>JPG or PNG only. Maximum 2 MB.</small>
        </p>

        <button type="submit">Update User</button>
    </form>
</div>

</body>
</html>