<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
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

    <h1>Edit User</h1>

    <?php if (isset($validation)): ?>
        <div class="errors">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($user['avatar'])): ?>
        <p>
            <img
                src="<?= base_url('uploads/avatars/' . $user['avatar']) ?>"
                alt="Current Avatar"
                class="avatar-preview">
        </p>
    <?php endif; ?>

    <form
        action="/users/update/<?= $user['id'] ?>"
        method="post"
        enctype="multipart/form-data">

        <?= csrf_field() ?>

        <p>
            <label>Username</label><br>
            <input type="text"
                   name="username"
                   value="<?= esc($user['username']) ?>">
        </p>

        <p>
            <label>Full Name</label><br>
            <input type="text"
                   name="full_name"
                   value="<?= esc($user['full_name']) ?>">
        </p>

        <p>
            <label>Profile Picture</label><br>

            <input
                type="file"
                name="avatar"
                accept=".jpg,.jpeg,.png">

            <br>
            <small>JPG or PNG only. Maximum size: 2 MB.</small>
        </p>

        <button type="submit">Update User</button>

    </form>

</div>

</body>
</html>