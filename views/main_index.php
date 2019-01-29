<!-- HOME TOP START -->

<div class="container">
   <div class="col-md-6">
      <div class="main-left pads">
         <div class="left-inner">
         	<br/>
         	<p>#whatsyourstory #dubaiiscalling</p>
            <h1>DUBAI<br/>IS CALLING</h1><br/>
            <p>We connect people with inspiration and bring their dreams to own or rent the perfect property into reality in Dubai.</p>           
         </div>
      </div>
   </div>
   <div class="col-md-6">
      <div class="main-right">
         <div class="col-md-6 right-contain" onclick="location.href = '<?php if(isset($_SESSION['sessionId'])){ echo '/dashboard/view/business-stories/'; }else{ echo '/business/'; }?>'">
            <div class="index-main-bg right-bg"></div>     
         	<div class="pads-large inner-main-index">
               <div class="desc to-hide index-titles ">BUSINESS</div>
               <div class="description index-desc">This page is under development.</div>
            </div>  
         </div>
         <div class="col-md-6 right-contain" onclick="location.href = '<?php if(isset($_SESSION['sessionId'])){ echo '/dashboard/view/lifestyle-stories/'; }else{ echo '/lifestyle/'; }?>'">
            <div class="index-bgb right-bg"></div>
            <div class="pads-large inner-main-index">
               <div class="desc to-hide index-titles ">LIFESTYLE</div>
               <div class="description index-desc">This page is under development.</div>
            </div>
            </div>
         </div>
         <div class="right-contain" style="position: relative !important; width: 100%;" onclick="location.href = '<?php if(isset($_SESSION['sessionId'])){ echo '/dashboard/view/estate-stories/'; }else{ echo '/estate/'; }?>'">
            <div class="index-bga right-bg"></div>
            <div class="pads-large inner-main-index">
               <div class="desc to-hide index-titles ">REAL ESTATE</div>
               <div class="description index-desc">Share your story if you are pursuing your dream home.</div>
            </div>
         </div>  
      </div>
   </div>
</div>

<!-- HOME TOP END -->

<!-- carousel -->
   				
<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="pads-large-2x" style="padding-bottom: 15px !important;" align="center">
				<h2>WHAT OUR <b>READERS</b> SAY</h2>
				</div>
				<div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
				  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
				    <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
				  </ol>
				  <!-- Carousel items -->
				  <div class="carousel-inner">
				    <div class="active item">
				    	<blockquote>
				    		<p>We are really inspired by this unique platform to share & read amazing and inspirational stories. It helps us highlight our problems and find truly worth our while solutions. We must say Dubai is calling is really informative and the best free consultancy platform regarding any Real Estate concerns and problems.</p>
				    	</blockquote>
				    	<div class="profile-circle" style="background-color: rgba(0,0,0,.2);">
				    		<img src="https://i.imgur.com/aWx6axi.jpg"  />
				    	</div>
				    </div>
				    <div class="item">
				    	<blockquote>
				    		<p>Hey fellas, great work as I just followed your website and it has some pretty good information and many inspiring stories. I am planning to move to a bigger flat on rent in Bur Dubai so I require some assistance. This is Aiden by the way. P.S., much obliged.</p>
				    	</blockquote>
				    	<div class="profile-circle" style="background-color: rgba(77,5,51,.2);">
				    		<img src="https://i.imgur.com/aWx6axi.jpg"  />
				    	</div>
				    </div>
				    <div class="item">
				    	<blockquote>
				    		<p>Hi, Dubai is calling, I am new to your channel and I am looking forward to sharing some stories about my friends, colleagues, and family. Is there a possibility I can post freely? Looking forward to your reply.</p>
				    	</blockquote>
				    	<div class="profile-circle" style="background-color: rgba(145,169,216,.2);">
				    		<img src="https://i.imgur.com/aWx6axi.jpg"  />
				    	</div>
				    </div>
				  </div>
				</div>
			</div>							
		</div>
</div>
<br/><br/>

<div class="container">
		<div class="main-index-tri">
			<div class="pads-large-2x" align="center">
				<h2>WHAT YOU <b>SEE</b><br/> IS NOT ALWAYS <b>THE WHOLE STORY</b></h2>						
				<br/>
				<p>Hearing an entrepreneurial success story is always interesting and charismatic. But hearing how that same successful person failed so many times in the process is both inspiring and exemplary.</p>
			</div>
		</div>	
</div>

<?php include_once './views/uni_dashboard.php'; ?>
