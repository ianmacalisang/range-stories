
<div class="modal fade" id="loginModal" role="dialog">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-body">
         	<button type="button" class="close image-modal-close" data-dismiss="modal">×</button>
         	
         	<div class="row">
         	<div class="col-md-7 login-left">
         		<h1><b>START SHARING <br/>YOUR STORY</b></h1>
         		<p>Big moments get <b>bigger</b> when you share them.</p>
         	</div>
         	
         	<div class="col-md-5 login-right pads"> 
         		<br/>        	
         	<div class="login-container">
         			<form method="POST" id="loginForm">       
            		<input id="email" class="form-control" name="email" type="email" placeholder="Enter your email" required>
					<input id="password" class="form-control" name="pasword" type="password" placeholder="Password" required>    
										
            		<div class="col-md-6">     
            		<button type="submit" class="btn btn-primary btn-block" id="but_submit">LOG ME IN</button>  
		  			</div>
		  			</form>
		  			<div class="col-md-6">
		  			<button class="btn btn-primary btn-block" onclick="location.href='<?php echo $url.'/form/' ?>';">SIGN ME UP &nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>	
		  			</div>
		  			<div class="alert alert-danger loginMsg"></div>
		  			
		  					  		
		  	</div>		  	
		  	</div>
		  </div>
         </div>      
      </div>  
   </div>
</div>

<div class="modal fade" id="form-actions" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-body modal-affirm pads">            
            <?php            
               if($form_action == "success"){
               	echo "<div class='modal-affirm alert alert-success'><h3>Thank you for sharing your story.</h3><br/> We'll make best use of it to help others during their journey.<br/><br/><h5>Note: This story will be shortlisted for review to maintain the quality of our site content.</h5></div>";            
               } 
               if($form_action == "subscribed"){
               echo "<div class='modal-affirm alert alert-success'><h3>Thank you for subscribing.</h3> You will now start receiving updates from our latest news.</div>";            
               }
               if($form_action == "consulted"){
               echo "<div class='modal-affirm alert alert-success'><h3>Thank you for consulting with us.</h3> Our experts will contact you shortly.</div>";            
               }          
               if($form_action == "failed"){
               echo "<div class='modal-affirm alert alert-danger'><h3>Something just went wrong. Please try again later.</h3></div>";            
               }
			   if($form_action == "loggedin"){
               echo "<div class='modal-affirm alert alert-success'><h2>Thank you.</h2> We have sent you an email with your login details.</div>";            
               }				           
               ?>         
         </div>
         <div class="modal-footer" style="text-align: center;">
            <div type="button" class="btn btn-primary" data-dismiss="modal" onclick="location.href='#';">OK</div>
         </div>
      </div> 
   </div>
</div>
<div class="modal fade" id="propertyAdvice" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>            
            <h4 class="modal-title story_category">GET PROPERTY CONSULTANT ADVICE</h4>
         </div>
         <div class="modal-body pads">
            <div class="alert alert-info">The journey to find your dream home or investing in the right property can be challenging. But, no worries, as our free consultancy will assist you to get through all the challenges you are facing in the market. Our experts combine the perfect blend of market intelligence and networking skills to ensure that you can buy, sell or rent the right property, at the right price. Experts understand which properties and areas deliver the precise property you have pictured in mind – and with an ability to anticipate future trends and developments – we provide insightful services so you can find your dream property.</div>
            <form action="/includes/process.php?action=adviceContact&type=0" method="post" id="propertyForm" enctype="multipart/form-data">
               <div class="form-group">                  <input <?php if(isset($_SESSION['sessionId'])){ echo "value='$fullname' readonly"; }?> type="text" name="user-name" placeholder="Name" class="form-control input-lg" required>               </div>
               <div class="form-group">                  <input <?php if(isset($_SESSION['sessionId'])){ echo "value='$email' readonly"; } ?> type="email" name="user-email" placeholder="Email" class="form-control input-lg" required>               </div>
               <div class="form-group">                  <input <?php if(isset($_SESSION['sessionId'])){ echo "value='$mobile' readonly"; }?> type="tel" name="user-mobile" placeholder="Mobile Number" class="form-control input-lg" required>               </div>
               <div class="form-group">                  <textarea class="form-control" name="user-message" required>Write your inquiry...</textarea>               </div>
         </div>
         <div class="modal-footer">         <button type="submit" class="btn btn-primary" id="propertySubmit"><i class="fa fa-paper-plane" aria-hidden="true"></i> SEND</button>         <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>         </div>      
      </div>
      </form>   
   </div>
