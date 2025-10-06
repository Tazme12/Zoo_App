<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riget Zoo Adventures - Register Page</title>
</head>
<body>
    <link rel="stylesheet" href="../frontend/style.css">
    <form action= "index.php" method="post">
    <div class="box">
        <br>
        <label> Enter Email:</label><br>
        <input required type="text" name="email"><br>
        <label>Create username:</label><br>
        <input required type="text" name="username"><br>
        <label> Create Password:</label><br>
        <input required type="password"  name ="password"><br>
        <label id="label5"> Confirm Password:</label><br>
        <input required type="password"  name ="password"><br>
        <p id=account>Already have an account? <a href="signin.php">Sign In</a><br>
        <input id="input5" type="submit" value= "Register"><br>

    </div>
    </form>

</body>
</html>


<?php 
    include("database.php");

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $conf_pass = filter_input(INPUT_POST, 'confirm password', FILTER_SANITIZE_SPECIAL_CHARS);

    echo "{$POST["email"]} <br>";

    echo "{$_POST["username"]} <br>";
    
    $password = $_POST["password"];

    $hash = password_hash($password,PASSWORD_DEFAULT);
    
    if ($conf_pass != $pass) {
        echo ("Passwords are not the same");
    };

?>