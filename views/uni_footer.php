<div class="container">
   <div class="col-md-3 pads">
      <div class="foot-title"><i class="fa fa-video-camera" aria-hidden="true"></i> DUBAI CREEK TOWER</div>
      <div class="foot-media">
			<video style=" height: 250px; width: 100%;" preload="none" poster="https://i.imgur.com/yIyASd9.jpg">
  				<source src="https://dl.dropboxusercontent.com/s/f6293yi18xnyoot/tower-rev.mp4" type="video/mp4">  					
				Your browser does not support the video tag.
			</video>
      </div>

   </div>
   <div class="col-md-3 pads">
      <div class="foot-title"><i class="fa fa-video-camera" aria-hidden="true"></i> DUBAI CREEK HARBOUR</div>
      <div class="foot-media"> 
      		<video style=" height: 250px; width: 100%;" preload="none" poster="https://i.imgur.com/S2ieMIx.jpg">
  				<source src="https://dl.dropboxusercontent.com/s/4ophomvjd1zuyno/dubai-creek-harbour.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
      </div>
  
   </div>
   <div class="col-md-3 pads">
      <div class="foot-title"><i class="fa fa-video-camera" aria-hidden="true"></i> BLUE WATERS ISLAND</div>
      <div class="foot-media">
      		<video style=" height: 250px; width: 100%;" preload="none" poster="https://i.imgur.com/JMxAiN3.jpg">
  				<source src="https://dl.dropboxusercontent.com/s/9tanhko9tbkvare/bluewaters-island.mp4" type="video/mp4"> 		
				Your browser does not support the video tag.
			</video>
      </div>
   
   </div>
   <div class="col-md-3 pads">
      <div class="foot-title"><i class="fa fa-video-camera" aria-hidden="true"></i> EXPO 2020</div>
      <div class="foot-media">
      		<video style=" height: 250px; width: 100%;" preload="none" poster="https://i.imgur.com/6oNEGxB.jpg">
  				<source src="https://dl.dropboxusercontent.com/s/zdwgkkz0bc9x9ce/expo2020-final.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
      </div>
  
   </div>
</div>

<?php if(!isset($_SESSION['ref'])){ ?>
<div class="container footerHarold">
        <div class="col-md-4 pads">
            <img src="https://i.imgur.com/ZZXUHvJ.png" alt="dubai is calling" style="width: 120px;margin-top: 5px;"/>
            <br/><br/>
            <div style="color: #8aa6bb; width: 80%;">We connect people with inspiration and bring their dreams to own the perfect property into reality.</div>
            
            <br/><br/><br/>
            
            <div class="siteMap-titles">LATEST STORIES</div>
            <ul class="siteMap-list">
            	<?php getLateststories(); ?>
            </ul>
            
        </div>
        
        <div class="col-md-4 pads">
        	<!--
            <div class="siteMap-titles">BUSINESS</div>
            <ul class="siteMap-list">
            	<li><a href="#">Entrepreneur</a></li>
            	<li><a href="#">Investors</a></li>
            	<li><a href="#">Move to Dubai</a></li>
            </ul>
            <br/>
            -->
            <div class="siteMap-titles">REAL ESTATE</div>
            <ul class="siteMap-list">
            	<li><a href="#">Share Your Story</a></li>
            	<li><a href="#">Read Stories</a></li>
            	<li><a href="#" data-toggle="modal" data-target="#propertyAdvice">Property Consultant Advise</a></li>
            	<li><a href="#" data-toggle="modal" data-target="#moveAdvice">Move to Dubai Consultation</a></li>
            </ul>
            <!--
            <br/>
            <div class="siteMap-titles">TOUR TO DUBAI</div>
            <ul class="siteMap-list">
            	<li><a href="#">Share Your Experience</a></li>
            	<li><a href="#">Planning your Tour to Dubai</a></li>
            </ul>
            -->
        </div>
        
        
         <div class="col-md-4 pads">
        	
            <div class="siteMap-titles">FOLLOW OUR INSTAGRAM</div>
            <!-- SnapWidget -->
			<script src="https://snapwidget.com/js/snapwidget.js"></script>
			<iframe src="https://snapwidget.com/embed/497765" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:70%; "></iframe>
          <br/><br/>
            <div class="siteMap-titles">FOLLOW OUR UPDATES</div>
            <div style="color: #8aa6bb; width: 80%;">Subscribe to our newsletter to stay updated.</div>
            <br/>
            <form action="/includes/process.php?action=subscription" method="post" enctype="multipart/form-data">
            <div class="col-md-8"><input type="email" name="subcribe-mail" class="subs-input-footer" placeholder="Email Address" required/></div>
            <div class="col-md-2"><button type="submit" class="story-button main-story-btn btn btn-primary subs-input-button">SUBSCRIBE</button></div>  
            </form>       
        </div>
       
</div>
<?php } ?>
<div class="site-map container">
   			<div>&copy; DubaiIsCalling <?php echo date('Y'); ?>. All rights reserved.</div>
</div> 
