<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'dbUser');
define('DB_PASSWORD', 'userPass');
define('DB_NAME', 'dbName');
 
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$ogp = 'https://'.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI];
$url = 'https://'.$_SERVER['HTTP_HOST'];
?>
