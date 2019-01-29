<?php
/* Subject: Dubai is Calling Platform 
 * Author: Ian Andrew Macalisang
 * Description: Dubai is calling platform.
*/
session_start();
if (isset($_GET['action'])) {
    $form_action = $_GET['action'];
} else {
    $form_action = "";
}
if (isset($_GET['view'])){
	$view = $_GET['view'];
}else{
	$view = "";
}
if (isset($_GET['ref'])){
	$ref = $_GET['ref'];
	$_SESSION['ref'] = $ref;
}else{
	$ref = "";
}

if (isset($_GET['sort'])) {
    $sorting = $_GET['sort'];
} else {
    $sorting = "";
}

if(isset($_SESSION['sessionId'])){
    $uid = $_SESSION['sessionId'];
    $queryData = "SELECT * FROM user WHERE id = '$uid'";
    $result = $con->query($queryData);
    $row = $result->fetch_assoc();
        $firstName = $row['fname'];
		$lastName = $row['lname'];
        $status = $row['status'];
		$interest = $row['interest'];
		$storyCategory = $row['category'];
		$reason = $row['reason'];
		$fullname = $row['fname'].' '.$row['lname'];
		$about = $row['about'];
		$email = $row['email'];
		$password = $row['password'];
		$anonymous = $row['setting_anonymous'];
		$mobile = $row['mobile'];
		
}else{
    $uid = null;
}
function getView($view){
	global $form_action, 
		   $uid, 
		   $fullname, 
		   $url, 
		   $storyCategory,
		   $interest, 
		   $ogp, 
		   $last_record, 
		   $status, 
		   $about,
		   $reason,
		   $firstName,
		   $lastName,
		   $email,
		   $password,
		   $anonymous,
		   $mobile,
		   $sorting;
	switch($view){
		case 'estate': 
		?>
		<section class="mainboard"><?php include_once './views/estate_main.php'; ?></section>
		<section id="storyboard"><?php include_once './views/estate_stories.php'; ?></section>
		<section><?php include_once './views/uni_subscribe.php'; ?></section>
		<section><?php include_once './views/uni_dashboard.php'; ?></section>
<?php	break; 
		case 'dashboard': 
		if(isset($_SESSION['sessionId'])){ ?>
		<br/>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<section><?php include_once './views/user_left.php'; ?></section>
				</div>
				<div class="col-md-9">
					<?php if($reason == "for consultancy"){ ?>
					<section style="padding: 12px;"><?php include_once './views/uni_leads.php'; ?></section>
					<?php } ?>
					<section><?php include_once './views/user_right.php'; ?></section>
				</div>
			</div>
		</div>
		<?php }else{ ?>
		<section class="restricted"><?php include_once './views/uni_restricted.php'; ?></section>
<?php	} ?>
<?php 	break; 
		default: ?>		
		<?php if(!isset($_SESSION['ref'])){ ?>
		<section class="mainboard"><?php include_once './views/main_index.php'; ?></section>
		
		<?php } else { ?>
		<section class="mainboard"><?php include_once './views/estate_main.php'; ?></section>
		<section id="storyboard"><?php include_once './views/estate_stories.php'; ?></section>
		<section><?php include_once './views/uni_subscribe.php'; ?></section>
		<section><?php include_once './views/uni_dashboard.php'; ?></section>
		<?php } ?>
<?php   break;
	} 
}

