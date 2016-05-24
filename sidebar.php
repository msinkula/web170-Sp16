	
    <!-- Begin Sidebar -->
    <div id="sidebar">
    
    	<!-- Begin Sub-Navigation -->
        <div id="sub-navigation">
        <?php my_subnavigation(); ?>
        </div>
        <!-- End Sub-Navigation -->
        
        <!-- Begin My Profound Quote -->
        <div id="my-quote">
        <?php if (get_post_meta($post->ID, 'quote', true)) : ?>
		
        <blockquote><?php echo get_post_meta($post->ID, 'quote', true); ?></blockquote>
			
		<?php endif; ?>
        </div>
        <!-- End My Profound Quote -->
        
        <!-- Begin Dynamic Widgets -->
        <div id="dynamic-widgets">
        <?php dynamic_sidebar(); ?>
        </div>
        <!-- End Dynamic Widgets -->
    
    </div>
    <!-- End Sidebar --> 