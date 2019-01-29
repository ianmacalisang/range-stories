
<div class="container">
    <div class="inner-story-contain">
    <div class="inner-story-head" style="background: url(<?php get_story_photo($sid,'banner'); ?>) no-repeat; background-size: auto 100% !important; background-color: #000;">
        
    </div>
        <div class="right-inner pads">
            <div class="story_category white"><?php echo get_type($type); ?></div>
            <h1 class="story_title"><b><?php echo $title; ?></b></h1>
            <div class="story_foot">
            <span><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;&nbsp;<?php getUser($from); ?></span>&nbsp;&bull;&nbsp;
            <span><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $views; ?></span>&nbsp;&bull;&nbsp;
            <span><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $date_format; ?></span>
            </div>
        </div>
    </div>
</div>

<div class="container">
	<div class="col-md-8">
		
		
		
		<div class="sencondary-main">
										
		<div class="main-writeup">
			
			
			<!-- TO BE REMOVED
		
            <div class="story_category"><?php echo get_type($type); ?></div>
            <h1 class="story_title" style="color: #222 !important;"><b><?php echo $title; ?></b></h1>
            <div class="story_foot" style="color: #222 !important;">
            <span><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;&nbsp;<?php getUser($from); ?></span>&nbsp;&bull;&nbsp;
            <span><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $views; ?></span>&nbsp;&bull;&nbsp;
            <span><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $date_format; ?></span>
            </div>
        	<br/><br/><br/>
			 TO BE REMOVED -->
			
			<?php echo $message; ?>
			<br/><br/><br/>
			<div class="story_category">About the Author</div>
			<div><?php storyAuthor($from); ?></div>
		</div>
			
		</div>			
	</div>
	
	<div class="col-md-4 pads-medium">
	    
	    <div class="panel panel-default">
            <div class="panel-body pads">
                <h2 class="story_category">PHOTOS</h2>
                <div class="gal">
                <?php            
                get_story_photo($sid,'all');            
                ?>
                </div>
            </div>
        </div>
	    
	    <div class="panel panel-default">
	    	<div class="panel-body pads">
                <h2 class="story_category">COMMENTS</h2>
	    <?php include_once './views/story_comments.php'; ?>
	    </div>
	    </div>
	    
		<div class="panel panel-default pads">
			<h2 class="story_category">SHARE THIS STORY</h2>
	    <div>
			<div class="addthis_inline_share_toolbox"></div>
		</div>
		</div>
	</div>
	
</div>