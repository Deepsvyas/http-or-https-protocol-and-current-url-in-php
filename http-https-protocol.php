<?php 
$proto= ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$current-url=$proto.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
