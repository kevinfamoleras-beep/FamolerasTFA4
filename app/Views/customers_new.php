<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Customer</title>
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

    <h1>New Customer</h1>

    <?php if (isset($validation)): ?>
        <div class="errors">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="/customers/create" method="post">

        <?= csrf_field() ?>

        <p>
            <label>Full Name</label><br>
            <input type="text"
                   name="full_name"
                   value="<?= old('full_name') ?>">
        </p>

        <p>
            <label>Email</label><br>
            <input type="email"
                   name="email"
                   value="<?= old('email') ?>">
        </p>

        <p>
            <label>Phone</label><br>
            <input type="text"
                   name="phone"
                   value="<?= old('phone') ?>">
        </p>

        <button type="submit">Add Customer</button>

    </form>

</div>

</body>
</html>