<?php
echo $this->element('frontheader');
?>
<section class="main sec-part1"> <!-- sec-part1 start -->
   	<div class="container"> 
	   	<div class="left-part"> <!-- left-part start -->
	     	<div class="col-md-9 sec-part1-left">
            	<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
					<div class="carousel-inner">
					  	<?php
						// for home page latest news slider
						if(count($latest_news_gallery_data) > 0){
							foreach ($latest_news_gallery_data as $latest_news_num => $latest_news_data) {
								if(!empty($latest_news_data['News']['title'])){
									if($latest_news_num == "0"){
										echo '<div class="item active news-b">';
									} else{
										echo '<div class="item news-b">';
									}
									echo '<a href="#"><h3>'.$latest_news_data['News']['title'].'</h3></a>';
									if(!empty($latest_news_data['News']['images'])){
										$latest_news_images = explode(',', $latest_news_data['News']['images']);
										$gallery_main = $latest_news_images[0];
									} else {
										$gallery_main = DEFAULT_URL.'img/new-default.png';
									}
									echo '<a href="#"><img src="'.$gallery_main.'" alt="'.$latest_news_data['News']['title'].'" /></a>';
									echo '</div>';
								}
							}
						} else {
							// dummy data
							?>
							<div class="item active news-b">
	  					      	<a href="#"><img src="<?=DEFAULT_URL?>img/pic1.jpg" alt="" /></a>
					          	<a href="#"><h3>નોટબંધી થયા પછી આમ જનતાએ ઘરમાં રોકડ રકમ...</h3></a>
						  	</div>
						  	<div class="item news-b">
	                          	<a href="#"><img src="<?=DEFAULT_URL?>img/pic2.jpg" alt="" /></a>
					          	<a href="#"><h3>નોટબંધી થયા પછી આમ જનતાએ ઘરમાં રોકડ રકમ...</h3></a>
						  	</div>
						   	<div class="item news-b">
	                          	<a href="#"><img src="<?=DEFAULT_URL?>img/pic3.jpg" alt="" /></a>
					          	<a href="#"><h3>નોટબંધી થયા પછી આમ જનતાએ ઘરમાં રોકડ રકમ...</h3></a>
						  	</div>
						   	<div class="item news-b">
	                          <a href="#"><img src="<?=DEFAULT_URL?>img/pic4.jpg" alt="" /></a>
					          <a href="#"><h3>નોટબંધી થયા પછી આમ જનતાએ ઘરમાં રોકડ રકમ...</h3></a>
						  	</div>
						  	<?php
							// dummy data
						}
						// for home page latest news slider
						?>
					</div>
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					   <span class="glyphicon-chevron-left"><img src="<?=DEFAULT_URL?>img/prev-arrow.png" alt="arrow"></span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
					    <span class="glyphicon-chevron-right"><img src="<?=DEFAULT_URL?>img/left-arrow.png" alt="arrow"></span>
					</a>
				</div>
         	</div>	
         	<div class="col-md-3 sec-part1-right">
             	<div class="logo-tv">
                	<img src="<?=DEFAULT_URL?>img/gujarat-tv.jpg" alt="gujarat-tv" />
             	</div> 
              	<?php
              	if(!empty($latest_news_4th_data)){
              		?>
              		<div class="news-b">
              			<?php
              			if(!empty($latest_news_4th_data['News']['images'])){
							$latest_news_images = explode(',', $latest_news_4th_data['News']['images']);
							$gallery_main = $latest_news_images[0];
						} else {
							$gallery_main = DEFAULT_URL.'img/new-default.png';
						}
						?>
	                	<a href="#"><img src="<?php echo $gallery_main; ?>" alt="<?php echo $latest_news_4th_data['News']['title']; ?>" /></a>
						<a href="#"><h3><?php echo $latest_news_4th_data['News']['title']; ?></h3></a>
	              	</div>	
	              	<?php
              	}
              	?>
              	<?php
              	if(!empty($latest_news_5th_data)){
              		?>
              		<div class="news-b">
              			<?php
              			if(!empty($latest_news_5th_data['News']['images'])){
							$latest_news5_images = explode(',', $latest_news_5th_data['News']['images']);
							$gallery_main_5 = $latest_news5_images[0];
						} else {
							$gallery_main_5 = DEFAULT_URL.'img/new-default.png';
						}
						?>
	                	<a href="#"><img src="<?php echo $gallery_main_5; ?>" alt="<?php echo $latest_news_5th_data['News']['title']; ?>" /></a>
						<a href="#"><h3><?php echo $latest_news_5th_data['News']['title']; ?></h3></a>
	              	</div>	
	              	<?php
              	}
              	?>
         	</div>	
		  	<div class="clear"></div>
          	<div class="adv4">
                <img src="<?=DEFAULT_URL?>img/adv4.jpg" alt="" />
          	</div>  		 
	   	</div> <!-- left-part end -->

	    <div class="right-part"> <!-- right-part start -->
	    	<!-- Simple Currency Rates Table START -->
			<link rel="stylesheet" type="text/css" href="//www.exchangerates.org.uk/widget/ER-SCRT2-css.php?w=180&nb=10&bdrc=E0E0E0&mbg=FFFFFF&fc=333333&tc=333333" media="screen" />
	        <div class="currency-rate-widget">
               	<!--<img src="<?=DEFAULT_URL?>img/currency-rate.jpg" alt="" />-->
				<!--<div id="erscrt2">-->
					<div id="erscrt2-widget" style="width:264px;"></div>
					<div id="erscrt2-infolink"></div>
					<script type="text/javascript">	
					var tz = '5.5';
					var w = '180';
					var mc = 'NZD';
					var nb = '10';
					var c1 = 'USD';
					var c2 = 'EUR';
					var c3 = 'AUD';
					var c4 = 'JPY';
					var c5 = 'INR';
					var c6 = 'CAD';
					var c7 = 'ZAR';
					var c8 = 'BYR';
					var c9 = 'SGD';
					var c10 = 'CNY';
					var t = 'Live Exchange Rates';
					var tc = '333333';
					var bdrc = 'E0E0E0';
					var mbg = 'FFFFFF';
					var fc = '333333';

					var ccHost = (("https:" == document.location.protocol) ? "https://www." : "http://www.");
					document.write(unescape("%3Cscript src='" + ccHost + "exchangerates.org.uk/widget/ER-SCRT2-1.php' type='text/javascript'%3E%3C/script%3E"));
					</script>
				<!--</div>-->
				<!-- Simple Currency Rates Table END -->
            </div> 
			<div class="adv3">
               	<img src="<?=DEFAULT_URL?>img/adv3.jpg" alt="" />
            </div> 
	   	</div> <!-- right-part end -->  
	    
	    <div class="clear"></div>
   	</div>
