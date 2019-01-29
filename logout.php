<?php

session_start();
 
if(!isset($_SESSION['ref'])){
	session_destroy();
}else{
	unset($_SESSION['sessionId']);
}
header("location: /");
exit;
?>