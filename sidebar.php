<aside class="span3">
	<h1>
		<a href="<?php echo get_option('home'); ?>" id="site-logo"/>
			<img src="wp-content/themes/zagers_theme/images/BKZlogo.png" alt="BKZ Home" />
		</a>
	</h1>
	<?php wp_nav_menu( array('main-nav' => 'Main Navigation Bar', 'sort_column' => 'menu_order','menu_class' => 'mainnav')); ?>
</aside>