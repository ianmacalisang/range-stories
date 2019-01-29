<?php
require_once './includes/config.php';
require_once './includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Dubai Is Calling | What is your Story?</title>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="description" content="Owning a home in Dubai is everyone’s dream. It is also one of the most important investment you make in your life. Share your story with us.">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
 		<meta name="google-site-verification" content="5OXbhws_iBkO8ixY91rJH1u1759qkBXYmqaAPUEzVRg" />
    	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
		<link rel="stylesheet" type="text/css" href="/css/custom.css">
		<?php if($view == 'dashboard'){
			echo '<link rel="stylesheet" type="text/css" href="/css/admin.css">';
		} 
		?>
		
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
		<?php getView($view) ?>
		<section class="modals"><?php include_once './views/uni_modals.php'; ?></section>
		<section class="footer d-inline-block"><?php include_once './views/uni_footer.php'; ?></section>
		
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/plugins/tinymce/tinymce.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelement-and-player.min.js"></script>
		<script type="text/javascript" src="/js/custom.js"></script>
		<?php include_once './views/uni_snippets.php'; ?>
		<?php if(isset($_GET['action'])){
		?>
		<script type="text/javascript">
    		$(window).on('load',function(){
        		$('#form-actions').modal('show');
    			});
		</script>
		<?php
		}else{
			echo '';
		}
		?>
		<?php if($reason == "for consultancy"){
		?>
		<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 8617074;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>
<!-- End of LiveChat code -->
		<?php
		}else{
			echo '';
		}
		?>
	</body>
</html>