function shareStoryInner($cat_select){
	switch($cat_select){ ?>
<?php	case 0: ?>
               <div class="row topic-guide-inner">
               		<div class="body-text">
                 	 <div class="alert alert-info">
                     <ul>
                        <li>Why Dubai? What motivated you to invest in this business here?</li>
                        <li>Was it your idea of this business? Or some inspiration hit you at the right time.</li>
                        <li>How and when success came to your door with real estate business?</li>
                        <li>What was your biggest investment? What challenges did you face?</li>
                        <li>What is your advice for the upcoming real estate investors?</li>
                        <li>Share your story briefly with the people looking to buy properties.</li>
                     </ul>
                  	</div>
               		</div> 
               </div>	
<?php	break; ?>

<?php	case 1: ?>
               <div class="row topic-guide-inner">
               		<div class="body-text">
                 	 <div class="alert alert-info">
                     <ul>
                        <li>What was your motivation to buy a home?</li>
                        <li>What made you think this was the right time to buy a property?</li>
                        <li>How much savings did you have or did you decide to go for a mortgage?</li>
                        <li>How long did you study and monitor the market before making a decision?</li>
                        <li>What qualities did you look for in your broker or real estate advisor?</li>
                        <li>If given the chance where would you buy your second property?</li>
                        <li>What is your advice for the people considering to buy in this year?</li>
                        <li>Share your story briefly with the people looking to buy a home.</li>
                     </ul>
                  	</div>
               		</div> 
               </div>	
<?php	break; ?>

<?php	case 2: ?>
               <div class="row topic-guide-inner">
               		<div class="body-text">
                 	 <div class="alert alert-info">
                     <ul>
                        <li>Are you a rental considering to buy your own home?</li>
                        <li>If given the chance where would you buy your property?</li>
                        <li>What is your idea of a dream home?</li>
                        <li>How much are you thinking of to invest in future purchasing?</li>
                        <li>What are your plans and challenges you are facing currently?</li>
                        <li>Share your story briefly with the people looking for a home or planning to move to Dubai.</li>
                     </ul>
                  	</div>
               		</div> 
               </div>	
<?php	break; ?>

<?php	case 3: ?>
               <div class="row topic-guide-inner">
               		<div class="body-text">
                 	 <div class="alert alert-info">
                     <ul>
                        <li>Do you have a home but looking for a dream property in Dubai?</li>
                        <li>Are you an investor looking for dream properties in Dubai?</li>
                        <li>What was your inspiration for moving to Dubai?</li>
                        <li>If given a chance. Where will you buy your first dream home in Dubai?</li>
                        <li>Describe your challenges you are facing currently.</li>
                        <li>Are you looking to expand to Dubai or completely shifting?</li>
                        <li>Are you looking for a real estate advisor to help you out on this journey?</li>
                        <li>Share your story for us to learn more about you.</li>
                     </ul>
                  	</div>
               		</div> 
               </div>	
<?php	break; ?>

<?php	case 6: ?>
			
               <div class="row topic-guide-inner">
               		<div class="body-text">
                 	 <div class="alert alert-info">
                     <ul>
                        <li>You are logged in as a content creator. You are in Free writing mode and will default as a <b>Administrator</b> in category.</li>
                     </ul>
                  	</div>
               		</div> 
               </div>	
<?php	break; ?>
<?php			
	}
}

