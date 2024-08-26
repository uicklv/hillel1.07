<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h3>Login form</h3>
<?php
if ($message = getSessionMessage('success_register')) {
    echo '<p style="color: green;">' . $message . '</p>';
}
?>
<?php
if ($message = getSessionMessage('login_error')) {
    echo '<p style="color: red;">' . $message . '</p>';
}
?>
<form action="<?= url('login') ?>" method="POST">
    <div>
        <input type="email" name="email" placeholder="Email" required>
        <?php showValidationError('email')  ?>
    </div>
    <div>
        <input type="password" name="password" placeholder="Password">
        <?php showValidationError('password')  ?>
    </div>
    <div>
        <input type="submit" value="Login">
    </div>
</form>
</body>
</html>