</div>
<div class="modal fade" id="moveAdvice" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>            
            <h4 class="modal-title story_category">MOVE TO DUBAI CONSULTATION</h4>
         </div>
         <div class="modal-body pads">
            <div class="alert alert-info">
               <p>Moving to Dubai made easy. If you have plans to buy or rent your dream home in Dubai, then we will help you connect with the best solutions that you need for a successful relocation.</p>
               <br/>
               <p>We know all the tips and tricks for successfully moving to Dubai with a minimum of hassles. So why not contact us? You’ll be glad once everything is done and in place in your new location without any hassles or problems.</p>
            </div>
            <form action="/includes/process.php?action=adviceContact&type=1" method="post" id="moveForm" enctype="multipart/form-data">
               <div class="form-group">                  <input <?php if(isset($_SESSION['sessionId'])){ echo "value='$fullname' readonly"; }?> type="text" name="user-name" placeholder="Name" class="form-control input-lg" required>               </div>
               <div class="form-group">                  <input <?php if(isset($_SESSION['sessionId'])){ echo "value='$email' readonly"; } ?> type="email" name="user-email" placeholder="Email" class="form-control input-lg" required>               </div>
               <div class="form-group">                  <input <?php if(isset($_SESSION['sessionId'])){ echo "value='$mobile' readonly"; }?> type="tel" name="user-mobile" placeholder="Mobile Number" class="form-control input-lg" required>               </div>
               <div class="form-group">                  <textarea class="form-control" name="user-message" required>Write your inquiry...</textarea>               </div>
         </div>
         <div class="modal-footer">         <button type="submit" class="btn btn-primary" id="moveSubmit"><i class="fa fa-paper-plane" aria-hidden="true"></i> SEND</button>         <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>         </div>      
      </div>
      </form>   
   </div>
</div>
<!-- LEAD MODALS -->
<div class="modal fade" id="creativeWriter" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>            
            <h4 class="modal-title story_category">GET A CREATIVE WRITER</h4>
         </div>
         <div class="modal-body pads">
            <div class="alert alert-info">
               <p>The Key to good writing is originality and driving the audience into emotions. Hiring a professional writer will give an edge on reforming and presenting your stories a moralistic and encouraging theme while declaring you as an exemplifying personality.</p>
            </div>
            <form action="/includes/process.php?action=adviceContact&type=2" method="post" id="creativeForm" enctype="multipart/form-data">
               <div class="form-group">                  <input <?php if(isset($_SESSION['sessionId'])){ echo "value='$fullname' readonly"; }?> type="text" name="user-name" placeholder="Name" class="form-control input-lg" required>               </div>
               <div class="form-group">                  <input <?php if(isset($_SESSION['sessionId'])){ echo "value='$email' readonly"; } ?> type="email" name="user-email" placeholder="Email" class="form-control input-lg" required>               </div>
               <div class="form-group">                  <input <?php if(isset($_SESSION['sessionId'])){ echo "value='$mobile' readonly"; }?>  type="tel" name="user-mobile" placeholder="Mobile Number" class="form-control input-lg" required>               </div>
               <div class="form-group">                  <textarea class="form-control" name="user-message" required>Write your inquiry...</textarea>               </div>
         </div>
         <div class="modal-footer">         <button type="submit" class="btn btn-primary" id="creativeSubmit"><i class="fa fa-paper-plane" aria-hidden="true"></i> SEND</button>         <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>         </div>      
      </div>
      </form>   
   </div>
