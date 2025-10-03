<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riget Zoo Adventures - Register Page</title>
</head>
<body>
    <link rel="stylesheet" href="../frontend/style.css">
    <form action= "backend.php" method="post">
    <div class="box">
        <br>
        <label> Enter Email:</label><br>
        <input type="text" name="email"><br>
        <label>Create username:</label><br>
        <input type="text" name="username"><br>
        <label> Create Password:</label><br>
        <input type="password"  name ="password"><br>
        <label id="label5"> Confirm Password:</label><br>
        <input type="password"  name ="password"><br>
        <input id="input5" type="submit" value= "Register"><br>

    </div>
    </form>
    
</body>
</html>


<?php 
/* include("database.php");

 echo "{$POST["email"]} <br>";

 echo "{$_POST["username"]} <br>";
 
 $password = $_POST["password"];

 $hash = password_hash($password,PASSWORD_DEFAULT);


*/
?>