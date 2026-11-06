<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

    <?php include("header.inc"); ?>

    <h2>Login Form</h2>

    <form method="post" action="process.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="hidden" name="token" value="H106638368">

        <input type="submit" value="Login">
    </form>

    <?php include("footer.inc"); ?>

</body>
</html>