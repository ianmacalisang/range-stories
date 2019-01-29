
<h2 class="story_category">SHARE YOUR STORY WITH US</h2><br/>

<div class="panel panel-default">
	<div class="panel-body">
	<div class="alert alert-info">
 		You are sharing your stories as <b><?php echo get_type($storyCategory); ?></b>. Stories submitted will be reviewed by us to maintain site content quality. 
	</div>
		
		<form action="https://stories.range.ae/includes/process.php?action=addStory" method="post" enctype="multipart/form-data" id="shareStoryForm">
               <div class="row">               	
               		<div class="input-group modal-choices">
      					<span class="input-group-addon">
        					<input type="checkbox" name="chkboxes[]" value="this is my success story">
      					</span>
      						<input type="text" class="form-control" value="This is my success story." disabled="">
    				</div>
    				
    				<div class="input-group modal-choices">
      					<span class="input-group-addon">
        					<input type="checkbox" name="chkboxes[]" value="i am sharing my past and current challenges">
      					</span>
      						<input type="text" class="form-control" value="I am sharing my past and current challenges." disabled="">
    				</div> 
    				
    				<div class="input-group modal-choices">
      					<span class="input-group-addon">
        					<input type="checkbox" name="chkboxes[]" value="share my story to guide others through their challenges">
      					</span>
      						<input type="text" class="form-control" value="Share my story to guide others through their challenges." disabled="">
    				</div>
    				
    				<div class="input-group modal-choices">
      					<span class="input-group-addon">
        					<input type="checkbox" name="chkboxes[]" value="i want consultancy for my challenges and real estate concerns">
      					</span>
      						<input type="text" class="form-control" value="I want consultancy for my challenges and real estate concerns." disabled="">
    				</div>       
    				   				
               </div>
               <br/>
                    <div class="row">
               			<div class="col-md-8"><input type="text" class="form-control" name="title-story" placeholder="Title of your story..." required></div>
               			<div class="col-md-4">
               			<div class="topic-guide btn btn-success btn-block" style="padding:12px;">Topic Guide</div>
               		</div>               		             	
               		</div>
                    <?php shareStoryInner($storyCategory); ?>            
               
               <div class="row"><textarea id="story-textarea" class="form-control" name="story" minlength="200" required>Share your story...</textarea>               </div>
               <div class="row">
                  <div class="col-md-4"> <input class="form-control-file" accept="image/*" type="file" name="files[]" multiple="multiple" />                  </div>
                  <div class="col-md-8">
                     <div class="alert alert-success">Upload photos to backup your story. Maximum file size is <b>12 MB</b>. <br/>Multiple photos are allowed by selecting all your desired photos.</div>
                  </div>
               </div>
        </div>
         <div class="panel-footer">         
         	<button type="submit" class="btn btn-primary" id="shareStorySubmit">SUBMIT STORY</button>                
         </div> 
         </form>      
</div>  