function getEstateHead($typeCat){
	global $fullname;
	switch($typeCat){ ?>
<?php	case 0: ?>
			<div class="right-contain right-contain-sess" onclick="href.location='/dashboard/view/share/';">
            <div class="a-bg right-bg"></div>
            <div class="pads right-inner">
               <div class="subs to-hide">&nbsp;&nbsp;<?php echo $fullname; ?></div>
               <div class="desc to-hide">IS A PROPERTY INVESTOR</div>
               <div class="description">Share your expedition as a multiple property investor.</div>
            </div>
         	</div>
<?php	break; ?>
<?php	case 1: ?>
			<div class="right-contain right-contain-sess" onclick="href.location='/dashboard/view/share/';">
            <div class="b-bg right-bg"></div>
            <div class="pads right-inner">
               <div class="subs to-hide">&nbsp;&nbsp;<?php echo $fullname; ?></div>
               <div class="desc to-hide">IS AN END-USER</div>
               <div class="description">Share your journey & challenges of finding a dream home.</div>
            </div>
         	</div>
<?php	break; ?>
<?php	case 2: ?>
			<div class="right-contain right-contain-sess" onclick="href.location='/dashboard/view/share/';">
            <div class="c-bg right-bg"></div>
            <div class="pads right-inner">
               <div class="subs to-hide">&nbsp;&nbsp;<?php echo $fullname; ?></div>
               <div class="desc to-hide">IS LOOKING FOR A DREAM HOME</div>
               <div class="description">Share your story if you are pursuing your dream home.</div>
            </div>
         	</div>
<?php	break; ?>
<?php	case 3: ?>
			<div class="right-contain right-contain-sess" onclick="href.location='/dashboard/view/share/';">
            <div class="d-bg right-bg"></div>
            <div class="pads right-inner">
               <div class="subs to-hide">&nbsp;&nbsp;<?php echo $fullname; ?></div>
               <div class="desc to-hide">PLANNING MY MOVE TO DUBAI</div>
               <div class="description">Share your plans and obstacles about moving to Dubai.</div>
            </div>
         	</div>
<?php	break; ?>
<?php	case 6: ?>
			<div class="right-contain right-contain-sess" onclick="location.href='/dashboard/view/share/';">
            <div class="dev-bg right-bg"></div>
            <div class="pads right-inner">
               <div class="subs to-hide">&nbsp;&nbsp;<?php echo $fullname; ?></div>
               <div class="desc to-hide">IS A CONTENT CREATOR</div>
               <div class="description">Write a story as an administrator.</div>
            </div>
         	</div>
<?php	break; 

	}
}

function slug($text){

  $text = preg_replace('~[^\pL\d]+~u', '-', $text);
  $text = preg_replace('~[^-\w]+~', '', $text);
  $text = trim($text, '-');
  $text = preg_replace('~-+~', '-', $text);
  $text = strtolower($text);
  if (empty($text)) {
    return 'n-a';
  }
  return $text;
}

function StripTruncate($text, $chars = 300) {
    $text = $text." ";
    $text = substr($text,0,$chars);
    $text = substr($text,0,strrpos($text,' '));
    $text = $text."...";
    return $text;
}

function get_type($ref)
{
    switch ($ref) {
        case 0:
            $type  = "Investor";
            break;
        case 1:
            $type  = "End-User";
            break;
        case 2:
            $type  = "Rentals";
            break;
        case 3:
            $type  = "Movers";
            break;
		case 4:
            $type  = "Lifestyle";
            break;
		case 5:
            $type  = "Business";
            break;
		case 6:
            $type  = "Administrator";
            break;
    }
    return $type;
}

function get_category($ref){
    switch ($ref) {
        case 0:
            $type  = "Real Estate";
            break;
        case 1:
            $type  = "Lifestyle";
            break;
        case 2:
            $type  = "Business";
            break;
		case 6:
            $type  = "Administrator";
            break;
    }
    echo $type;
}

function getUser($user_id){
    global $con;
    $sql = "SELECT fname,lname, setting_anonymous FROM user WHERE id = '$user_id'";
    $result = $con->query($sql);
    $name = $result->fetch_assoc();
	$anonymous = $name['setting_anonymous'];
	if($anonymous == 1){
    echo $name['fname'],' ',$name['lname'];
	}else{
		echo "Anonymous";
	}
}

function storyAuthor($user_id){
    global $con;
    $sql = "SELECT * FROM user WHERE id = '$user_id'";
    $result = $con->query($sql);
    $getAuthor = $result->fetch_assoc();
	$id = $getAuthor['id'];
    $fullname =  $getAuthor['fname'].' '.$getAuthor['lname'];
    $about = $getAuthor['about'];
	$reason = $getAuthor['reason'];
	$category = $getAuthor['category'];
	$joined = date_create($getAuthor['timestamp']);
	$anonymous = $getAuthor['setting_anonymous'];
	$date_format = date_format($joined, 'M j Y');
	?>
	
	<div class="media">
  		<div class="media-left">
    		<img src="<?php getUserAvatar($id); ?>" class="media-object" style="width:65px">
  		</div>
  	<div class="media-body">
    	<p class="media-heading"><b><?php if($anonymous == 1){ echo $fullname; }else{ echo "Anonymous"; } ?></b> | <?php echo get_type($category); ?><br/>
    	<?php echo $about; ?><br/>Is here <?php echo $reason; ?> - Joined on <?php echo $date_format; ?> </p>
  	</div>
	</div>
	
<?php
}

