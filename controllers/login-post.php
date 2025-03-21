<?php

if(!$_POST) navigateTo('/');

foreach ($_POST as $k => $v) {
    if( trim($v) === "" ) navigateTo('/login/?'.$k.'=missing');
}

$user = read('users', '*', 'WHERE email = "'.$_POST['email'].'" AND password = "'.$_POST['password'].'" ');

if(!$user) navigateTo('/login/?credentials');

$_SESSION['user'] = $user[0];


navigateTo($_POST['redirect']);