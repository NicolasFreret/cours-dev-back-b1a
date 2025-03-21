<?php

$redirect = isset($_GET['url']) ? explode('/a', $_GET['url'])[1] : '/';

$page = "login";
require 'views/login.php';