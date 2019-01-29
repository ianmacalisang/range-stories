<?php
require_once './config.php';
require_once './functions.php';

$action = $_GET['action'];


if($action == 'addStory'){
				$from 	= $uid;
                $title  = mysqli_real_escape_string($con,$_POST['title-story']);
                $story  = mysqli_real_escape_string($con, $_POST['story']);
				$slug = mysqli_real_escape_string($con, slug($title));				
				$choices = implode(',', $_POST['chkboxes']);
				$type = $storyCategory;		
                switch ($type) {
					case 0:
						$mainCat = 0;
						break;
					case 1:
						$mainCat = 0;
						break;
					case 2:
						$mainCat = 0;
						break;
					case 3:
						$mainCat = 0;
						break;
					case 4:
						$mainCat = 1;
						break;
					case 5:
						$mainCat = 2;
						break;
					case 6:
						$mainCat = 6;
						break;						        
               	}
                $sql = "INSERT INTO stories (category, type, from_id, message, title, slug, checkbox)
            				VALUES ('$mainCat','$type','$from','$story','$title','$slug','$choices')";
                $con->query($sql);
                $errors = array();
                foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
                                if (!empty($tmp_name) && is_uploaded_file($tmp_name)) {
                                                $file_name = $key . $_FILES['files']['name'][$key];
                                                $file_size = $_FILES['files']['size'][$key];
                                                $file_tmp  = $_FILES['files']['tmp_name'][$key];
                                                $file_type = $_FILES['files']['type'][$key];
                                                $ext       = pathinfo($key . $_FILES['files']['name'][$key], PATHINFO_EXTENSION);
                                                $ran       = rand();
                                                $timestamp = strtotime("now");
                                                $target    = $timestamp . "_" . $ran . '.' . $ext;
                                                $file_insert = "INSERT INTO files (post_id,file_name,extension)
                                            					VALUES ((select MAX(id) FROM stories),'$target','$file_type')";
                                                                                              
                                                compress($file_tmp,"../uploads/".$target,80); 
																								
                                                $con->query($file_insert);
                                }
                }
				
				if(!$errors){
					header("location:/dashboard/action/success");
				}else{
					header("location:/dashboard/action/failed");
				}				
                $con->close();
}			
if($action == 'download'){
    // Get parameters
    $file = $_GET['file']; // Decode URL-encoded string
    $filepath = "../uploads/" . $file;
    
    // Process download
    if(file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush(); // Flush system output buffer
        readfile($filepath);
        exit;
    }
}
if($action == 'subscription'){
	$mail = mysqli_real_escape_string($con,$_POST['subcribe-mail']);
	$sql = "INSERT INTO subscription (email)
            				VALUES ('$mail')";
    $query = mysqli_query($con, $sql);
	if($query){
		header("location:/action/subscribed");
	}else{
		header("location:/action/failed");
	}			
}
if($action == 'adviceContact'){
	$type = $_GET['type'];
	$name   = mysqli_real_escape_string($con,$_POST['user-name']);
    $mail   = mysqli_real_escape_string($con,$_POST['user-email']);
    $mobile  = mysqli_real_escape_string($con,$_POST['user-mobile']);
    $message = mysqli_real_escape_string($con,$_POST['user-message']);
	
	switch($type){
		case 0:
			$typeText = 'Property Consultant Advice';
			break;
		case 1:
			$typeText = 'Move to Dubai Consultation';
			break;
		case 2:
			$typeText = 'Need a Creative Writer';
			break;
		case 3:
			$typeText = 'Relocation Consultation';
			break;
		case 4:
			$typeText = 'Agent for Dream Home';
			break;
		default:
			$typeText = 'Not Applicable';
			break;
	}
	
	$sql = "INSERT INTO leads (name, email, mobile, message, type)
            				VALUES ('$name', '$mail', '$mobile', '$message', '$typeText')";
	$query = mysqli_query($con, $sql);
	if($query){
		header("location:/action/consulted");
	}else{
		header("location:/action/failed");
	}	
}

if($action == 'validateEmail'){
    
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $query = $con->query("SELECT email FROM user WHERE email = '$email'");
    
    if (mysqli_num_rows($query) > 0) {
        $response->result = true;
        }
    else {
        $response->result = false;
    }
    echo json_encode($response);
}

