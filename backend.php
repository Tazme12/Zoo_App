<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="backend.php" method="post">
        <label>Enter Email:</label><br>
        <input type="text" name="email"><br>
        <label>Create Username:</label><br>
        <input type="text" name="username"><br>
        <label>Create Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("database.php");

    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    echo "Email: $email <br>";
    echo "Username: $username <br>";
}
?>