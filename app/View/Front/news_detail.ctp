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
            .youtube .play {
			    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAERklEQVR4nOWbTWhcVRTHb1IJVoxGtNCNdal2JYJReC6GWuO83PM/59yUS3FRFARdFlwYP1CfiojQWt36sRCUurRIdVFXIn41lAoVdRGrG1M01YpKrWjiYmaSl8ybZJL3cd+YA//NLObd3++eO8x79z5jSq5Gw+8kov0AP8vMR5l1BtBZQM4B8ks75wCdZdYZZj5qLZ4hov2Nht9Z9vhKKSIaB/gI4M4w62KeAO6Mte4lYOq20FxrlqqOibhHmeWbvNC9ZfDX1mLae391aN6limO/gwgvAPJbWeAZuSDingdwXTBw7/0IsyaA/Fkh+KqOkD+YNfHej1QKD+y7iVlOhgLvFqFfNJvNGyuBJ+KDAF8MDd0tgS8y64OlgSdJMsysL4cG7SOHkyQZLhTee7+d2R2rAVy/S+Jd7/32ouBHAP4gNNRGQyTHc/84NhqNywZp5rvjjnnvt21aABFeCQ+RLwAf2hQ8s7sv9OCLk6AHNgQvIrvbfzKCD76g/O6cu7lf/iER/aQGgy448pExZmhdegAPhR9sObFWH1gT3lp7DaA/5bkIgJhZPgsNmz02novj+KqeApj1ubwXWe4kdyeznAgNvTpE/HQmvKqOMeuFogTUVQSRno+iaLRLAJF7uIgL9O4ubgL8aWgB7S44mNX+35YpICUiAvS9sBLkq1WzT+NFffl6AuoiApi6NT37h6sWkBIRZGkQ8YtLgyji6e1mBYTqCEBPG2Naz+0BWQgtoGoRgCzEsd9hAN1X5BfnFZASUfrSAFQNsyZ1FJASUVpHiLinDJG8U2cBZYogkrcNs5waBAGdstbeU9zdqpw0gPwwSAI6VUxHyFlDpOcHUUBBIuYNs14aZAE5RVwyzPr3/0EAEY0TyfGNjBWQvwZ +CTSbehfAH29mrID8bET0+0EUkAd8WYDOmqJ3ecsG30yr9wqRfm6Y+a1BEFDEjHfHvWmY9ck6CygHvBVr8Xhtb4ZE5HZA3y8DvBNA1TjnrmXWf+sioMwZX5V/VHXMGGMMoKdDCxCRvRWBdzKzdHEO+EisilbPyopHYqp6S9UCAsz4iojI7hUDAtyXVQgIDd6KnOoaWNkbI6FaPSuZGyMArsi7MZoloB4zviI/Nhr3X95jltwTRQmoIfgisy5ai+me67OI7fE4nrqjrqfK1t0eby0FPRB6oGVlchL3rgnfrq19RKbVBdhV9IOSwJmfmJi4vi/4ThERitwyCxVAFqydshuCX5awhQ9KtmuIWd8IDZED/nXT77rvVVv6sHRKwjYi91poqP7Dr+Y6JJ1VSZIMA3wkPNy6bX+o8Bcm0sXMdwM8Fxo0A3xORPaWBp6uPXsmbxCRD0NDL0dOANhVCXy6iAjMcjbcrMt3RITKwdMVRdFo+y5yvkL4eWZ+zHt/ZVD4dEVRNGotpst+dZZZH8k86lqn2pIvT/eqrNfn2xuyqYPZ8mv7s8pfn/8Pybm4TIjanscAAAAASUVORK5CYII=") no-repeat center center;
			    background-size: 64px 64px;
			    /*position: absolute;*/
			    height: 100%;
			    width: 100%;
			    opacity: .8;
			    filter: alpha(opacity=80);
			    transition: all 0.2s ease-out;
			}

			.youtube .play:hover {
			    opacity: 1;
			    filter: alpha(opacity=100);
			}
			.flex-pauseplay .flex-pause{visibility:hidden;}
			.flex-pauseplay .flex-play{visibility:visible;}
            </style>
            <!-- <div class="youtube"
			     id="fsrJWUVoXeM" 
			     style="width: 500px; height: 281px;">
			</div> -->

			<!-- <div class="youtube" 
			     id="lR4tJr7sMPM" 
			     data-params="modestbranding=1&showinfo=0&controls=0&vq=hd720"
			     style="width: 640px; height: 360px;">
			</div> -->
			<script type="text/javascript">
				'use strict';
				function r(f){/in/.test(document.readyState)?setTimeout('r('+f+')',9):f()}
				r(function(){
				    $('.ytp-play-button').click(function(){
				    	alert('pause');
				    })
				    if (!document.getElementsByClassName) {
				        // IE8 support
				        var getElementsByClassName = function(node, classname) {
				            var a = [];
				            var re = new RegExp('(^| )'+classname+'( |$)');
				            var els = node.getElementsByTagName("*");
				            for(var i=0,j=els.length; i<j; i++)
				                if(re.test(els[i].className))a.push(els[i]);
				            return a;
				        }
				        var videos = getElementsByClassName(document.body,"youtube");
				    } else {
				        var videos = document.getElementsByClassName("youtube");
				    }

				    var nb_videos = videos.length;
				    for (var i=0; i<nb_videos; i++) {
				        // Based on the YouTube ID, we can easily find the thumbnail image
				        videos[i].style.backgroundImage = 'url(http://i.ytimg.com/vi/' + videos[i].id + '/hqdefault.jpg)';

				        // Overlay the Play icon to make it look like a video player
				        var play = document.createElement("div");
				        play.setAttribute("class","play");
				        videos[i].appendChild(play);

				        videos[i].onclick = function() {
				            // Create an iFrame with autoplay set to true
				            $('.flex-pause').click();
				            var iframe = document.createElement("iframe");
				            var iframe_url = "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1";
				            if (this.getAttribute("data-params")) iframe_url+='&'+this.getAttribute("data-params");
				            iframe.setAttribute("src",iframe_url);
				            iframe.setAttribute("frameborder",'0');

				            // The height and width of the iFrame should be the same as parent
				            iframe.style.width  = this.style.width;
				            iframe.style.height = this.style.height;

				            // Replace the YouTube thumbnail with YouTube Player
				            this.parentNode.replaceChild(iframe, this);
				        }
				    }
				});
			</script>
            <div class="flexslider">
            	<ul class="slides">
            		<?php
            		$youtube_regex_pattern = "/(youtube.com|youtu.be)\/(watch)?(\?v=)?(\S+)?/";
					$match;

					foreach ($media_arr as $imgkey => $gimg) {
            			?>
            			<li>
	            			<?php
	            			if(preg_match($youtube_regex_pattern, $gimg, $match)){
							    //echo "Youtube video id is: ".$match[4];
							    ?>
							    <div class="youtube" id="<?=$match[4];?>" style="width: 100%; height: 447px;background-size: 100%;">
								</div>
							    <?php
							}else{
							    ?><img src="<?=$gimg?>" alt="" /><?php
							}
	            			?>
	            		</li>
	            		<?php
            		}
            		?>
            	</ul> 
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
	$(window).load(function(){
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
	});
</script>
<?php
echo $this->element('frontfooter');
?>