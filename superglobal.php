<?php
/*
Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

study reference : https: //www.w3schools.com/php/php_superglobals.asp

The PHP superglobal variables are:
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

 */

/*



$_GET	Retrieves query parameters from the URL.
http_build_query()	Builds a URL-encoded query string from an array.
parse_str()	Parses a query string into variables or an array.
parse_url()	Extracts components (including query string) from a URL.
urldecode()	Decodes a URL-encoded string.
urlencode()	Encodes a string to be URL-safe.


$string = "John Doe";
echo urlencode($string);  // Output: John+Doe

$encoded = "name%3DJohn%26age%3D30";
echo urldecode($encoded);  // Output: name=John&age=30
*/  


/*
https://www.google.com/search?q=google&oq=google&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIYCAEQLhhDGIMBGMcBGLEDGNEDGIAEGIoFMgYIAhBFGEEyBggDEEUYPDIGCAQQRRg8MgYIBRBFGEEyBggGEEUYQTIGCAcQBRhA0gEIODU5NGowajGoAgiwAgE&sourceid=chrome&ie=UTF-8


*/ 

echo "Hello world";
// var_dump($_SERVER['REQUEST_URI']);
// echo $_SERVER['REQUEST_URI'];
// echo "<br>";
// echo $_SERVER['REQUEST_METHOD'];

$url=$_SERVER['REQUEST_URI'];
// var_dump(parse_url($url));
$parsed_url=parse_url($url);



parse_str($parsed_url['query'],$query_params);

$query_params['name']="Faisal ahmed";

// print_r($query_params);

$query_params['gender']='male';



$new_query_string=http_build_query($query_params);
// echo urldecode($new_query_string);

// echo $new_query_string;
echo urlencode($new_query_string);
echo "<br>";


// echo $parsed_url['path'];
// echo "<br>";
// echo $parsed_url['query'];

$test=[
    'country'=>"Bangladesh",
    'district'=>"Dhaka"
];

echo urlencode(http_build_query($test));