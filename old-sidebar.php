<aside class="span-6">
<div id="sidebar-inner-wrap">
	<?php
	if (is_home()){
		//This code runs if on the homepage
?>
    
        <div id="bio-wrapper">
        	<p>Welcome to the online portfolio of Brian Zager.  Here you will find examples of my work ranging from fine art to graphic design.  Feel free to get in contact with me!</p>
        </div><!-- END bio-wrapper -->
		<?php
	}//END if (is_home)
	
	// if on category page display children of parent category	
	
	if (is_category()) {
	
		$cat = get_query_var('cat');
	
		$this_category = get_category($cat);
		
		if($this_category->category_parent){
			$category_link = get_category_link($this_category->category_parent);
			$root_cat = get_category($this_category->category_parent);
			$root_cat_name = $root_cat->cat_name;
			$this_category = wp_list_categories('orderby=slug&title_li=&child_of='.$this_category->category_parent.'&echo=0'); 
		}else{
			$category_link = get_category_link($cat);
			$root_cat_name = $this_category->cat_name;
			$this_category = wp_list_categories('orderby=slug&title_li=&child_of='.$this_category->cat_ID.'&echo=0');
		}
		if ($this_category) { ?>
		<ul id="category-list" class="span-6">
			<li><a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo $root_cat_name; ?>"><?php echo $root_cat_name;?></a>
			<?php echo $this_category; ?>
		</ul><!-- END #category-list -->
		<?php }// if ($this_category)
	} // END if(is_category)?>
</div>
</aside>