function storyboard($action, $display)
{
    global $con, $url, $storyCategory,$interest;
    switch ($action) {
        case 'mainboard':
            $sql = "SELECT * FROM stories WHERE status = 1 ORDER BY id DESC LIMIT 12";
            break;
        case 'random':
            $sql = "SELECT * FROM stories WHERE status = 1  ORDER BY RAND() LIMIT 3";
            break;
        case 'featured':
            $sql = "SELECT * FROM stories WHERE status = 1 AND featured = 1 ORDER BY RAND() LIMIT 9";
            break;
		case 'interest':
            $sql = "SELECT * FROM stories WHERE status = 1 AND type = '$storyCategory' ORDER BY RAND() LIMIT 8";
            break;
			
			
		case 'all':
            $sql = "SELECT * FROM stories WHERE status = 1 ORDER BY id";
            break;
		case 'investors':
            $sql = "SELECT * FROM stories WHERE status = 1 AND type = 0 ORDER BY id LIMIT 9";
            break;
		case 'endusers':
            $sql = "SELECT * FROM stories WHERE status = 1 AND type = 1 ORDER BY id LIMIT 9";
            break;
		case 'rentals':
            $sql = "SELECT * FROM stories WHERE status = 1 AND type = 2 ORDER BY id LIMIT 9";
            break;
		case 'movers':
            $sql = "SELECT * FROM stories WHERE status = 1 AND type = 3 ORDER BY id LIMIT 9";
            break;
    }
    if ($globalResult = $con->query($sql)) {
        while ($globalRow = $globalResult->fetch_assoc()) {
        	
            $id = $globalRow['id'];					
            $from = $globalRow['from_id'];
            $message = $globalRow['message'];
            $title = $globalRow['title'];
            $time  = $globalRow['timestamp'];
            $views = $globalRow['views'];
            $slug = $globalRow['slug'];
            $date = date_create($time);
            $date_format = date_format($date, 'M j Y');
            $type = $globalRow['type'];
            $get_photo = "SELECT * FROM files WHERE post_id = $id AND extension LIKE 'image%' ORDER BY RAND() LIMIT 1";
            $process_photo = $con->query($get_photo);
            $photo_num = mysqli_num_rows($process_photo);
            if ($photo_num > 0) {
                $globalPhoto = $process_photo->fetch_assoc();
                $photo = $globalPhoto['file_name'];
                $photo_url = $url."/uploads/" . $photo;
            } else {
                $photo_url = "https://i.imgur.com/EnSYWb5.jpg";
            }
?>        <?php
            if($action == "random") {
                echo '<div class="col-md-4">';
            }
            if($action == "mainboard"){
                echo '<div class="col-md-3">';
            }
			if($action == "featured"){
                echo '<div class="col-md-4">';
            }
			if($action == "interest"){
                echo '<div class="col-md-6">';
            }
			if($display == "sorter"){
                echo '<div class="col-md-4">';
            }
?>  
<div title="<?php echo $title; ?>" class="story_container story-grid-container" onclick="location.href = '/story/<?php echo $id; ?>/<?php echo $slug; ?>/'"> 
	<div class="child-bg" style="background: url(<?php echo $photo_url; ?>)"></div>  
	<div class="content_container right-inner">         
		<div class="story_category white"><?php echo get_type($type); ?></div>
		<div class="story_title ellipsis"><?php echo $title; ?></div>         
			<div class="story_foot">            
				<span><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;&nbsp;<?php getUser($from); ?></span>&nbsp;&bull;&nbsp;            
				<span><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $views; ?></span>&nbsp;&bull;&nbsp;            
				<span><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $date_format; ?></span>         
			</div>      
 	</div>   
</div>
</div>
<?php
		}
    }
}
function get_story_photo($post_id, $action){
    global $con, $url;
    switch($action){
        case 'banner':
            $get_photo     = "SELECT * FROM files WHERE post_id = $post_id AND extension LIKE 'image%' ORDER BY RAND() LIMIT 1";
            $process_photo = $con->query($get_photo);
            $photo_count   = mysqli_num_rows($process_photo);
            if($photo_count > 0){
                $photoRow = $process_photo->fetch_assoc();
                $photoUrl = $url."/uploads/" . $photoRow['file_name'];
            }else{
                $photoUrl = "https://i.imgur.com/EnSYWb5.jpg";
            }
			echo $photoUrl;
            break;
        case 'all':
            $get_photo     = "SELECT * FROM files WHERE post_id = $post_id AND extension LIKE 'image%' ORDER BY RAND()";
            $process_photo = $con->query($get_photo);
            $photo_count   = mysqli_num_rows($process_photo);
			if($photo_count > 0){           		
                		while ($photoRow = $process_photo->fetch_assoc()) {
                    		$photoLink = $url."/uploads/" . $photoRow['file_name']; 
							?>
                    		<img data-toggle="modal" data-target="#modal_image" src="<?php echo $photoLink; ?>" id="story-media-loop">
                    		<?php               
                			}
					}else{
							echo 'no images found...';
					}           
            break;
		case 'single':
            $get_photo     = "SELECT * FROM files WHERE post_id = $post_id AND extension LIKE 'image%' ORDER BY id LIMIT 1";
            $process_photo = $con->query($get_photo);
            $photo_count   = mysqli_num_rows($process_photo);
            if($photo_count > 0){
                $photoRow = $process_photo->fetch_assoc();
                $photoUrl = $url."/uploads/" . $photoRow['file_name'];
            }else{
                $photoUrl = "https://i.imgur.com/EnSYWb5.jpg";
            }
			echo $photoUrl;
            break;
    }
}