if($action == 'registration'){
	$reason   = mysqli_real_escape_string($con,$_POST['q5']);
    $fname   = mysqli_real_escape_string($con,$_POST['q8']);
    $lname   = mysqli_real_escape_string($con,$_POST['q9']);
    $email  = mysqli_real_escape_string($con,$_POST['emailLogin']);
    $mobile = mysqli_real_escape_string($con,$_POST['q11']);
	$cat = $_POST['q12'];
	$anonymous = $_POST['q3'];
	$interest = $_POST['q15'];
	$about = mysqli_real_escape_string($con,$_POST['q13']);
	$pass = generateRandomString();
	
	$query = "INSERT INTO user (email, password,fname,lname,about,mobile,category,reason, interest, setting_anonymous)
							VALUES ('$email','$pass','$fname','$lname','$about','$mobile','$cat','$reason','$interest','$anonymous')";
							
	$insert = $con->query($query);
	if($insert){
		$lastId =  $con->insert_id;
		
   		$to = $email;    
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


		$headers .= 'From: <hello@dubaiiscalling.com>' . "\r\n";
		$headers .= 'Cc: marketing@range.ae' . "\r\n";
	
    	$subject = 'Start Sharing your Story';
    	$message = "
    	<html>
			<head>
				<title>Welcome to Dubai is Calling</title>
			</head>
			<body>
				<div>Hi, ".$fname."</div>
				<br/>
				<div>Thank you for signing up at <a href='https://stories.range.ae' target='_blank'>Dubai is Calling</a>. Below are your credentials to start using our platform.</div><br/>
				<div>Username: ".$email."<br/>Password: ".$pass."<br/><br/>You can edit your credential inside your <b><a href='https://stories.range.ae/dashboard/view/settings/' target='_blank'>Profile Settings</a></b>. Thank you for supporting us.<br/><br/>Dubai is Calling Team</div>
			</body>
		</html>";

		mail($to, $subject, $message, $headers);
		
		$_SESSION['sessionId'] = $lastId;
		header("location:/dashboard/action/loggedin");
		
	}	
	$con->close();
}
if($action == 'editStory'){
				$sid = $_POST['sid'];
                $title  = mysqli_real_escape_string($con,$_POST['title-story']);
                $story  = mysqli_real_escape_string($con, $_POST['story']);
                $slug = mysqli_real_escape_string($con, slug($title));			
			   
                $sql = "UPDATE stories SET message='$story', title='$title', slug='$slug' WHERE id='$sid'";
                $con->query($sql);
                $errors = array();
                foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
                                if (!empty($tmp_name) && is_uploaded_file($tmp_name)) {
                                                $file_name = $key . $_FILES['files']['name'][$key];
                                                $file_size = $_FILES['files']['size'][$key];
                                                $file_tmp  = $_FILES['files']['tmp_name'][$key];
                                                $file_type = $_FILES['files']['type'][$key];
                                                $ext       = pathinfo($key . $_FILES['files']['name'][$key], PATHINFO_EXTENSION);
                                                $ran       = rand();
                                                $timestamp = strtotime("now");
                                                $target    = $timestamp . "_" . $ran . '.' . $ext;
                                                $file_insert = "INSERT INTO files (post_id,file_name,extension)
                                            					VALUES ('$sid','$target','$file_type')";
                                                                                              
                                                compress($file_tmp,"../uploads/".$target,80); 
																								
                                                $con->query($file_insert);
                                }
                }
				
				if(!$errors){
					header("location:/dashboard/action/success");
				}else{
					header("location:/dashboard/action/failed");
				}				
                $con->close();
}

if($action == 'editProfile'){
				$sid = $_POST['sid'];
                $fname  = mysqli_real_escape_string($con,$_POST['profile-fname']);
                $lname  = mysqli_real_escape_string($con, $_POST['profile-lname']);
                $email = mysqli_real_escape_string($con, $_POST['profile-email']);			
			    $pass = mysqli_real_escape_string($con, $_POST['profile-pass']);
			    $about = mysqli_real_escape_string($con, $_POST['profile-about']);	
			   	
			   	$file_tmp  = $_FILES['profile-pic']['tmp_name'];
				$ext       = pathinfo($_FILES['profile-pic']['name'], PATHINFO_EXTENSION);		   	
				$ran       = rand();
                $timestamp = strtotime("now");
                $target    = $timestamp . "_" . $ran . '.' . $ext;
									
                $sql = "UPDATE user SET
                			fname = '$fname',
                			lname = '$lname',
                			email = '$email',
                			about = '$about',
                			password ='$pass'
                		WHERE id = '$sid'
                			";
                if($con->query($sql)){
                	if(!empty($file_tmp) && is_uploaded_file($file_tmp)){
                		compress($file_tmp,"../uploads/avatars/".$target,80);
						$con->query("UPDATE user SET avatar = '$target' WHERE id = '$sid'");
						header("location:/dashboard/view/settings/");
                	}else{
                		header("location:/dashboard/view/settings/");
                	}
                }              	
                $con->close();
}

if($action == 'editPrivacy'){
				$sid = $_POST['sid'];
				$reason = mysqli_real_escape_string($con,$_POST['user-reason']);
				$anonymous = mysqli_real_escape_string($con,$_POST['user-anonymous']);
				$category = mysqli_real_escape_string($con,$_POST['user-category']);
				$interest = mysqli_real_escape_string($con,$_POST['user-interest']);
                													
                $sql = "UPDATE user SET
                			reason = '$reason',
                			setting_anonymous = '$anonymous',
                			category = '$category',
                			interest = '$interest'
                		WHERE id = '$sid'
                			";
                $con->query($sql);
                header("location:/dashboard/view/settings/");              	             	
                $con->close();
}




















?>