<?php
$passLength = $_GET['passLength'];

function generaStringaRandom($passLength)
{
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ`!?$?%^&*()_-+={[}]:;@~#|\<,>.?/';
    $stringaRandom = '';
    for ($i = 0; $i < $passLength; $i++) {
        $stringaRandom .= $caratteri[rand(0, strlen($caratteri) - 1)];
    }
    return $stringaRandom;
}

session_start();
$_SESSION['randomPassword'] = generaStringaRandom($passLength);
