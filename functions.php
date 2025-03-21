<?php

function navigateTo(string $url):never{
    header('Location: '.config()->home_url.$url);
    exit;
}