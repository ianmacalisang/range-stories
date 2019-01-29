<br/>
<div class="container">
	<div class = "container">
	<div class="wrapper">
		<form method="POST" id="loginForm" class="form-signin">     
		    <h3 class="form-signin-heading">Sign-in to Continue</h3>
			  <hr class="colorgraph"><br>
			  
			  <div class="alert alert-info">
			  	Signing up will give access to our huge library of successful stories in Dubai.
			  </div>
			  
			  <input id="email" class="form-control signin-form-mail" name="email" type="email" placeholder="Enter your email" required>
			  <br/>
			  <input id="password" class="form-control signin-form-pass" name="password" type="password" placeholder="Password" required>    
			  		  
			  <div class="col-md-6">
			  	<button type="submit" class="btn btn-primary btn-block" id="but_submit">LOG IN</button> 
			  </div>
			  <div class="col-md-6">
			  	<div class="btn btn-primary btn-block" onclick="location.href='<?php echo $url.'/form/' ?>';">SIGN UP &nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></div>
			  </div>	
						  			  			
		</form>	
					
	</div>
</div>
</div>
<br/>