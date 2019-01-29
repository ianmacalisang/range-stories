<div class="container">
		<div class="main-index-middle">
			<div class="main-index-middle-contain pads-large">
				<p>Our potential team is working to gather stories of different people and their expeditions to success. We present your stories as a motivation to those who are yet to attain their goals in finding their dream property in Dubai. Share how you overcame the challenges being faced throughout this journey. Also, Your current market stance and plans if you are still looking for your dream home. These stories will become an enthusiastic exemption to others who are lost in challenges and are looking for mentors. We will help you connect with inspiration and bring your dreams of finding the fascinating home/property into reality.</p>						
				<br/><br/>
				<div align="center">
				<?php if(!isset($_SESSION['sessionId'])){ ?>
				<div data-toggle="modal" data-target="#loginModal" class="btn btn-primary btn-index-main"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;SHARE YOUR STORY</div>
				<?php }else { ?>						
				<div onclick="location.href='<?php echo $url;?>/dashboard/'" class="btn btn-primary btn-index-main"><i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;GO TO DASHBOARD </div>	
				<?php } ?>
				</div>
			</div>
		</div>	
</div>