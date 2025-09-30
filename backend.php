
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "index.php" method="post">
        <label> Enter Email:</label><br>
        <input type="text" name="email"><br>
        <label>Create username:</label><br>
        <input type="text" name="username"><br>
        <label> Create Password:</label><br>
        <input type="password"  name ="password"><br>
        <input type="submit" value= "Register">


    </form>
    
</body>
</html>

<?php 
 include("database.php");
 echo "{$POST["email"]} <br>";

 echo "{$_POST["username"]} <br>";
 
 $password = $_POST["password"];

  $hash = password_hash($password,PASSWORD_DEFAULT);

?>