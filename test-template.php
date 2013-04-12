<?php 

	/*
		Template Name: test page
	*/

?>

<?php include(TEMPLATEPATH . '/header2.php'); ?>
	<div id="main-content" class="push-1 span-18 last">

	<!-- Beginning of the slider markup -->
	<div id="metaContainer">
	
		<div class="backLink"><a href="#" title="Back" id="back">Back</a></div>
		
		<!-- The sliderr works with virtually any HTML element (div, span etc) but for the sake of simplicity I have used images in this demo -->
		<div id="slideContainer">
			<div id="slideShim">
				<a href="#"><img src="wp-content/themes/zagers_theme/slider/slides/slide-one.png" alt="Slide One" /></a>
				<a href="#"><img src="wp-content/themes/zagers_theme/slider/slides/slide-two.png" alt="Slide Two" /></a>
				<a href="http://www.premiumpixels.com"><img src="wp-content/themes/zagers_theme/slider/slides/slide-three.png" alt="Premum Pixels" /></a>
			</div>
		</div>
		
		<div class="forwardLink"><a href="#" title="Forward" id="forward">Forward</a></div>
		
		<div id="pager" class="clearSlider"></div>
	</div>
	<!-- End of the slider markup -->
	
<?php get_footer();?>