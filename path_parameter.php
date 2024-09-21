<?php
// var_dump($_SERVER);
$url_path = $_SERVER['REQUEST_URI'];

// print_r($url_path);
// exit();

$url_path=trim($url_path,'/');
// echo $url_path;

$segments=explode("/",$url_path);

// var_dump($segments);

if(isset($segments[1])){
    $productId=$segments[1];
    echo "Displaying details for product ID: ".$productId;
}else{
    echo "Product not found";
}