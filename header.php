<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>"/>
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

	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="wp-content/themes/zagers_theme/css/shadowbox/shadowbox.css">
	<link rel="stylesheet" href="wp-content/themes/zagers_theme/css/bootstrap/styles.css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>	
	<script type="text/javascript" src="wp-content/themes/zagers_theme/js/shadowbox.js"></script>

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

	  $(function() { 
     	
     	// Initialize shadowbox
			$('.tumblr_post').each(function(){
				$(this).find('br').remove();
				$(this).find('> a').attr('rel', 'shadowbox').wrap('<div class="widget-head">');
				$(this).find('> p:last-child').addClass('date').appendTo($(this).find('div.widget-head'));
				$(this).find('p').each(function(){
					if($(this).html() == ''){
						$(this).remove();
					}
				})
			});
			Shadowbox.init();
    });//END document.ready

	</script>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="page-wrap">
		<div class="container-fluid">
			<div class="row-fluid">
				<?php get_sidebar(); ?>
				<section class="main-content span9 offset3">