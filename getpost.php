<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getpost.php" method="get">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In">
    </form>
</body>
</html>
<?php
    echo"{$_GET["username"]} <br>";
    echo $_GET["password"];
?>