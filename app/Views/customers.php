<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Accounts</title>
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

    <h1>Customer Accounts</h1>

    <p>
        <a href="/customers/new">Add New Customer</a>
    </p>

    <table>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>

        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= esc($customer['full_name']) ?></td>
                <td><?= esc($customer['email']) ?></td>
                <td><?= esc($customer['phone']) ?></td>
                <td>
                    <a href="/customers/edit/<?= $customer['id'] ?>">
                        Edit
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>

</body>
</html>