function get_story_files($post_id){
    global $con;
    $get_file     = "SELECT * FROM files WHERE post_id = $post_id AND extension LIKE 'application%' OR extension LIKE 'text%' ORDER BY id";
    $process_file = $con->query($get_file);
    $file_count   = mysqli_num_rows($process_file);
    if ($file_count > 0) {
        echo "<div class='container'><div class='third-main'><div class='story_category'>ATTACHED FILES</div>";
        while ($fileRow = $process_file->fetch_assoc()) {
            $name      = $fileRow['file_name'];
            $extension = $fileRow['extension'];
            $dlink     = "./uploads/" . $name;
?><div class="media">   <div class="media-left">      <img class="media-object" src="https://i.imgur.com/AUgwGlv.png">   </div>   <div class="media-body">      <h4 class="media-heading"><b><?php
            echo $name;
?></b></h4>      <?php
            echo $extension;
?>   </div>   <div class="media-right">    <a href="./includes/process.php?action=download&file=<?php
            echo $name;
?>" class="btn btn-success"><i class="fa fa-cloud-download" aria-hidden="true"></i>&nbsp;DOWNLOAD</a>  </div></div><?php
        }
        echo "</div></div>";
    } else {
        echo "";
    }
}

function compress($source, $destination, $quality) {
    $info = getimagesize($source);
    if ($info['mime'] == 'image/jpeg') 
        $image = imagecreatefromjpeg($source);
    elseif ($info['mime'] == 'image/gif') 
        $image = imagecreatefromgif($source);
    elseif ($info['mime'] == 'image/png') 
        $image = imagecreatefrompng($source);
    imagejpeg($image, $destination, $quality);
    return $destination;
}
function login_front($uid){
    global $con;

    switch($uid){
        case null: ?>
            <li>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#loginModal">
                <i class="fa fa-lock" aria-hidden="true"></i>&nbsp;&nbsp; LOGIN / SIGNUP</span>
                </a>                  
            </li>
                     <?php
        break;
        default:        
            $sql = $con->query("SELECT * FROM user WHERE id = $uid");
            $getData = $sql->fetch_assoc();
            $name = $getData['fname'].' '.$getData['lname'];
        ?>
            <li class="dropdown">
                <a href="javascript:void(0)"class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;&nbsp; <?php echo strtoupper($name); ?>&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu">  
                        <li><a href="/dashboard/">Dashboard</a></li>
                        <li><a href="/includes/logout.php">Signout</a></li>                             
                    </ul>
            </li>
                <?php
        break;
    }
}

