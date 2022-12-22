<?php
    $db_servername = 'localhost';
    $db_username = 'root';
    $db_password = 'root';
    $db_name = 'login-register-using-php';

    $connection = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

    if(!$connection){
        die('Failed to make SQL connection: '. mysqli_connect_error());
    }
?>