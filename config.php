<?php
define('DB_SERVER', 'us-cdbr-iron-east-05.cleardb.net');
define('DB_USERNAME', 'b6727cbf7f83fb');
define('DB_PASSWORD', 'c7a7058e');
define('DB_NAME', 'heroku_73b977470ccc791');
 
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$ogp = 'https://'.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI];
$url = 'https://'.$_SERVER['HTTP_HOST'];
?>
