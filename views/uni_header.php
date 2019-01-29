<nav class="navbar navbar-inverse">
   <div class="container-fluid">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">         
         		<span class="sr-only">Toggle navigation</span>         
         		<span class="icon-bar"></span>         
         		<span class="icon-bar"></span>         
         		<span class="icon-bar"></span>         
         </button>     
      	 <div class="navbar-brand">
      	 	<?php if(isset($_SESSION['ref'])){ ?>
      	 	<a href="https://range.ae/share-your-story/"><img src="https://i.imgur.com/344zEjq.png" alt="dubai is calling"/></a>
      	 	<?php }else{ ?>
      	 	<a href="https://range.ae/share-your-story/"><img src="https://i.imgur.com/344zEjq.png" alt="dubai is calling"/></a>
      	 	<?php } ?>
      	 </div>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
         <ul class="nav navbar-nav navbar-right">
         	<?php if(!isset($_SESSION['ref'])){ ?>
         	<!-- <li><a href="/">HOME</a></li> -->
            <!-- <li><a href="<?php if(isset($_SESSION['sessionId'])){ echo '/dashboard/view/business-stories/'; }else{ echo '/business/'; }?>">BUSINESS</a></li> -->
            <!-- <li><a href="<?php if(isset($_SESSION['sessionId'])){ echo '/dashboard/view/estate-stories/'; }else{ echo '/estate/'; }?>">REAL ESTATE</a></li> -->            
            <!-- <li><a href="<?php if(isset($_SESSION['sessionId'])){ echo '/dashboard/view/lifestyle-stories/'; }else{ echo '/lifestyle/'; }?>">LIFESTYLE</a></li> -->            
            <?php login_front($uid); ?>        		           		
           	<?php }else{ ?>   
        	<li><a href="https://range.ae/share-your-story/">HOME</a></li>       	
        	<?php } ?>
         </ul>
      </div>
      <!--/.nav-collapse -->   
   </div>
</nav>