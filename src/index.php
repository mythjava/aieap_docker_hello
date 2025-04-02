<?php
date_default_timezone_set('Asia/Shanghai');
$client_ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USRE_AGENT'];
$request_uri = $_SERVER['REQUEST_URI'];
$current_time = date('Y-m-d H:i:s');
echo "Hello, World - AIEAP!<br>";
echo "client_ip: $client_ip<br>";
echo "browser: $browser<br>";
echo "request_uri: $request_uri<br>";
echo "Current time: $current_time<br>";
?>
