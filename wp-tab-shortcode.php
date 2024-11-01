<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

function wp_tab_shortcode_func($atts,$content){
	ob_start();
        $wp_tab_atts = shortcode_atts(array(
                'wp_tab_animate_in' => 'fadeIn',
                'wp_tab_animate_out' => 'fadeOut',
                'wp_tab_animate_duration' => '200',
                'wp_tab_show_content_title' => '',
                'wp_tab_switching_arrow' => '',
                'wp_tab_auto_height' => '',
                'family' => '',
                'variant' => '',
                'wp_tab_content_title_font_size' => '25',
                'wp_tab_content_font_size' => '16',
               
        ),$atts);
		
		$wp_tab_id = rand();
?>		
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#wp-tab-id-<?php echo $wp_tab_id; ?>').liquidSlider({
			  autoHeight:<?php if ($wp_tab_atts['wp_tab_auto_height'] == 1) echo "true"; else echo "false"; ?>,
			  slideEaseFunction:'animate.css',
			  slideEaseDuration:<?php echo $wp_tab_atts['wp_tab_animate_duration']; ?>,
			  heightEaseDuration:200,
			  animateIn:"<?php echo $wp_tab_atts['wp_tab_animate_in']; ?>",
			  animateOut:"<?php echo $wp_tab_atts['wp_tab_animate_out']; ?>",
			  callback: function() {
				var self = this;
				jQuery('.slider-6-panel').each(function() {
				  jQuery(this).removeClass('animated ' + self.options.animateIn);
				});
			  }
			
		});
	});
</script>
<link href='https://fonts.googleapis.com/css?family=<?php echo $wp_tab_atts['family']; ?>:<?php echo $wp_tab_atts['variant']; ?>' rel='stylesheet' type='text/css'>
<style type="text/css">
.wp-tab-unique-class-<?php echo $wp_tab_id; ?>,.wp-tab-title{
	font-family:<?php echo $wp_tab_atts['family']; ?>;
	font-weight:<?php echo $wp_tab_atts['variant']; ?>;
}
.wp-tab-unique-class-<?php echo $wp_tab_id; ?>,.wp-tab-title{
	font-size:<?php echo $wp_tab_atts['wp_tab_content_title_font_size']; ?>px;
}
.wp-tab-unique-class-<?php echo $wp_tab_id; ?> .wp-tab-content{
	font-size:<?php echo $wp_tab_atts['wp_tab_content_font_size']; ?>px;
}
#wp-tab-id-<?php echo $wp_tab_id; ?>-nav-ul li{
	font-size:<?php echo $wp_tab_atts['wp_tab_title_font_size']; ?>px;
	background-color:<?php global $tab_bg; echo $tab_bg; ?>;
}
<?php if($wp_tab_atts['wp_tab_show_content_title']!=1): ?>
	.wp-tab-title{
		display:none;
	}
<?php endif; ?>
<?php if($wp_tab_atts['wp_tab_switching_arrow']!=1): ?>
	.ls-nav-left-arrow,
	.ls-nav-right-arrow{
		display:none !important;
	}
<?php endif; ?>
.ls-nav-left-arrow,
.ls-nav-right-arrow{
	top:42%;
}
.wp-tab-id-<?php echo $wp_tab_id; ?>-nav-ul li a:hover, a:active, a:focus {
	outline:0;
}
</style>

  <div id="wp-tab-id-<?php echo $wp_tab_id; ?>" class="liquid-slider wp-tab-unique-class-<?php echo $wp_tab_id; ?>">
  
		<?php echo do_shortcode($content); ?>
  
  </div> 

<?php  
	$var_ = ob_get_clean();
	return $var_;
}
add_shortcode('wp_tab','wp_tab_shortcode_func');

function wp_tab_content_shortcode($atts,$content){
	ob_start();
	
		$wp_tab_content_atts = shortcode_atts(array(
				'wp_tab_title' => '',
				'wp_tab_icon' => '',
				'wp_tab_bg' => '',
		),$atts);
	?>   
		<div style="background-color:<?php echo $wp_tab_content_atts['wp_tab_bg']; ?>">
			<h2 class="title wp-tab-title">
				<i class="<?php echo $wp_tab_content_atts['wp_tab_icon']; ?>"></i>&nbsp;&nbsp;
				<?php echo $wp_tab_content_atts['wp_tab_title']; ?>
			</h2>
				
				<p class="wp-tab-content"><?php echo $content; ?></p>
		</div>
	
	<?php
		
	$var_ = ob_get_clean();
	return $var_;
}
add_shortcode('wp_tab_content','wp_tab_content_shortcode');