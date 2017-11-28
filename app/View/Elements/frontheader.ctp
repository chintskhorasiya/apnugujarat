<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php echo $this->Html->css('frontstyle'); ?>
<header class="header"> <!-- header start -->
   	<div class="container">
      	<div class="top-header"> <!-- top header start -->
	     	<div class="e-paper">
		    	<a href="#"><img src="<?=DEFAULT_URL?>img/e-paper.png" alt="" /></a>
		 	</div>
		  	<div class="search-box">
		      	<form action="">
					<input type="text" name="search" placeholder="search"> 
			  	</form>
		  	</div>  
		 	<div class="social">
			 	<a href="#" target="_blank"><img src="<?=DEFAULT_URL?>img/facebook.png" alt="facebook" /></a>
			 	<a href="#" target="_blank"><img src="<?=DEFAULT_URL?>img/twitter.png" alt="twitter" /></a>
			 	<a href="#" target="_blank"><img src="<?=DEFAULT_URL?>img/you-tube.png" alt="you-tube" /></a>
			 	<a href="#" target="_blank"><img src="<?=DEFAULT_URL?>img/google.png" alt="google" /></a>
		 	</div>
		 	<div class="date-time"><p><?php echo date('D, d M Y H:i:s'); ?></p></div>
		 	<div class="clear"></div>
      	</div> <!-- top header end -->

      	<div class="logo-header"> <!-- logo header start --> 
 		  	<div class="adv1"><a href="#"><img src="<?=DEFAULT_URL?>img/adv1.jpg" alt="" /></a></div>
		  	<div class="logo"><a href="#"><img src="<?=DEFAULT_URL?>img/logo.png" alt="logo" /></a></div>
		  	<div class="adv2"><a href="#"><img src="<?=DEFAULT_URL?>img/adv2.jpg" alt="" /></a></div> 
		   	<div class="clear"></div>
	  	</div> <!-- logo header end -->
	  
      	<div class="menu-header">  <!-- menu-header start -->
	    	<nav class="navbar navbar-inverse">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		    		<span class="icon-bar"></span>
		    		<span class="icon-bar"></span>
		    		<span class="icon-bar"></span>
		    	</button>
			    <ul class="nav navbar-nav">
			    	<li class="active home-menu">
				  		<a href="<?=DEFAULT_URL?>"><img src="<?=DEFAULT_URL?>img/home-icon.png" alt="home" /></a>
				  	</li>
				  	<li><a href="#">New Zealand</a></li>
				  	<li><a href="#">India</a></li>
				  	<li><a href="#">Gujarat</a></li>
				  	<li><a href="#">World</a></li>
				  	<li><a href="#">Sports</a></li>
				  	<li><a href="#">Bollywood</a></li>
				  	<li><a href="#">Columns</a></li>
				  	<li><a href="#">Video</a></li>
				  	<li><a href="#">Epaper</a></li>
				  	<li><a href="#">Buy & Sell</a></li> 
				</ul> 
			</nav>
      	</div>  <!-- menu-header end -->	  
   	</div>
</header> <!-- header end -->