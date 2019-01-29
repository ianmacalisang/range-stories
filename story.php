<?php
require_once './includes/config.php';
require_once './includes/functions.php';

$sid = $_GET['sid'];
$sql = mysqli_query($con,"SELECT * FROM stories WHERE id = '$sid'");
$get_story = mysqli_fetch_assoc($sql);

$from          = $get_story['from_id'];
$message       = $get_story['message'];
$desc			= strip_tags($message);
$title		   = $get_story['title'];
$time          = $get_story['timestamp'];
$views		= $get_story['views'];
$date          = date_create($time);
$date_format   = date_format($date, 'F j Y');
$type          = $get_story['type'];


mysqli_query($con,"UPDATE stories SET views = views+1 WHERE id = '$sid'");

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $title; ?> | Dubai Is Calling</title>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	
    	<meta name="description" content="<?php echo StripTruncate($desc); ?>">
    	
    	<meta property="og:url" content="<?php echo $ogp; ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?php echo $title?>" />
		<meta property="og:description" content="<?php echo StripTruncate($desc); ?>" />
		<meta property="og:image" content="<?php echo get_story_photo($sid,'single') ?>" />
		
		<meta property="fb:app_id" content="997673583720679" />
    	    	
    	<meta name="viewport" content="width=device-width, initial-scale=1">
 		
    	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
		<link rel="stylesheet" type="text/css" href="/css/custom.css">
		
		<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	</head>
	<body>
		
		<section class="header"><?php include_once './views/uni_header.php'; ?></section>
		<section class="story-body"><?php include_once './views/story_body.php'; ?></section>
		<section><?php include_once './views/uni_leads.php'; ?></section>
		<section><?php include_once './views/uni_dashboard.php'; ?></section>	
		<section class="modals"><?php include_once './views/uni_modals.php'; ?></section>					
		<section class="footer d-inline-block"><?php include_once './views/uni_footer.php'; ?></section>
		
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/plugins/tinymce/tinymce.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelement-and-player.min.js"></script>
		<script type="text/javascript" src="/js/custom.js"></script>
		<?php include_once './views/uni_snippets.php'; ?>		
	</body>
</html>