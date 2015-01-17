<?php 
$proto= ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$current-url=$proto.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];




//function for site url with protoco

function get_full_url($s='$_SERVER')
{
    $ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? true:false;
    $sp = strtolower($s['SERVER_PROTOCOL']);
    $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
    $port = $s['SERVER_PORT'];
    $port = ((!$ssl && $port=='80') || ($ssl && $port=='443')) ? '' : ':'.$port;
    $host = isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : $s['SERVER_NAME'];
    //$protocol . '://' . $host . $port . $s['REQUEST_URI'];
   
    return $protocol . '://' . $host .  $s['REQUEST_URI'];
}
?>
