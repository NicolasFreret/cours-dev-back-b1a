<?php
require 'models/crud.php';
require 'functions.php';
session_start();

$prefixe=config()->prefixe;
$url = explode('?',$_SERVER['REQUEST_URI'])[0];

switch ( $url ) {
    case $prefixe.'/':
        require 'controllers/index.php';
        break;
    case $prefixe.'/spiruline/':
        require 'controllers/spiruline.php';
        break;
    case $prefixe.'/a-propos/':
        require 'controllers/about.php';
        break;
    case $prefixe.'/blog/':
            require 'controllers/blog.php';
            break;
    case $prefixe.'/login/':
            require 'controllers/login.php';
            break;
    case $prefixe.'/contact/':
            require 'controllers/contact.php';
            break;
    case $prefixe.'/login/post/':
            require 'controllers/login-post.php';
            break;
    case $prefixe.'/logout/':
            require 'controllers/logout.php';
            break;
case $prefixe.'/blog/'.explode('/blog/', $url)[1]:
                require 'controllers/single.php';
                break;
    default:
        header("HTTP/1.0 404 Not Found");
        require 'views/404.php';
        break;
}