function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function getLateststories(){
	global $con;
	$sql = $con->query("SELECT * FROM stories WHERE status = 1 ORDER BY id DESC LIMIT 5");
	 	while ($globalRow = $sql->fetch_assoc()) {
	 		echo "<li><a href='/story/".$globalRow['id']."/".$globalRow['slug']."/'>".$globalRow['title']."</a></li>";
		}
}



// DASHBOARD AREA

function dashStoryView($view, $id){
	global $con;
	
	switch($view){
		case "all":
			$sql = "SELECT * FROM stories WHERE status=1 ORDER BY id DESC";
			break;
		case "review":
			$sql = "SELECT * FROM stories WHERE status=0 ORDER BY id DESC";
			break;
		case "user-published":
			$sql = "SELECT * FROM stories WHERE status=1 AND from_id = $id ORDER BY id DESC";
			break;
		case "user-pending":
			$sql = "SELECT * FROM stories WHERE status=0 AND from_id = $id ORDER BY id DESC";
			break;
	}
	$query = $con->query($sql);
	
	if ($dashList = $query) {
		while ($dashResult = $dashList->fetch_assoc()) {
			
			$date = date_create($time);
            $date_format = date_format($date, 'F j, Y');
			
?>			
	<div class="col-md-3" id="storyContainer">
         <div class="thumbnail">
            <div class="dashStoryThumb" style="background: url(<?php get_story_photo($dashResult['id'], 'single') ?>)">
            	<div class="story_category white dashCategory"><?php get_category($dashResult['category']); ?></div>
            </div>           
            <div class="caption">
            	<?php if($view == 'all'){ ?>
            		<div class="feature-slot"><?php if($dashResult['featured'] == 1){ ?><div class="label label-success">Featured</div> <?php } ?></div>
               		<h5 class="ellipsis" style="font-size: 18px !important"><b><?php echo $dashResult['title']; ?></b></h5>
            		<p class="dashAuthor"><?php getUser($dashResult['from_id']); ?><br/><?php echo $date_format; ?></p>
            	<?php }elseif($view == 'review'){ ?>
            		<h5 class="ellipsis" style="font-size: 18px !important"><b><?php echo $dashResult['title']; ?></b></h5>
            		<p class="dashAuthor"><?php getUser($dashResult['from_id']); ?><br/><?php echo $date_format; ?></p>        		
            	<?php }elseif($view == 'user-published'){ ?>
            		<h5 class="ellipsis" style="font-size: 18px !important"><b><?php echo $dashResult['title']; ?></b></h5>
            		<p class="dashAuthor"><?php echo $date_format; ?></p>
            	<?php }elseif($view == 'user-pending'){ ?>
            		<h5 class="ellipsis" style="font-size: 18px !important"><b><?php echo $dashResult['title']; ?></b></h5>
            		<div class="label label-warning pull-right" style="padding: 10px;">Pending Approval</div>
            		<p class="dashAuthor"><?php echo $date_format; ?></p>
            	<? } ?> 
            </div>
            
	<span class="input-group-btn">
              <a href="/story/<?php echo $dashResult['id']; ?>/<?php echo $dashResult['slug']; ?>/" target="_blank"><button type="button" class="btn btn-info read-btn"><i class="fa fa-eye"></i>&nbsp;&nbsp; Read</button></a>
      		</span>
	<?php if($view == 'review'){ ?>
<span class="input-group-btn">
		<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
  			Note&nbsp;&nbsp;<span class="caret"></span>
  		</button>
		
		 <ul class="dropdown-menu">
  			<li><div class="dashNotes"><?php echo strtoupper(str_replace(",","<hr class='noteHr' />",$dashResult['checkbox'])); ?></div>	</li>
  		</ul>
  </span>
  <?php } ?>
<span class="input-group-btn">	
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
  	<i class="fa fa-gear"></i>&nbsp;&nbsp;<span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
  	<li><?php if($view == 'review'){ ?><a href="#" class="actionButton" data-callback="approveStory" id="<?php echo $dashResult['id']; ?>">Approve</a> <?php } ?></li>
  	<?php if($view == 'all'){ ?>
  		<?php if($dashResult['featured'] == 0){?><li><a href="#" class="actionButton" data-callback="toFeature" id="<?php echo $dashResult['id']; ?>">Mark as Featured</a></li><?php }else{ ?> <li><a href="#" class="actionButton" data-callback="toUnfeature" id="<?php echo $dashResult['id']; ?>">Unfeature Story</a></li> <?php } ?>
  		<li><a href="#" class="actionButton" data-callback="toReview" id="<?php echo $dashResult['id']; ?>">To Review</a></li>
  	<?php } ?>
    <?php if($view != 'user-published'){ ?><li><a href="/dashboard/edit/<?php echo $dashResult['id']; ?>/">Edit</a></li> <? } else { echo ""; }; ?>
    <li><a href="#" class="actionButton" data-callback="deleteStory" id="<?php echo $dashResult['id']; ?>">Delete</a></li>
  </ul>
</span>
            
         </div>
      </div>
<?php		
		}
	}
}

