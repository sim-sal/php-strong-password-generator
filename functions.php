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

echo "<h4 class='text-center'>La tua password generata è: </h4>";
echo "<h3 class='text-center'>";
echo generaStringaRandom($passLength);
echo "</h3>";
