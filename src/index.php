<?php
date_default_timezone_set('Asia/Shanghai');
<<<<<<< HEAD
$client_ip = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USRE_AGENT'];
=======
$client_ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
>>>>>>> 6576e41ce4d1b6a954c5f766310eb059dbc25b6f
$request_uri = $_SERVER['REQUEST_URI'];
$current_time = date('Y-m-d H:i:s');
echo "Hello, World - AIEAP!<br>";
echo "client_ip: $client_ip<br>";
echo "browser: $browser<br>";
echo "request_uri: $request_uri<br>";
echo "Current time: $current_time<br>";
?>
