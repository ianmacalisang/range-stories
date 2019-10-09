<?php
define('DB_SERVER', '85.187.128.12:3306');
define('DB_USERNAME', 'xpertise_dev');
define('DB_PASSWORD', 'xpertise!@#$');
define('DB_NAME', 'xpertise_stories');
 
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$ogp = 'https://'.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI];
$url = 'https://'.$_SERVER['HTTP_HOST'];
?>