</div>
<div class="modal fade" id="relocationConsultation" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>            
            <h4 class="modal-title story_category">FREE RELOCATION CONSULTATION</h4>
         </div>
         <div class="modal-body pads">
            <div class="alert alert-info">
               <p>The act to find a dream home for your loved ones can be challenging and somewhat difficult without a professional advice stepping in. We will make that journey easy with our professional consultation for free. Ask our professionals and get the solution to your problems.</p>
            </div>
            <form action="/includes/process.php?action=adviceContact&type=3" method="post" id="relocationForm" enctype="multipart/form-data">
               <div class="form-group">                  <input <?php if(isset($_SESSION['sessionId'])){ echo "value='$fullname' readonly"; }?> type="text" name="user-name" placeholder="Name" class="form-control input-lg" required>               </div>
               <div class="form-group">                  <input <?php if(isset($_SESSION['sessionId'])){ echo "value='$email' readonly"; } ?> type="email" name="user-email" placeholder="Email" class="form-control input-lg" required>               </div>
               <div class="form-group">                  <input <?php if(isset($_SESSION['sessionId'])){ echo "value='$mobile' readonly"; }?> type="tel" name="user-mobile" placeholder="Mobile Number" class="form-control input-lg" required>               </div>
               <div class="form-group">                  <textarea class="form-control" name="user-message" required>Write your inquiry...</textarea>               </div>
         </div>
         <div class="modal-footer">         <button type="submit" class="btn btn-primary" id="relocationSubmit"><i class="fa fa-paper-plane" aria-hidden="true"></i> SEND</button>         <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>         </div>      
      </div>
      </form>   
   </div>
</div>
<div class="modal fade" id="findHome" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>            
            <h4 class="modal-title story_category">FIND YOUR DREAM HOME</h4>
         </div>
         <div class="modal-body pads">
            <div class="alert alert-info">
               <p>Everyone steps in the market with an image in mind and strive to find that particular definition throughout their journey. That’s where a good real agent becomes an important ally. Professional realty experts understand exactly what you are looking for and where to find it in the best budget. Plus a professional taking care of all your paperwork and meeting with clients is another reason for hiring a pro.</p>
            </div>
            <form action="/includes/process.php?action=adviceContact&type=4" method="post" id="homeForm" enctype="multipart/form-data">
               <div class="form-group">                  <input <?php if(isset($_SESSION['sessionId'])){ echo "value='$fullname' readonly"; }?> type="text" name="user-name" placeholder="Name" class="form-control input-lg" required>               </div>
               <div class="form-group">                  <input <?php if(isset($_SESSION['sessionId'])){ echo "value='$email' readonly"; } ?> type="email" name="user-email" placeholder="Email" class="form-control input-lg" required>               </div>
               <div class="form-group">                  <input <?php if(isset($_SESSION['sessionId'])){ echo "value='$mobile' readonly"; }?> type="tel" name="user-mobile" placeholder="Mobile Number" class="form-control input-lg" required>               </div>
               <div class="form-group">                  <textarea class="form-control" name="user-message" required>Write your inquiry...</textarea>               </div>
         </div>
         <div class="modal-footer">         <button type="submit" class="btn btn-primary" id="homeSubmit"><i class="fa fa-paper-plane" aria-hidden="true"></i> SEND</button>         <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>         </div>      
      </div>
      </form>   
   </div>
</div>
<!-- IMAGE MODALS -->
<div id="modal_image" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="modal-image" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content image-modal-body">          
                <button type="button" class="close image-modal-close" data-dismiss="modal">×</button>
         <div class="modal-body image-modal-body">
            <img class="image_modal img-responsive" src="" />
         </div>
      </div>
   </div>
</div>