<?php
include_once './config.php';

if($_POST['action'] === 'deleteStory'){
        $id = $_POST['id'];
 		$delete = "DELETE FROM stories WHERE id='$id'";
        $con->query($delete);                  
		mysqli_close($con);
}

if($_POST['action'] === 'approveStory'){
        $id = $_POST['id'];
 		$update = "UPDATE stories SET status=1 WHERE id='$id'";
        $con->query($update);                  
		mysqli_close($con);
}
if($_POST['action'] === 'toReview'){
        $id = $_POST['id'];
 		$update = "UPDATE stories SET status=0 WHERE id='$id'";
        $con->query($update);                  
		mysqli_close($con);
}
if($_POST['action'] === 'toFeature'){
        $id = $_POST['id'];
 		$update = "UPDATE stories SET featured=1 WHERE id='$id'";
        $con->query($update);                  
		mysqli_close($con);
}
if($_POST['action'] === 'toUnfeature'){
        $id = $_POST['id'];
 		$update = "UPDATE stories SET featured=0 WHERE id='$id'";
        $con->query($update);                  
		mysqli_close($con);
}
if($_POST['action'] === 'deletePhoto'){
        $id = $_POST['id'];
 		$update = "DELETE FROM files WHERE id='$id'";
        $con->query($update);                  
		mysqli_close($con);
}
?>