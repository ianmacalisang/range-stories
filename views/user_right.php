<?php

switch($dashView){
	case 'share':
		include_once './views/dash_share.php';
		break;
	case 'stories':
		include_once './views/dash_stories.php';
		break;
	case 'review':
		include_once './views/dash_review.php';
		break;
	case 'users':
		include_once './views/dash_users.php';
		break;
	case 'subscribers':
		include_once './views/dash_subscribers.php';
		break;
	case 'inquiries':
		include_once './views/dash_inquiries.php';
		break;
	case 'edit':
		include_once './views/dash_edit.php';
		break;
		//USER ARCHIVE
	case 'published':
		include_once './views/user_published.php';
		break;
	case 'pending':
		include_once './views/user_pending.php';
		break;
	case 'reader':
		include_once './views/dash_estate.php';
		break;
		
		//USER PROFILE
	case 'settings':
		include_once './views/user_settings.php';
		break;
				
		
	default:
		include_once './views/user_stories.php';
		break;
}
?>
<span id="records"></span>