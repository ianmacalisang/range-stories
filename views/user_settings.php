<div>
	<h2 class="story_category">PROFILE SETTINGS</h2>
</div>
<br/>
<div class="col-md-8">
	<div class="panel panel-default">
		<div class="panel-heading">Edit Profile</div>
		<div class="panel-body">
			<form action="https://dubaiiscalling.com/includes/process.php?action=editProfile" method="post" enctype="multipart/form-data">
			<input name="sid" type="hidden" value="<?php echo $uid; ?>"/>
			<div class="col-md-4">
				<div class="settings-profile">
					<img src="<?php getUserAvatar($uid); ?>" />
				</div>
				<br/>
				<input type="file" class="form-control" name="profile-pic" />
				<div class="alert alert-info">Maximum file size 1MB.<br/>200 x 200 pixels.</div>		
			</div>
			<div class="col-md-8">
				<div class="row">
  					<div class="col-md-6">
  						<label for="user-fname">First Name</label>  					
      					<input id="user-fname" type="text" class="form-control" value="<?php echo $firstName; ?>" name="profile-fname">  					
 					</div>
  					<div class="col-md-6"> 
  						<label for="user-lname">Last Name</label>
      					<input id="user-lname" type="text" class="form-control" value="<?php echo $lastName; ?>" name="profile-lname">
    				</div>
  				</div>
  				
  				<div class="row">
  					<div class="col-md-6">
  						<label for="user-email">Email</label>  					
      					<input id="user-email" type="text" class="form-control" value="<?php echo $email; ?>" name="profile-email">  					
 					</div>
  					<div class="col-md-6"> 
  						<label for="user-password">Password</label>
      					<input id="user-password" type="password" class="form-control" value="<?php echo $password; ?>" name="profile-pass">
    				</div>
  				</div>
  				
  				<div class="row" style="padding: 20px;">
  					<div>
  						<label for="user-about">About Me</label>  					
      					<textarea id="user-about" class="form-control" name="profile-about"><?php echo $about; ?></textarea>			
 					</div>
  				</div>
  				
			</div
				
			</div>
			
		</div>
		<div class="panel-footer">
			<button type="submit" class="btn btn-primary">SAVE</button>   
		</div>
		</form>
	</div>
</div>
<div class="col-md-4">
	<div class="panel panel-default">
		<div class="panel-heading">Story Sharing</div>
		<div class="panel-body">
		<form action="https://dubaiiscalling.com/includes/process.php?action=editPrivacy" method="post" enctype="multipart/form-data">
			<input name="sid" type="hidden" value="<?php echo $uid; ?>"/>
			<label for="user-reason">Reason of Joining</label>
			<select name="user-reason" id="user-reason" class="form-control">
  				<option value="for sharing a story" <?php if($reason == "for sharing a story"){ echo "selected"; } ?>>for sharing a story</option>
  				<option value="for consultancy" <?php if($reason == "for consultancy"){ echo "selected"; } ?>>for consultancy</option>
			</select>
			
			<br/>
			<label for="user-anonymous">Share stories as Anonymous</label>
			<select name="user-anonymous" id="user-anonymous" class="form-control">
  				<option value="0" <?php if($anonymous == 0){ echo "selected"; } ?>>Yes</option>
  				<option value="1" <?php if($anonymous == 1){ echo "selected"; } ?>>No</option>
			</select>
			
			<br/>
			<label for="user-category">Story Category</label>
			<select name="user-category" id="user-category" class="form-control">
  				<option value="0" <?php if($storyCategory == 0){ echo "selected"; } ?>>I am an Investor - Multiple property owner</option>
  				<option value="1" <?php if($storyCategory == 1){ echo "selected"; } ?>>I am a Home owner - End-user</option>
  				<option value="2" <?php if($storyCategory == 2){ echo "selected"; } ?>>I am pursuing my dream home</option>
  				<option value="3" <?php if($storyCategory == 3){ echo "selected"; } ?>>I am planning my move to Dubai</option>
  				<option value="4" <?php if($storyCategory == 4){ echo "selected"; } ?>>Interested in the lifestyles in Dubai</option>
  				<option value="5" <?php if($storyCategory == 5){ echo "selected"; } ?>>I am a business owner / looking for a business</option>
			</select>
			
			<br/>
			<label for="user-interest">Interested Stories</label>
			<select name="user-interest" id="user-interest" class="form-control">
  				<option value="0" <?php if($interest == 0){ echo "selected"; } ?>>Real Estate Stories</option>
  				<option value="1" <?php if($interest == 1){ echo "selected"; } ?>>Lifestyle in Dubai</option>
  				<option value="2" <?php if($interest == 2){ echo "selected"; } ?>>Business owners and start-ups</option>
			</select>
			
			
		</div>
		<div class="panel-footer">
			<button type="submit" class="btn btn-primary">SAVE</button>   
		</div>
		</form>
	</div>
</div>