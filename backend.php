<?php 
 include("database.php");
 echo "{$POST["email"]} <br>";

 echo "{$_POST["username"]} <br>";
 
 $password = $_POST["password"];

 $hash = password_hash($password,PASSWORD_DEFAULT);

?>