</section> <!-- sec-part1 end -->


<?php
if(count($latest_newzealand_homepage_data) > 0){
?>
<section class="main sec-part2"> <!-- sec-part2 start -->
   	<div class="container"> 
        <h2 class="main-title green">New Zealand</h2>
		<span class="green-border"></span>
	   	<div class="clear"></div>
	   	<?php
	   	foreach ($latest_newzealand_homepage_data as $latest_newszealand_num => $latest_newszealand_data) {
	   	?>
	   	<?php
	   		if($latest_newszealand_num == 0){
		   		echo '<div class="left-part"> <!-- left-part start -->';
		   	}
		   	if($latest_newszealand_num >= 0 && $latest_newszealand_num <= 5){
		   	?>
	       	<div class="grid-listing grid-listing-left">
	       		<?php
      			if(!empty($latest_newszealand_data['News']['images'])){
					$latest_newsze_images = explode(',', $latest_newszealand_data['News']['images']);
					$gallery_main_nz = $latest_newsze_images[0];
				} else {
					$gallery_main_nz = DEFAULT_URL.'img/new-default.png';
				}
				?>
		        <a href="#"><img src="<?=$gallery_main_nz?>" alt="<?php echo $latest_newszealand_data['News']['title']; ?>" /></a>
				<a href="#"><h3><?php echo mb_substr($latest_newszealand_data['News']['title'], 0, 80); ?></h3></a>
		   	</div>
		   	<?php
		   	}
		   	if($latest_newszealand_num == 6){
		   	//var_dump($latest_newszealand_num);
		   	?>
           	<div class="clear"></div>
	   	</div> <!-- left-part end -->
	   	<div class="right-part"> <!-- right-part start -->
	   		<div class="news-b">
	   			<?php
      			if(!empty($latest_newszealand_data['News']['images'])){
					$latest_newsze_images = explode(',', $latest_newszealand_data['News']['images']);
					$gallery_main_nz = $latest_newsze_images[0];
				} else {
					$gallery_main_nz = DEFAULT_URL.'img/new-default.png';
				}
				?>
	   			<a href="#"><img src="<?=$gallery_main_nz?>" alt="<?php echo $latest_newszealand_data['News']['title']; ?>" /></a>
				<a href="#"><h3><?php echo mb_substr($latest_newszealand_data['News']['title'], 0, 80); ?></h3></a>
            </div>
	   	<?php } ?>	
	   	<?php
		   	if($latest_newszealand_num == 6){
		   	?>
	   	</div> <!-- right-part end -->  
	    <div class="clear"></div>
	    <?php
	    	}
		}
		?>
	</div>
</section> <!-- sec-part2 end -->
<?php } ?>

