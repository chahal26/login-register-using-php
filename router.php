<?php
    switch (REQUEST_URL) {
        case '' :
            require 'views/home.php';
            break;
        case 'register' :
            require 'views/auth/register.php';
            break;  
        case 'login' : 
            require 'views/auth/login.php';
            break;
        default :
            http_response_code(404);
            require 'views/errors/404.php';
            break;
    }
?>
