<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name');}
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	<meta name="description" content="This is the online portfolio of Brian Zager.  Enter to view a sample of my graphic design and fine art.  (Burlington, VT | Baltimore, MD)">
	<meta name="keywords" content="graphic, art, graphic art, fine, fine art, brian zager, burlington vt, burlington, vermont, baltimore, baltimore md, maryland, design, graphic design">
	
	<link rel="shortcut icon" href="/favicon.ico">
	
	
<!-- ******************** Stylesheets ********************-->
	
	<!-- Shadowbox CSS -->
	<link rel="stylesheet" type="text/css" href="wp-content/themes/zagers_theme/css/shadowbox/shadowbox.css">
	
	<!-- Slideshow Styles -->
	<link rel="stylesheet" type="text/css" href="wp-content/themes/zagers_theme/css/slideshow/tabs-slideshow.css" />
	
	<!-- Call Our Main CSS -->
	<link rel="stylesheet" href="wp-content/themes/zagers_theme/css/bootstrap/styles.css">
	
<!-- ==================== END Stylesheets ====================== -->
<!-- *********************** Scripts **************************** -->

	<!-- Google Hosted jQuery Library -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>

	<!-- Shadowbox -->
	<script type="text/javascript" src="wp-content/themes/zagers_theme/js/shadowbox.js"></script>
		
<!-- ======================= END Script Calls ===================== -->
<!-- ********************** document.ready init ******************* -->
<script type="text/javascript">
// google analytics
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33235803-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script> 

    $(function() { 
     	
     	// Initialize shadowbox
     	Shadowbox.init();

		// add shadowbox to tumblr images
		$('#tumblr-widget-2 a > img').each(function(){
			$(this).parent().attr('rel','shadowbox');
		});

    });//END document.ready
</script>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="page-wrap">
		<div class="container">
			<div class="row">
				<?php get_sidebar(); ?>
				<section class="main-content span9 offset3">