function showCount($view, $id){
	global $con;
	switch($view){
		case 'all':
			$qcount = $con->query('SELECT * FROM stories WHERE status = 1');
			break;
		case 'pending':
			$qcount = $con->query('SELECT * FROM stories WHERE status = 0');
			break;
		case 'users':
			$qcount = $con->query('SELECT * FROM user WHERE status = 0');
			break;
		case 'subscribers':
			$qcount = $con->query('SELECT * FROM subscription');
			break;
		case 'inquiries':
			$qcount = $con->query('SELECT * FROM leads');
			break;
		case 'user-published':
			$qcount = $con->query("SELECT * FROM stories WHERE status = 1 AND from_id = $id");
			break;
		case 'user-pending':
			$qcount = $con->query("SELECT * FROM stories WHERE status = 0 AND from_id = $id");
			break;
	}
	$result = mysqli_num_rows($qcount);
	echo $result;
}

function getUserAvatar($user){
	global $con;
	$sql = $con->query("SELECT avatar FROM user WHERE id = $user");
	$result = $sql->fetch_assoc();
	$avatar = $result['avatar'];
	if($avatar == NULL){
		$avatarLink = 'https://i.imgur.com/1VHomiM.png';
	}else{
		$avatarLink = 'https://stories.range.ae/uploads/avatars/'.$avatar;
	}
	echo $avatarLink;
}