<?php
if(count($latest_australlia_homepage_data) > 0){

$last_latest_aus_num = count($latest_australlia_homepage_data)-1;
?>
<section class="main sec-part3"> <!-- sec-part3 start -->
   	<div class="container">  
	   	<div class="left-part"> <!-- left-part start -->
	      	<h2 class="main-title dark-blue">Australia</h2>
		  	<span class="dark-blue-border"></span>
	      	<div class="clear"></div>
	       	<?php
		   	foreach ($latest_australlia_homepage_data as $latest_aus_num => $latest_aus_data) {
		   	?>
	       		<?php if($latest_aus_num >= 0 && $latest_aus_num <= 4){ ?>
			       	<?php if($latest_aus_num == 0){ ?>
			       	<div class="col-md-6">
				     	<div class="news-b">
				     		<?php
			      			if(!empty($latest_aus_data['News']['images'])){
								$latest_aus_images = explode(',', $latest_aus_data['News']['images']);
								$gallery_main_aus = $latest_aus_images[0];
							} else {
								$gallery_main_aus = DEFAULT_URL.'img/new-default.png';
							}
							?>
		                	<a href="#"><img src="<?=$gallery_main_aus?>" alt="" /></a>
							<a href="#"><h3><?php echo mb_substr($latest_aus_data['News']['title'], 0, 80); ?></h3></a>
		              	</div>
		              	<?php } ?>
					  	<?php if($latest_aus_num == 1){ ?>
					  	<ul class="list">
					  		<?php } ?>
					  		<?php if($latest_aus_num >= 1 && $latest_aus_num <= 4){ ?>
					     	<li><a href="#"><?php echo mb_substr($latest_aus_data['News']['title'], 0, 80); ?></a></li>
					     	<?php } ?>
					  	<?php if($latest_aus_num == 4){ ?>
					  	</ul>
					  	<?php } ?>
				   	<?php if($latest_aus_num == 4){ ?>
				   	</div>
				   	<?php } ?>
			   	<?php } ?>
			   	<?php if($latest_aus_num >= 5 && $latest_aus_num <= $last_latest_aus_num){ ?>	
	           		<?php if($latest_aus_num == 5){ ?>
			       	<div class="col-md-6">
				     	<div class="news-b">
				     		<?php
			      			if(!empty($latest_aus_data['News']['images'])){
								$latest_aus_images = explode(',', $latest_aus_data['News']['images']);
								$gallery_main_aus = $latest_aus_images[0];
							} else {
								$gallery_main_aus = DEFAULT_URL.'img/new-default.png';
							}
							?>
		                	<a href="#"><img src="<?=$gallery_main_aus?>" alt="" /></a>
							<a href="#"><h3><?php echo mb_substr($latest_aus_data['News']['title'], 0, 80); ?></h3></a>
		              	</div>
		              	<?php } ?>
					  	<?php if($latest_aus_num == 6){ ?>
					  	<ul class="list">
					  		<?php } ?>
					  		<?php if($latest_aus_num >= 6 && $latest_aus_num <= $last_latest_aus_num){ ?>
					     	<li><a href="#"><?php echo mb_substr($latest_aus_data['News']['title'], 0, 80); ?></a></li>
					     	<?php } ?>
					  	<?php if($latest_aus_num == $last_latest_aus_num){ ?>
					  	</ul>
					  	<?php } ?>
				   	<?php if($latest_aus_num == $last_latest_aus_num){ ?>
				   	</div>
				   	<?php } ?>
				<?php } ?>   	
		   	<?php } ?>		   
           	<div class="clear"></div>
	   	</div> <!-- left-part end -->
	   	<div class="right-part"> <!-- right-part start -->
         	<h2 class="main-title violet">World</h2>
	     	<span class="violet-border"></span>
         	<div class="clear"></div> 
         	<?php
         	if(count($latest_world_homepage_data) > 0){
         	
         		foreach ($latest_world_homepage_data as $latest_world_key => $latest_world_data) {
         			# code...
         			if(!empty($latest_world_data['News']['images'])){
						$latest_world_images = explode(',', $latest_world_data['News']['images']);
						$gallery_main_world = $latest_world_images[0];
					} else {
						$gallery_main_world = DEFAULT_URL.'img/new-default.png';
					}
         			?>
         			<div class="grid-listing">
						<a href="#"><img src="<?=$gallery_main_world?>" alt="<?php echo $latest_world_data['News']['title']; ?>" /></a>
						<a href="#"><h3><?php echo mb_substr($latest_world_data['News']['title'], 0, 80); ?></h3></a>
				   	</div>
         			<?php
         		}
         	}
           	?>
           	<div class="clear"></div>	
	   	</div> <!-- right-part end -->  
	    <div class="clear"></div>
	</div>
</section> <!-- sec-part3 end -->
<?php } ?>

