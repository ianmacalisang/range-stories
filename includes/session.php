<?php
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $queryData = "SELECT * FROM user WHERE email = '$email'";
    $result = $con->query($queryData);
    $row = $result->fetch_assoc();
        $fullname = $row['fullname'];
        $status = $row['status'];
        $userId = $row['id'];
}else{
    $userId = null;
}
?>