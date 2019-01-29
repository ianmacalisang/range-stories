<?php
session_start();
require_once './includes/config.php';
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Start Sharing your Story | Dubai is Calling</title>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="description" content="Owning a home in Dubai is everyone’s dream. It is also one of the most important investment you make in your life. Share your story with us.">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
 
		<link rel="stylesheet" type="text/css" href="https://stories.range.ae/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="https://stories.range.ae/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="https://stories.range.ae/css/component.css" />
		<link rel="stylesheet" type="text/css" href="https://stories.range.ae/css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="https://stories.range.ae/css/cs-skin-boxes.css" />
				
		<link rel="apple-touch-icon" sizes="57x57" href="https://stories.range.ae/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="https://stories.range.ae/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="https://stories.range.ae/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="https://stories.range.ae/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="https://stories.range.ae/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="https://stories.range.ae/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="https://stories.range.ae/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="https://stories.range.ae/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="https://stories.range.ae/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="https://stories.range.ae/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="https://stories.range.ae/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="https://stories.range.ae/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="https://stories.range.ae/favicon/favicon-16x16.png">
		
		
	</head>
	<body>

			<div class="fs-form-wrap" id="fs-form-wrap">
				<form id="myform" class="fs-form fs-form-full" autocomplete="off" action="https://stories.range.ae/includes/process.php?action=registration" method="post">
					
					<?php if(isset($_SESSION['ref'])){  ?>
						<input id="q15a" name="q15" type="hidden" value="0" required/>
					<?php } ?>
					
					<ol class="fs-fields">
						
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q1">
								As a part of this community, you'll gain access to inspirational stories & suggestions from our members. Can you keep this information confidential?
								<p>Our community shares their insights & stories freely because they trust other members. You can too share insights/challenges you are facing and stories freely, knowing your privacy is respected & valued.</p>			
							</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q1a" name="q1" type="radio" value="0" required/><label for="q1a" class="label-buttons">Yes</label></span>
								<span><input id="q1b" name="q1" type="radio" value="1"/><label for="q1b" class="label-buttons">No</label></span>
							</div>
						</li>
						
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q2">
								Do you agree to share your challenges or suggestions so our community can offer support & solutions?
								<p>We share our challenges openly and humbly so the feedback process can be shortened and we can get the answers & solutions we need.</p>			
							</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q2a" name="q2" type="radio" value="0" required/><label for="q2a" class="label-buttons">Yes</label></span>
								<span><input id="q2b" name="q2" type="radio" value="1"/><label for="q2b" class="label-buttons">No</label></span>
							</div>
						</li>
						
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q3">
								Would you like to share your stories and challenges anonymously?
								<p>We respect your privacy and provide options for your comfort.</p>			
							</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q3a" name="q3" type="radio" value="0" required/><label for="q3a" class="label-buttons">Yes</label></span>
								<span><input id="q3b" name="q3" type="radio" value="1"/><label for="q3b" class="label-buttons">No</label></span>
							</div>
						</li>
						
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q4">
								Stories are shared to inspire people and help one another. Are you willing to help others with your advice and experience?
								<p>Our community is created to share enticing stories and solutions for others. Helping each other with expertise and knowledge.</p>			
							</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q4a" name="q4" type="radio" value="0" required/><label for="q4a" class="label-buttons">Yes</label></span>
								<span><input id="q4b" name="q4" type="radio" value="1"/><label for="q4b" class="label-buttons">No</label></span>
							</div>
						</li>
						
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q5">
								With our free consultancy, we are offering help regarding the challenges and struggles. Are you here for consultancy or just sharing your journey of success?
							</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q5a" name="q5" type="radio" value="for consultancy" required/><label for="q5a" class="label-buttons">For Consultancy</label></span>
								<span><input id="q5b" name="q5" type="radio" value="for sharing a story"/><label for="q5b" class="label-buttons">For Sharing my Story</label></span>
							</div>
						</li>
						
						
						<li>
							<label class="fs-field-label fs-anim-upper" for="q8">What is your first name?</label>
							<input class="fs-anim-lower" id="q8" name="q8" type="text" placeholder="First Name" autofocus required/>
						</li>
						
						<li>
							<label class="fs-field-label fs-anim-upper" for="q9">What is your last name?</label>
							<input class="fs-anim-lower" id="q9" name="q9" type="text" placeholder="Last Name" autofocus required/>
						</li>
						
						<li>
							<label class="fs-field-label fs-anim-upper" for="emailLogin" data-info="We won't send you spam, we promise. This is also used as your signup credential.">What's your email address?</label>
							<input class="fs-anim-lower" id="emailLogin" name="emailLogin" type="email" placeholder="Email" autofocus required/>
						</li>
						
						<li>
							<label class="fs-field-label fs-anim-upper" for="q11">What is the best phone number to reach you on?</label>
							<input class="fs-anim-lower" id="q11" name="q11" type="number" placeholder="Mobile Number" autofocus/>
						</li>
						
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q12">
								Tell us about yourself.
								<p>Your shared stories will be based about yourself.</p>
							</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q12a" name="q12" type="radio" value="0" required/><label for="q12a" class="label-buttons">I am an Investor - Multiple property owner</label></span>
								<span><input id="q12b" name="q12" type="radio" value="1" required/><label for="q12b" class="label-buttons">I am a Home owner - End-user</label></span>
								<span><input id="q12c" name="q12" type="radio" value="2" required/><label for="q12c" class="label-buttons">I am pursuing my dream home</label></span>
								<span><input id="q12d" name="q12" type="radio" value="3" required/><label for="q12d" class="label-buttons">I am planning my move to Dubai</label></span>
								<?php if(!isset($_SESSION['ref'])){ ?>
								<span><input id="q12e" name="q12" type="radio" value="4" required/><label for="q12e" class="label-buttons">Interested in the lifestyles in Dubai</label></span>
								<span><input id="q12f" name="q12" type="radio" value="5" required/><label for="q12f" class="label-buttons">I am a business owner / looking for a business</label></span>
								<?php } ?>
							</div>
						</li>
						<?php if(!isset($_SESSION['ref'])){ ?>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q15">
								What kind of stories are you interested in?
								<p>We will find a good story for your interest.</p>
							</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q15a" name="q15" type="radio" value="0" required/><label for="q15a" class="label-buttons">Real Estate Stories</label></span>							
								<span><input id="q15b" name="q15" type="radio" value="1" required/><label for="q15b" class="label-buttons">Lifestyle in Dubai</label></span>
								<span><input id="q15c" name="q15" type="radio" value="2" required/><label for="q15c" class="label-buttons">Business owners and start-ups</label></span>
							
							</div>
						</li>
							<?php }?>
									
							
						<li>
							<label class="fs-field-label fs-anim-upper" for="q13">About Me
							<p>Describe yourself in a few words.</p>
							</label>
							<input class="fs-anim-lower" id="q13" name="q13" type="text" placeholder="Type here" autofocus required/>
						</li>
						
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q14">
								Last Question. You understand that, on joining our community, one must respect the privacy of other members and maintain a respectful environment within. Would you accept it?										
							</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q14a" name="q14" type="radio" value="0" required/><label for="q14a" class="label-buttons">Ok</label></span>
							</div>
						</li>
										
					</ol>
					<button class="fs-submit" id="loginSubmit" type="submit">
						START SHARING STORY<br/>
						<div id="validationAlert" class="alert" style="font-size: 14px;font-weight: normal;"></div>
					</button>
				</form>
			</div>
		
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="https://stories.range.ae/js/modernizr.custom.js"></script>
		<script type="text/javascript" src="https://stories.range.ae/js/classie.js"></script>
		<script type="text/javascript" src="https://stories.range.ae/js/selectFx.js"></script>
		<script type="text/javascript" src="https://stories.range.ae/js/fullscreenForm.js"></script>

		<script type="text/javascript">
		(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' );
					}
				} );
			})();
			
			
$('#emailLogin').on('change', function() {
    var email = $('#emailLogin').val();
    var action = 'validateEmail';
    $.ajax({
    	type: "POST",
        url: "/includes/process.php?action=validateEmail",
        data:"email=" + email,
        dataType: 'json',
        success: function(data) {
            if(data.result) {
                $('#validationAlert').addClass('alert-danger').html('<i class="fa fa-window-close-o" aria-hidden="true"></i>&nbsp;&nbsp;Email is already taken.').show();
                 $('#loginSubmit').prop('disabled',true);
                console.log('checking');
            }
            else {
                $('#validationAlert').addClass('alert-success').html('<i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;&nbsp;Email is available.').show();
                $('#loginSubmit').prop('disabled',false);
                console.log('checking');
            }
        },
        error: function(data){
            alert('Error');
            console.log('checking');
        }
    });
	});
			
		</script>

	</body>
</html>