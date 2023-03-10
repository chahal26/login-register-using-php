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
        case 'profile' : 
            require 'views/profile.php';
            break;
        case 'logout' : 
            require 'views/auth/logout.php';
            break;
        default :
            http_response_code(404);
            require 'views/errors/404.php';
            break;
    }
?>
