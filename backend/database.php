<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "RZA_";
$conn = "";

$conn = mysqli_connect($db_server,
                        $db_user,
                        $db_pass,
                        $db_name);
    if ($conn){
        echo "Server Connection : You are connected.";
    }
    else{
        echo "Server Connection : Could not connect :C";
    }

?>