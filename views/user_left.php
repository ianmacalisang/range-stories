<?php $dashView = $_GET['board']; ?>
<div class="panel panel-default pads">
	<div class="media">
  		<div class="media-left">
    		<img class="media-object" src="<?php getUserAvatar($uid); ?>">
  		</div>
  	<div class="media-body">
    		<h4 class="media-heading ellipsis" style="font-size: 16px !important;"><b><?php echo $fullname; ?></b></h4>   		
  	</div>
	</div>
	<br/>
	<div class="btn btn-primary btn-block" onclick="location.href='/dashboard/view/share/'"><i class="fa fa-edit fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;<b>SHARE A STORY</b></div>

</div>

<?php if($status == 1){ ?>
	<div class="panel panel-default">
	<div class="list-group">
  		<a href="#" class="list-group-item disabled"><b>ADMINISTRATION</b></a>
  		<a href="/dashboard/view/stories/" class="list-group-item <?php if($dashView == 'stories'){ echo "active"; }?>">All Stories <span class="badge"><?php showCount('all'); ?></span></a>
  		<a href="/dashboard/view/review/" class="list-group-item <?php if($dashView == 'review'){ echo "active"; }?>">Pending<span class="badge"><?php showCount('pending'); ?></span></a>
  		<a href="/dashboard/view/users/" class="list-group-item <?php if($dashView == 'users'){ echo "active"; }?>">Users<span class="badge"><?php showCount('users'); ?></span></a>
  		<a href="/dashboard/view/subscribers/" class="list-group-item <?php if($dashView == 'subscribers'){ echo "active"; }?>">Subscribers<span class="badge"><?php showCount('subscribers'); ?></span></a>
  		<a href="/dashboard/view/inquiries/" class="list-group-item <?php if($dashView == 'inquiries'){ echo "active"; }?>">Inquiries<span class="badge"><?php showCount('inquiries'); ?></span></a>
	</div>
</div>
<?php } ?>
<?php if(!isset($_SESSION['ref'])){ ?>
<div class="panel panel-default">
	<div class="list-group">
  		<a href="#" class="list-group-item disabled"><b>STORIES</b></a>
  		<a href="#" class="list-group-item">Real Estate</a>
  		<a href="#" class="list-group-item">Business</a>
  		<a href="#" class="list-group-item">Lifestyle</a>
	</div>
</div>
<? }else{ ?>
<div class="panel panel-default">
	<div class="list-group">
  		<a href="#" class="list-group-item disabled"><b>REAL ESTATE STORIES</b></a>
  		<a href="/dashboard/reader/all/" class="list-group-item <?php if($sorting == 'all'){ echo "active"; }?>">All</a>
  		<a href="/dashboard/reader/investors/" class="list-group-item <?php if($sorting == 'investors'){ echo "active"; }?>">Investors</a>
  		<a href="/dashboard/reader/endusers/" class="list-group-item <?php if($sorting == 'endusers'){ echo "active"; }?>">End-Users</a>
  		<a href="/dashboard/reader/rentals/" class="list-group-item <?php if($sorting == 'rentals'){ echo "active"; }?>">Rentals</a>
  		<a href="/dashboard/reader/movers/" class="list-group-item <?php if($sorting == 'movers'){ echo "active"; }?>">Movers</a>
	</div>
</div>
<?php } ?>
<div class="panel panel-default">
	<div class="list-group">
  		<a href="#" class="list-group-item disabled"><b>ARCHIVE</b></a>
  		<a href="/dashboard/view/published/" class="list-group-item <?php if($dashView == 'published'){ echo "active"; }?>">Published<span class="badge"><?php showCount('user-published',$uid); ?></a>
  		<a href="/dashboard/view/pending/" class="list-group-item <?php if($dashView == 'pending'){ echo "active"; }?>">Pending<span class="badge"><?php showCount('user-pending',$uid); ?></a>
	</div>
</div>

<div class="panel panel-default">
	<div class="list-group">
  		<a href="#" class="list-group-item disabled"><b>SETTINGS</b></a>
  		<a href="/dashboard/view/settings/" class="list-group-item <?php if($dashView == 'settings'){ echo "active"; }?>">Profile</a>
  		<a href="/includes/logout.php" class="list-group-item">Logout</a>
	</div>
</div>