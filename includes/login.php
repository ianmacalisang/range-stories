<?php
require_once './config.php';

$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);

if ($email != "" && $password != ""){

    $sql_query = "select * from user where email='".$email."' and password='".$password."'";
    $result = $con->query($sql_query);
    $count = mysqli_num_rows($result);

    if($count > 0){
    	$row = $result->fetch_assoc();
    	$id = $row['id'];
		session_start();
        $_SESSION['sessionId'] = $id;
        echo 1;
    }else{
        echo 0;
    }

}
?>