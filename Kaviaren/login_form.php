<?php
include_once "db_connect.php";
$db = $GLOBALS["db"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charser="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <div class="text_field">
                <input type="text" name="username"placeholder="Username">
            </div>
            <div class="text_field">
                <input type="password" name="password"placeholder="Password">
            </div>
                <input type="submit" name="submit" value="Login">
    </div>
</form>
</body>


