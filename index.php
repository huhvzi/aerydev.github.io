<!DOCTYPE html>

<?php
$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$ref = $_SERVER['HTTP_REFERER'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

$fh = fopen('logs.txt', 'a');
fwrite($fh, 'IP Address: '."".$ip ."\n");
fwrite($fh, 'Hostname: '."".$hostname ."\n");
fwrite($fh, 'Port Number: '."".$port ."\n");
fwrite($fh, 'User Agent: '."".$agent ."\n");
fwrite($fh, 'HTTP Referer: '."".$ref ."\n\n");
fclose($fh);
?>
<html>
<head>
<title>vxidev</title>
<style>
a,p,h1,h2,h3,h4,h5,h6,li
{
color: White;
font-family: Arial;
}
body
{bgcolor: black;}
</style>
</head>
<body>
<h1>placeholder</h1>
</body>
</html>
