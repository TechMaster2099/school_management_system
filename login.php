<?php
 include 'connect.php';
 
 if ($_SERVER["REQUEST_METHOD"]=='POST') {
    $username=$_POST['username'];
    $password=$_POST['password'];
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in </title>
</head>
<body>
    <h2>Log In</h2>
    <form action="login.php" method="post">
        <label>username:</label>
        <br>
        <input type="text" name="username" required>
        <br><br>
        <label>Password</label>
        <br>
        <input type="password" name="password" required>
        <br><br>
        <button type="submit">Log In</button>

    </form>
</body>
</html>