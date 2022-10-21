<?php 
session_start();

require_once __DIR__ . "/conf.php";

$referer = $_SERVER['HTTP_REFERER'];

if( !filter_var( $referer, FILTER_VALIDATE_URL ) ){
    die();
}

$referer_url = parse_url($referer);

if( $referer_url['host'] !== SERVER_HOST){
    die();
}


$name = basename(dirname($referer_url['path']));

$token = $_POST['token'];

if (strlen($token) != 128){
    echo "不正なtoken";
    die();
}

if ($_SESSION[$name] === $token){
    echo "正解です！";
}else{
    echo "不正なtoken";
}

?>