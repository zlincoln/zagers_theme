<?php get_header(); ?>

		<?php
		$cat_id = get_cat_ID('featured');
		
		$feat_query = 'cat=' . $cat_id . '&showposts=8';
		
		query_posts($feat_query);
		
		?>
		<div class="homepage-wrap">
			<ul id="category-items-list" class="group">
				<?php if (have_posts()) : ?>
				<?php while(have_posts()) : the_post();
				$image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');?>
				<li class="category-item">
					<!-- If thumbnail custom field is filled out -->
	           		<?php if ( get_post_meta($post->ID, 'thumb', true) ){ ?>
	    			<a href="<?php echo $image_url[0]; ?>" rel="shadowbox">
	        			<img class="thumb" src="<?php echo get_post_meta($post->ID, 'thumb', true) ?>" alt="<?php the_title(); ?>" />
	    			</a>
					<?php }else{ ?>
	                
	                <!-- If no thumb custom field get auto generated thumbnail -->
	                <a href="<?php echo $image_url[0]; ?>" rel="shadowbox">
	           			<?php the_post_thumbnail('cat_thumb');?>
	            	</a>
	                <?php } //endif custom field exists  ?>
	           	</li>
	       		<?php endwhile; ?>
	 		<?php endif; //if have_posts?>
			</ul>

	  
			<?php
			// Reset Query
			wp_reset_query();
			?>
			
			<?php 
			if (function_exists('dynamic_sidebar') && dynamic_sidebar('tumblr-widget')) : 
			//display latest tumblr post
			else :
			// do nothing
			?>
			<?php endif; ?>
		</div><!-- /.homepage-wrap -->
<?php get_footer();?>