<?php
$client_ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USRE_AGENT'];
$request_uri = $_SERVER['REQUEST_URI'];
echo "Hello, World!<br>";
echo "client_ip: $client_ip<br>";
echo "browser: $browser<br>";
echo "request_uri: $request_uri<br>";
echo "Current time: " . date("Y-m-d H:i:s");
?>
