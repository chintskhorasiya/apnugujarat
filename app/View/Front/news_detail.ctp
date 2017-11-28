<?php
echo $this->element('frontheader');
?>
<div class="breadcrumb">
	<div class="container">
		<section class="article-breadcrumb">
			<?php
			if(!empty($category_title)){
				$category_breadcrumb = '<span class="br-arrow">» </span>'.$category_title;	
			} else {
				$category_breadcrumb = '';
			}
			?>
			<a href="<?=DEFAULT_URL?>" title="Home"> Home</a><?=$category_breadcrumb;?><span class="br-arrow">» </span><?php echo $news_page_title; ?>
		</section>
	</div>
</div>
<section class="main details-listing-part"> <!-- sec-part1 start -->
   <div class="container"> 
	   <div class="left-part"> <!-- left-part start --> 
            <?php
            //echo '<pre>';
            //print_r($news_page_images);
            $imgs_arr = explode(',', $news_page_images);
            //print_r($news_page_videos);
            //echo '</pre>';
            if(count($imgs_arr) > 0){
            ?>
            <div id="innermyCarousel" class="carousel slide" data-ride="carousel">
            	<div class="carousel-inner">
            		<?php
            		foreach ($imgs_arr as $imgkey => $gimg) {
            			?>
            			<div class="item <?php if($imgkey == 0){ echo 'active'; } ?>">
	            			<img src="<?=$gimg?>" alt="" />
	            		</div>
	            		<?php
            		}
            		?>
            	</div>
            	<a class="left carousel-control" href="#innermyCarousel" data-slide="prev">
            		<span class="glyphicon-chevron-left"><img src="<?=DEFAULT_URL?>img/prev-arrow.png" alt="arrow"></span>
            	</a>
            	<a class="right carousel-control" href="#innermyCarousel" data-slide="next">
            		<span class="glyphicon-chevron-right"><img src="<?=DEFAULT_URL?>img/left-arrow.png" alt="arrow"></span>
            	</a>  
			</div>
			<?php } ?>
			<div class="inner-list-dec">
			    <p class="dba_pdate">Last Modified - <?php echo $news_page_modified; //date('M d, Y, g:i A', $news_page_modified); ?></p>
				<h1><?=$news_page_title?></h1>
				<?php echo $news_page_content; ?>
			</div>	
           	<div class="adv6">
                <img src="<?=DEFAULT_URL?>img/adv6.jpg" alt="" />
           	</div>
           	<div class="clear"></div>

           	<div class="col-md-12 cat-list-grid">
           		<h2 class="main-title yellow">More News</h2>
           		<span class="yellow-border"></span>
           		<div class="clear"></div>
           		<?php
           		if(count($news_page_morenews) > 0){
           		
           			foreach ($news_page_morenews as $morenews_key => $morenews_data) {
           				if(!empty($morenews_data['News']['images'])){
							$morenews_images = explode(',', $morenews_data['News']['images']);
							$morenews_image = $morenews_images[0];
						} else {
							$morenews_image = DEFAULT_URL.'img/new-default.png';
						}
           			?>
           				<div class="grid-listing grid-listing-left">
           					<a href="<?=DEFAULT_FRONT_NEWS_DETAIL_URL.$morenews_data['News']['cat_slug'].'/'.$morenews_data['News']['slug']?>"><img src="<?=$morenews_image?>" alt="" /></a>
           					<a href="<?=DEFAULT_FRONT_NEWS_DETAIL_URL.$morenews_data['News']['cat_slug'].'/'.$morenews_data['News']['slug']?>"><h3><?php echo mb_substr($morenews_data['News']['title'], 0, 80); ?></h3></a>
           				</div>
           			<?php
           			}
           		}
           		?>
			   	<div class="clear"></div>
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
			 
            <h2 class="main-title violet">Gujarat</h2>
		    <span class="violet-border"></span>
	        <div class="clear"></div>  
			<?php
       		if(count($news_page_sidebarupr) > 0){
       		
       			foreach ($news_page_sidebarupr as $sidebarupr_key => $sidebarupr_data) {
       				if(!empty($sidebarupr_data['News']['images'])){
						$sidebarupr_images = explode(',', $sidebarupr_data['News']['images']);
						$sidebarupr_image = $sidebarupr_images[0];
					} else {
						$sidebarupr_image = DEFAULT_URL.'img/new-default.png';
					}
       			?>
       				<div class="grid-listing">
       					<a href="<?=DEFAULT_FRONT_NEWS_DETAIL_URL.$sidebarupr_data['News']['cat_slug'].'/'.$sidebarupr_data['News']['slug']?>"><img src="<?=$sidebarupr_image?>" alt="" /></a>
       					<a href="<?=DEFAULT_FRONT_NEWS_DETAIL_URL.$sidebarupr_data['News']['cat_slug'].'/'.$sidebarupr_data['News']['slug']?>"><h3><?php echo mb_substr($sidebarupr_data['News']['title'], 0, 80); ?></h3></a>
       				</div>
       			<?php
       			}
       		}
       		?>
         	<div class="adv5">
            	<img src="<?=DEFAULT_URL?>img/adv5.jpg" alt="" />
         	</div>	
            <br/>
            <h2 class="main-title violet">India</h2>
		    <span class="violet-border"></span>
	        <div class="clear"></div> 
	        <div class="gray-bg1">
			<?php
       		if(count($news_page_sidebardown) > 0){
       		
       			foreach ($news_page_sidebardown as $sidebardown_key => $sidebardown_data) {
       				if(!empty($sidebardown_data['News']['images'])){
						$sidebardown_images = explode(',', $sidebardown_data['News']['images']);
						$sidebardown_image = $sidebardown_images[0];
					} else {
						$sidebardown_image = DEFAULT_URL.'img/new-default.png';
					}
       			?>
       				<div class="grid-listing">
       					<a href="<?=DEFAULT_FRONT_NEWS_DETAIL_URL.$sidebardown_data['News']['cat_slug'].'/'.$sidebardown_data['News']['slug']?>"><img src="<?=$sidebardown_image?>" alt="" /></a>
       					<a href="<?=DEFAULT_FRONT_NEWS_DETAIL_URL.$sidebardown_data['News']['cat_slug'].'/'.$sidebardown_data['News']['slug']?>"><h3><?php echo mb_substr($sidebardown_data['News']['title'], 0, 80); ?></h3></a>
       				</div>
       			<?php
       			}
       		}
       		?>		   
		    </div>			 
	   	</div> <!-- right-part end -->  
	    <div class="clear"></div>
   </div>
</section> <!-- sec-part1 end -->
<?php
echo $this->element('frontfooter');
?>