<?php
if(count($latest_gujarat_homepage_data) > 0){

$last_latest_guj_num = count($latest_gujarat_homepage_data)-1;
?>
<section class="main sec-part4"> <!-- sec-part4 start -->
   	<div class="container">  
	   	<div class="left-part"> <!-- left-part start -->
	      	<h2 class="main-title black">Gujarat</h2>
		  	<span class="black-border"></span>
	      	<div class="clear"></div>
	       	<?php
	       	foreach ($latest_gujarat_homepage_data as $latest_gujarat_key => $latest_gujarat_data) {

	       	if(!empty($latest_gujarat_data['News']['images'])){
				$latest_guj_images = explode(',', $latest_gujarat_data['News']['images']);
				$gallery_main_guj = $latest_guj_images[0];
			} else {
				$gallery_main_guj = DEFAULT_URL.'img/new-default.png';
			}
	       	?>
		       	<?php if($latest_gujarat_key >= 0 && $latest_gujarat_key <= 3) { ?>
		       		<?php if($latest_gujarat_key == 0) { ?>
		       		<div class="col-md-6 gray-bg">
		       		<?php } ?>
				   		<div class="grid-listing">
				        	<a href="#"><img src="<?=$gallery_main_guj?>" alt="<?=$latest_gujarat_data['News']['title']?>" /></a>
							<a href="#"><h3><?php echo mb_substr($latest_gujarat_data['News']['title'], 0, 80); ?></h3></a>
				   		</div> 
			   		<?php if($latest_gujarat_key == 3) { ?>
			   		</div>
			   		<?php } ?>
			   	<?php } ?>

			   	<?php if($latest_gujarat_key >= 4 && $latest_gujarat_key <= $last_latest_guj_num) { ?>
			   		<?php if($latest_gujarat_key == 4) { ?>
			   		<div class="col-md-6">
			   		<div id="gujmyCarousel" class="carousel slide" data-ride="carousel"> 
						<div class="carousel-inner">
			   		<?php } ?>
				  	<div class="item <?php if($latest_gujarat_key == 4) { ?>active<?php } ?> news-b">
					      	<a href="#"><img src="<?=$gallery_main_guj?>" alt="<?=$latest_gujarat_data['News']['title']?>" /></a>
			          	<a href="#"><h3><?php echo mb_substr($latest_gujarat_data['News']['title'], 0, 80); ?></h3></a>
				  	</div>
					<?php if($latest_gujarat_key == $last_latest_guj_num) { ?>
						</div>
						<a class="left carousel-control" href="#gujmyCarousel" data-slide="prev">
						   <span class="glyphicon-chevron-left"><img src="<?=DEFAULT_URL?>img/prev-arrow.png" alt="arrow"></span>
						</a>
						<a class="right carousel-control" href="#gujmyCarousel" data-slide="next">
						    <span class="glyphicon-chevron-right"><img src="<?=DEFAULT_URL?>img/left-arrow.png" alt="arrow"></span>
						</a>
					</div>
					</div>
					<?php } ?>
				<?php } ?>
			<?php } ?>		   
           	<div class="clear"></div>
	   	</div> <!-- left-part end -->
	   	<div class="right-part"> <!-- right-part start -->
	        <div class="adv5">
	        	<img src="<?=DEFAULT_URL?>img/adv5.jpg" alt="" />
	        </div>
	    </div> <!-- right-part end -->  
	    <div class="clear"></div>
	</div>
</section> <!-- sec-part4 end -->
<?php } ?>


