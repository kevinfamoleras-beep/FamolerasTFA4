<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New User</title>
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

    <h1>New User</h1>

    <?php if (isset($validation)): ?>
        <div class="errors">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="/users/create" method="post">

        <?= csrf_field() ?>

        <p>
            <label>Username</label><br>
            <input type="text"
                   name="username"
                   value="<?= old('username') ?>">
        </p>

        <p>
            <label>Full Name</label><br>
            <input type="text"
                   name="full_name"
                   value="<?= old('full_name') ?>">
        </p>

        <button type="submit">Add User</button>

    </form>

</div>

</body>
</html>