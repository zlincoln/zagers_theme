<?php get_header();?>

		<?php
		
		//get category ID
		$cat_id = get_query_var('cat');
		
		//get current page #
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		
		//limit number of posts depending on category
		if($cat_id==1){
			$query = 'cat=' . $cat_id . '&showposts=-1&paged=' . $paged;
		}else{
			$query = 'cat=' . $cat_id . '&showposts=-1&paged=' . $paged;
		}

		// The Query
		query_posts($query);?>
		
		<ul id="category-items-list" class="group">
		
		<?php
		if (have_posts()) : ?>
           <?php while (have_posts()) : the_post();  
           $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');?>
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
 		
 		</ul><!-- END category-items-list -->
		
		<div id="pagination-wrapper">
			<?php wp_pagenavi(); ?>
		</div><!-- END pagination-wrapper -->
		
<?php get_footer();?>