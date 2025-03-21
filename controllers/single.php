<?php

$post = read('content','*', 'WHERE slug = "/'.explode('/blog/', $url)[1].'" ');

if(!$post) navigateTo('/404/');

$page = "single";
require 'views/single.php';