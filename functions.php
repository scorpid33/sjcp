<?php
function getRandomString($n) { 
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($chars) - 1); 
        $randomString .= $chars[$index]; 
    } 
  
    return $randomString; 
}
?> 