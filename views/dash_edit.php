
<h2 class="story_category">EDIT A STORY</h2><br/>

<div class="panel panel-default">
	<div class="panel-body">
		<form action="https://stories.range.ae/includes/process.php?action=editStory" method="post" enctype="multipart/form-data" id="shareStoryForm">
               <input type="hidden" value="<?php echo $_GET['id'];?>" name="sid" />
               <br/>
                    <div class="row">
               			<div class="col-md-8"><input type="text" class="form-control" name="title-story" placeholder="Title of your story..." value="<?php getStoryDetails($_GET['id'],'title'); ?>" required></div>
               			<div class="col-md-4">
               			<div class="topic-guide btn btn-success btn-block" style="padding: 12px;">Topic Guide</div>
               		</div>               		             	
               		</div>
                    <?php shareStoryInner($storyCategory); ?>            
               
               <div class="row"><textarea id="story-textarea" class="form-control" name="story" minlength="200" required><?php getStoryDetails($_GET['id'],'message'); ?></textarea>               </div>
               <div class="row">
                  <div class="col-md-4"> <input class="form-control-file" accept="image/*" type="file" name="files[]" multiple="multiple" />                  </div>
                  <div class="col-md-8">
                     <div class="alert alert-success">Upload photos to backup your story. Maximum file size is <b>12 MB</b>. <br/>Multiple photos are allowed by selecting all your desired photos.<br/>Photos are non-editable but you can add photos if desired.</div>
                  </div>
               </div>
               
               
               <div class="row">
                  <h3 class="story_category">Uploaded Photos</h3><br/>
                  <div id="paginate">
                  <?php editStoryPhotos($_GET['id']); ?>
                  </div>
               </div>
            
               
        </div>
         <div class="panel-footer">         
         	<button type="submit" class="btn btn-primary" id="shareStorySubmit">EDIT STORY</button>         
         </div> 
         </form>      
</div>  