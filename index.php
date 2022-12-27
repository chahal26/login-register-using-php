<?php
session_start();
require_once 'core/config.php';

$request = $_SERVER['REQUEST_URI'];
$url_prefix = '/classes/login-register-using-php';
$request = str_replace($url_prefix, '', $request);
if(substr($request,0,1) == '/'){
    $request = str_replace('/', '', $request);
}

define('REQUEST_URL', $request);

require_once 'views/layouts/header.php';
require_once 'router.php';  
require_once 'views/layouts/footer.php';