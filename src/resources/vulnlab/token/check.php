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

if ($_SESSION[$name] === $_POST['token']){
    echo "正解した事を記録する処理";
}else{
    echo "不正なtokenの処理";
}

?>