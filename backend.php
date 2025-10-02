<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("database.php");

    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

  $hash = password_hash($password,PASSWORD_DEFAULT);
}
?>