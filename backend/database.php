<?php
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
$pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
$conf_pass = filter_input(INPUT_POST, 'confirm password', FILTER_SANITIZE_SPECIAL_CHARS);
if $conf_pass != $pass {
    echo "Passwords are not the same"
}

?>




<?php
   /* $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "RZA_userlogin";
    $conn = "";

    $conn = mysqli_connect($db_server,
                            $db_user,
                            $db_pass,
                            $db_name);*/
                        
    /*if ($conn){
            echo "Server Connection : You are connected.";
        }
        else{
            echo "Server Connection : Could not connect :C";
        } */
?>