<?php
echo $this->element('frontheader');
?>
<div class="breadcrumb">
	<div class="container">
		<section class="article-breadcrumb">
			<?php
			if(!empty($category_title)){
				//$category_breadcrumb = '<span class="br-arrow">» </span>'.$category_title;
				$category_breadcrumb = '<span class="br-arrow">» </span><a href="'.DEFAULT_URL.'news/'.$this->Common->get_cat_slug($category_id).'">'.$category_title.'</a>';	
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
            $imgs_arr = array();
            $videos_arr = array();

            if(!empty($news_page_images)) $imgs_arr = explode(',', $news_page_images);
            //print_r($imgs_arr);
            if(!empty($news_page_videos)) $videos_arr = explode(',', $news_page_videos);
            //print_r($videos_arr);

            if(count($imgs_arr) > 0 && count($videos_arr) > 0){
            	$media_arr = array_merge($imgs_arr, $videos_arr);
            } elseif(count($imgs_arr) > 0) {
            	$media_arr = $imgs_arr;
            } elseif(count($videos_arr) > 0) {
            	$media_arr = $videos_arr;
            }
            //print_r($media_arr);
            //echo '</pre>';
            if(count($media_arr) > 0){
            ?>
            <style>
            .owl-video-wrapper .owl-video-tn{min-height: 481px !important;}
            </style>
            <div class="owl-carousel owl-theme">
            	<!--<ul class="slides">-->
            		<?php
            		$youtube_regex_pattern = "/(youtube.com|youtu.be)\/(watch)?(\?v=)?(\S+)?/";
					$match;

					foreach ($media_arr as $imgkey => $gimg) {
            			?>
            			<div class="item">
	            			<?php
	            			if(preg_match($youtube_regex_pattern, $gimg, $match)){
							    //echo "Youtube video id is: ".$match[4];
							    /*
							    ?>
							    <div class="youtube" id="<?=$match[4];?>" style="width: 100%; height: 447px;background-size: 100%;">
								</div>
							    <?php
							    */
							    ?>
							    <a class="owl-video" href="https://www.youtube.com/watch?v=<?=$match[4];?>"></a>
							    <?php
							}else{
							    ?><img src="<?=$gimg?>" alt="" /><?php
							}
	            			?>
	            		</div>
	            		<?php
            		}
            		?>
            	<!--</ul> -->
			</div>
			<?php } ?>
			<div class="inner-list-dec">
			    <p class="dba_pdate">Last Modified - <?php echo $news_page_modified; //date('M d, Y, g:i A', $news_page_modified); ?></p>
				<h1><?=$news_page_title?></h1>
				<div><?php echo $news_page_content; ?></div>
			</div>	
           	<?php
 		  	if($ads_detail_page_latest_bottom_data)
 		  	{
 		  		if(!empty($ads_detail_page_latest_bottom_data['Advertise']['source'])){
 		  		?>
 		  		<div class="adv6"><a target="_blank" href="<?=$ads_detail_page_latest_bottom_data['Advertise']['link']?>"><img src="<?=$ads_detail_page_latest_bottom_data['Advertise']['source']?>" alt="<?=$ads_detail_page_latest_bottom_data['Advertise']['title']?>" /></a></div>
 		  		<?php
 		  		}
 		  	}
 		  	?>
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
			<link rel="stylesheet" type="text/css" href="//www.exchangerates.org.uk/widget/ER-SCRT2-css.php?w=180&nb=5&bdrc=E0E0E0&mbg=FFFFFF&fc=333333&tc=333333" media="screen" />
	        <div class="currency-rate-widget">
               	<!--<img src="<?=DEFAULT_URL?>img/currency-rate.jpg" alt="" />-->
				<!--<div id="erscrt2">-->
					<div id="erscrt2-widget" style="width:264px;"></div>
					<div id="erscrt2-infolink"></div>
					<script type="text/javascript">	
					var tz = '5.5';
					var w = '180';
					var mc = 'NZD';
					var nb = '5';
					var c1 = 'USD';
					var c2 = 'EUR';
					var c3 = 'AUD';
					var c4 = 'GBP';
					var c5 = 'INR';
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
            <div class="cric-widget">
            	<script>
            	app="www.cricwaves.com"; mo="Z_W"; tor =""; mtype ="";  wi="{{wi}}"; Width="320px"; Height="172px";  co ="aus";
            	</script>
            	<script type="text/javascript" src="http://www.cricwaves.com/cricket/widgets/script/scoreWidgets.js"></script>
            </div> 
			 
            <a href="<?=DEFAULT_URL?>news/gujarat"><h2 class="main-title violet">Gujarat</h2></a>
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
         	<?php
 		  	if($ads_detail_page_rightbar_data)
 		  	{
 		  		if(!empty($ads_detail_page_rightbar_data['Advertise']['source'])){
 		  		?>
 		  		<div class="adv5"><a target="_blank" href="<?=$ads_detail_page_rightbar_data['Advertise']['link']?>"><img src="<?=$ads_detail_page_rightbar_data['Advertise']['source']?>" alt="<?=$ads_detail_page_rightbar_data['Advertise']['title']?>" /></a></div>
 		  		<?php
 		  		}
 		  	}
 		  	?> 		
            <br/>
            <a href="<?=DEFAULT_URL?>news/india"><h2 class="main-title violet">India</h2></a>
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
<script type="text/javascript">
	/*$(window).load(function(){
		$('.flexslider').flexslider({
			animation: "slide",
			pausePlay: true,
			pauseText: "",
			playText: "Play Slideshow",
			video: false,
			start: function(slider){
				$('body').removeClass('loading');
			}
		});
	});*/
	$(document).ready(function() {
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        margin: 10,
        nav: true,
        loop: true,
        //autoHeight:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        video:true,
        lazyLoad:true,
        center:true,
        dots: false,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
      })
    });
</script>
<?php
echo $this->element('frontfooter');
?>