function dashUserList($view){	
	global $con;
	switch ($view) {
		case 'registered':
			$query = $con->query('SELECT * FROM user WHERE status = 0 ORDER BY id DESC');
			if ($dashList = $query) {
				while ($dashResult = $dashList->fetch_assoc()) {
					$id = $dashResult['id'];
					$fullname = $dashResult['fname'].' '.$dashResult['lname'];
					$avatar = $dashResult['avatar'];
					$about = $dashResult['about'];
					$time = $dashResult['timestamp'];
					$date = date_create($time);
            		$date_format = date_format($date, 'F j, Y');
					$email = $dashResult['email'];
					$reason = $dashResult['reason'];
					$pass = $dashResult['password'];
					$cat = $dashResult['category'];
					$mobile = $dashResult['mobile'];
	?>	
		<tr class="active">
		  <td><img src="<?php echo getUserAvatar($id); ?>" width="25" height="25" class="avatarDash" /></td>
          <td><?php echo $fullname; ?></td>
          <td><?php echo $pass; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php echo $date_format; ?></td>
          <td><?php echo get_type($cat); ?></td>
          <td><?php echo $mobile; ?></td>
          <td><?php echo $reason; ?></td>
        </tr>
	<?php	
			}
		}
			break;
		case 'subscriber':	
			$query = $con->query('SELECT * FROM subscription ORDER BY id DESC');
			if ($dashList = $query) {
				while ($dashResult = $dashList->fetch_assoc()) {
					$id = $dashResult['id'];
					$email = $dashResult['email'];
					$time = $dashResult['time'];
					$date = date_create($time);
            		$date_format = date_format($date, 'F j, Y');
		?>
		<tr class="active">
          <td><?php echo $email; ?></td>
          <td><?php echo $date_format; ?></td>
        </tr>
		<?php					
				}
			}
			break;
		case 'inquiries':
			$query = $con->query('SELECT * FROM leads ORDER BY id DESC');
			if ($dashList = $query) {
				while ($dashResult = $dashList->fetch_assoc()) {
					$id = $dashResult['id'];
					$name = $dashResult['name'];
					$email = $dashResult['email'];
					$mobile = $dashResult['mobile'];
					$time = $dashResult['time'];
					$date = date_create($time);
            		$date_format = date_format($date, 'F j, Y');
					$message = $dashResult['message'];
					$inquiry = $dashResult['type'];
		?>
		<tr class="active">
          <td><?php echo $name; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php echo $mobile; ?></td>
          <td><?php echo $date_format; ?></td>
          <td><?php echo $inquiry; ?></td>
          <td><?php echo $message; ?></td>
          <td>       	
          	<div class="btn-group" role="group">
  				<a href="https://api.whatsapp.com/send?phone=<?php echo $mobile; ?>&text=We%20heard%20you%20<?php echo $inquiry; ?>" target="_blank"><button type="button" class="btn btn-default">Send Whatsapp</button></a>
 				<a href="mailto:<?php echo $email ?>Subject=Hello,%20from%20Dubai%20is%20Calling,%20we%20heard%20that%20you%20<?php echo $inquiry; ?>." target="_blank"><button type="button" class="btn btn-default">Send Email</button></a>
			</div>          	
          </td>
        </tr>
		<?php					
				}
			}
		break;
	}
}
function getStoryDetails($id,$view){
	global $con;
	$sql = "SELECT * FROM stories WHERE id = $id";
	$result = $con->query($sql);
	$data = $result->fetch_assoc();
		switch ($view){
			case "title":
				echo $data['title'];
			break;
			case "message":
				echo $data['message'];
			break;
		}
}
function editStoryPhotos($sid){
	global $con, $url;
	$get_media = $con->query("SELECT * FROM files WHERE post_id = $sid ORDER BY id");
	if ($dashList = $get_media) {
				while ($dashResult = $dashList->fetch_assoc()) {
					$photoId = $dashResult['id'];
					$photoUrl = $url."/uploads/" . $dashResult['file_name'];
					?>
					<div class="col-md-3" id="photoContainer">
						<div class="thumbnail">
							<div class="dashStoryThumb" style="background: url(<?php echo $photoUrl ?>)">								
								<div>
									<div id="<?php echo $photoId; ?>" data-callback="deletePhoto" class="btn btn-danger actionButton" style="margin: 10px; border: unset !important;"><i class="fa fa-minus-square"></i> Delete</div>
								</div>							
							</div> 
						</div>
					</div>
<?php
				}
	}
}

?>