<section class="main sec-part5"> <!-- sec-part5 start -->
   	<div class="container">  
	   	<div class="left-part sports"> <!-- left-part start -->
	      	<h2 class="main-title pink">Sports</h2>
		  	<span class="pink-border"></span>
	      	<div class="clear"></div>
	      	<?php
			if(count($latest_sports_homepage_data) > 0){
			
			$last_latest_sports_num = count($latest_sports_homepage_data)-1;

	       		foreach ($latest_sports_homepage_data as $latest_sports_key => $latest_sports_data) {
	       			if(!empty($latest_sports_data['News']['images'])){
						$latest_sports_images = explode(',', $latest_sports_data['News']['images']);
						$gallery_main_sports = $latest_sports_images[0];
					} else {
						$gallery_main_sports = DEFAULT_URL.'img/new-default.png';
					}
				?>
		      	<div class="<?php if($latest_sports_key == 0) { ?>first-news-b <?php } ?> news-b">
		      		<a href="#"><img src="<?=$gallery_main_sports?>" alt="$latest_sports_data['News']['title']" /></a>
					<a href="#"><h3><?php echo mb_substr($latest_sports_data['News']['title'], 0, 80); ?></h3></a>
				</div>
	            <?php
	        	}
            }
            ?>  			  
           	<div class="clear"></div>
	   </div> <!-- left-part end -->
	   <div class="right-part"> <!-- right-part start -->
	        <h2 class="main-title yellow">Videos</h2>
		    <span class="yellow-border"></span>
	        <div class="clear"></div> 
	        <div id="videomyCarousel" class="carousel slide" data-ride="carousel">
	        	<div class="carousel-inner">
	        		<div class="item active news-b">
	        			<a href="#"><img src="<?=DEFAULT_URL?>img/pic1.jpg" alt="" /></a>
	        			<a href="#"><h3>નોટબંધી થયા પછી આમ જનતાએ ઘરમાં રોકડ રકમ...</h3></a>
	        		</div>
	        		<div class="item news-b">
	        			<a href="#"><img src="<?=DEFAULT_URL?>img/pic2.jpg" alt="" /></a>
				        <a href="#"><h3>નોટબંધી થયા પછી આમ જનતાએ ઘરમાં રોકડ રકમ...</h3></a>
				    </div>
					<div class="item news-b">
                        <a href="#"><img src="<?=DEFAULT_URL?>img/pic3.jpg" alt="" /></a>
				        <a href="#"><h3>નોટબંધી થયા પછી આમ જનતાએ ઘરમાં રોકડ રકમ...</h3></a>
					</div>
					<div class="item news-b">
                        <a href="#"><img src="<?=DEFAULT_URL?>img/pic4.jpg" alt="" /></a>
				        <a href="#"><h3>નોટબંધી થયા પછી આમ જનતાએ ઘરમાં રોકડ રકમ...</h3></a>
					</div>
				</div>

				<a class="left carousel-control" href="#videomyCarousel" data-slide="prev">
					<span class="glyphicon-chevron-left"><img src="<?=DEFAULT_URL?>img/prev-arrow.png" alt="arrow"></span>
				</a>
				<a class="right carousel-control" href="#videomyCarousel" data-slide="next">
					<span class="glyphicon-chevron-right"><img src="<?=DEFAULT_URL?>img/left-arrow.png" alt="arrow"></span>
				</a>
			</div>
           	<div class="clear"></div>	
	   	</div> <!-- right-part end -->  
	    <div class="clear"></div>
	</div>
</section> <!-- sec-part5 end -->

