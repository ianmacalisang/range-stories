<?php
require_once './config.php';
require_once './functions.php';

if (isset($_POST['last_record']) && $_POST['last_record'] != '') {
    $lastid = $_POST['last_record'];
	$pageView = $_POST['view'];
	$last_record = "";
	switch($pageView){
		case "allStories":
			$sql = "SELECT * FROM stories WHERE id < '$lastid' AND status=1 ORDER BY id DESC LIMIT 12";
			$paginateButton = "allStories";
			break;
		case "reviewStories":
			$sql = "SELECT * FROM stories WHERE id < '$lastid' AND status=0 ORDER BY id DESC LIMIT 12";
			$paginateButton = "reviewStories";
			break;
		case "userPublished":
			$sql = "SELECT * FROM stories WHERE id < '$lastid' AND status=1 AND from_id = $id ORDER BY id DESC LIMIT 12";
			$paginateButton = "userPublished";
			break;
		case "userPending":
			$sql = "SELECT * FROM stories WHERE id < '$lastid' AND status=0 AND from_id = $id ORDER BY id DESC LIMIT 12";
			$paginateButton = "userPending";
			break;
	}
   $query = $con->query($sql);
   if ($dashList = $query) {
		while ($dashResult = $dashList->fetch_assoc()) { ?>
                   
		         <div class="col-md-3" id="storyContainer">
         <div class="thumbnail">
            <div class="dashStoryThumb" style="background: url(<?php get_story_photo($dashResult['id'], 'single') ?>)">
            	<div class="story_category white dashCategory"><?php get_category($dashResult['category']); ?></div>
            </div>           
            <div class="caption">
            	<?php if($pageView == 'allStories'){ ?>
            		<div class="feature-slot"><?php if($dashResult['featured'] == 1){ ?><div class="label label-success">Featured</div> <?php } ?></div>
               		<h5 class="ellipsis" style="font-size: 18px !important"><b><?php echo $dashResult['title']; ?></b></h5>
            		<p class="dashAuthor"><?php getUser($dashResult['from_id']); ?><br/><?php echo $date_format; ?></p>
            	<?php }elseif($pageView == 'reviewStories'){ ?>
            		<h5 class="ellipsis" style="font-size: 18px !important"><b><?php echo $dashResult['title']; ?></b></h5>
            		<p class="dashAuthor"><?php getUser($dashResult['from_id']); ?><br/><?php echo $date_format; ?></p>        		
            	<?php }elseif($pageView == 'userPublished'){ ?>
            		<h5 class="ellipsis" style="font-size: 18px !important"><b><?php echo $dashResult['title']; ?></b></h5>
            		<p class="dashAuthor"><?php echo $date_format; ?></p>
            	<?php }elseif($pageView == 'userPending'){ ?>
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
  	<li><?php if($pageView == 'reviewStories'){ ?><a href="#" class="actionButton" data-callback="approveStory" id="<?php echo $dashResult['id']; ?>">Approve</a> <?php } ?></li>
  	<?php if($pageView == 'allStories'){ ?>
  		<?php if($dashResult['featured'] == 0){?><li><a href="#" class="actionButton" data-callback="toFeature" id="<?php echo $dashResult['id']; ?>">Mark as Featured</a></li><?php }else{ ?> <li><a href="#" class="actionButton" data-callback="toUnfeature" id="<?php echo $dashResult['id']; ?>">Unfeature Story</a></li> <?php } ?>
  		<li><a href="#" class="actionButton" data-callback="toReview" id="<?php echo $dashResult['id']; ?>">To Review</a></li>
  	<?php } ?>
    <?php if($pageView != 'userPublished'){ ?><li><a href="/dashboard/edit/<?php echo $dashResult['id']; ?>/">Edit</a></li> <? } else { echo ""; }; ?>
    <li><a href="#" class="actionButton" data-callback="deleteStory" id="<?php echo $dashResult['id']; ?>">Delete</a></li>
  </ul>
</span>
            
         </div>
      </div>            


	<?php
		$last_record = $dashResult['id'];
	}
echo '<div align="center"><div class="more loader btn btn-primary" id="'.$last_record.'" data-view="'.$paginateButton.'">LOAD MORE</div></div><br/>';
    } 
}else { echo ''; }
?> 
</div>