<section class="main sec-part6"> <!-- sec-part6 start -->
   	<div class="container">  
	   	<div class="left-part sports"> <!-- left-part start -->
	      	<?php
			if(count($latest_bollywood_homepage_data) > 0){
			$last_bollywood_sports_num = count($latest_bollywood_homepage_data)-1;
			?>
	      	<h2 class="main-title red">Bollywood</h2>
		  	<span class="red-border"></span>
	      	<div class="clear"></div>
	      	<div id="bollymyCarousel" class="carousel slide" data-ride="carousel">
	      		<div class="carousel-inner">
	      			<?php
	      			foreach ($latest_bollywood_homepage_data as $latest_bollywood_key => $latest_bollywood_data) {

	      			if(!empty($latest_bollywood_data['News']['images'])){
						$latest_bollywood_images = explode(',', $latest_bollywood_data['News']['images']);
						$gallery_main_bollywood = $latest_bollywood_images[0];
					} else {
						$gallery_main_bollywood = DEFAULT_URL.'img/new-default.png';
					}
	      			?>
	      			<div class="item <?php if($latest_bollywood_key == 0){ ?>active<?php } ?> news-b">
	      				<a href="#"><img src="<?=$gallery_main_bollywood?>" alt="<?=$latest_bollywood_data['News']['title']?>" /></a>
	      				<a href="#"><h3><?php echo mb_substr($latest_bollywood_data['News']['title'], 0, 80); ?></h3></a>
	      			</div>
	      			<?php
	      			}
	      			?>
				</div>
				<a class="left carousel-control" href="#bollymyCarousel" data-slide="prev">
					<span class="glyphicon-chevron-left"><img src="<?=DEFAULT_URL?>img/prev-arrow.png" alt="arrow"></span>
				</a>
				<a class="right carousel-control" href="#bollymyCarousel" data-slide="next">
					<span class="glyphicon-chevron-right"><img src="<?=DEFAULT_URL?>img/left-arrow.png" alt="arrow"></span>
				</a>
			</div>		  
           	<div class="clear"></div>
           	<?php } ?>
           	<?php
			if(count($latest_columns_homepage_data) > 0){
			$last_columns_num = count($latest_columns_homepage_data)-1;
			?>
		   	<div class="column"> <!-- column start -->
			  	<h2 class="main-title magenta-blue">Writers Column </h2>
			  	<span class="magenta-blue-border"></span>
			  	<div class="clear"></div> 
			    <div class="row">
					<?php
	      			foreach ($latest_columns_homepage_data as $latest_columns_key => $latest_columns_data) {

	      			if(!empty($latest_columns_data['News']['images'])){
						$latest_columns_images = explode(',', $latest_columns_data['News']['images']);
						$gallery_main_columns = $latest_columns_images[0];
					} else {
						$gallery_main_columns = DEFAULT_URL.'img/new-default.png';
					}
	      			?>
					<div class="column-b">
						<a href="#"><img src="<?=$gallery_main_columns?>" alt="<?=$latest_columns_data['News']['title']?>" /></a>
						<a href="#"><h3><?php echo mb_substr($latest_columns_data['News']['title'], 0, 80); ?></h3></a>
					</div>
					<?php
					}
					?>	 
				</div>	    
			   	<div class="clear"></div>
	      	</div> <!-- column end -->
	      	<?php } ?>
	   	</div> <!-- left-part end -->
	  	<div class="right-part"> <!-- right-part start -->
	        <?php
			if(count($latest_india_homepage_data) > 0){
			$last_india_num = count($latest_india_homepage_data)-1;
			?>
	        <h2 class="main-title violet">India</h2>
		    <span class="violet-border"></span>
	        <div class="clear"></div> 
	          	<div class="gray-bg">
				   	<?php
	      			foreach ($latest_india_homepage_data as $latest_india_key => $latest_india_data) {

	      			if(!empty($latest_india_data['News']['images'])){
						$latest_india_images = explode(',', $latest_india_data['News']['images']);
						$gallery_main_india = $latest_india_images[0];
					} else {
						$gallery_main_india = DEFAULT_URL.'img/new-default.png';
					}
	      			?>
				   	<div class="grid-listing">
						<a href="#"><img src="<?=$gallery_main_india?>" alt="" /></a>
						<a href="#"><h3><?php echo mb_substr($latest_india_data['News']['title'], 0, 80); ?></h3></a>
				   	</div>
				   	<?php
				   	}
				   	?> 
		      	</div>
           	<div class="clear"></div>
           	<?php } ?>	
	   	</div> <!-- right-part end -->  
	    <div class="clear"></div>
	</div>
</section> <!-- sec-part6 end -->

<?php
echo $this->element('frontfooter');
?>