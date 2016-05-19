<?php 

/*
Theme Name: Spring 2016 Demo
Author: Testy McPickles
Author URI: http://www.testymcpickles.com
Description: I hope Bri is doing her homework. You too, Paige.
Version: 0.0.0812
*/


// Register my Menus
register_nav_menus(array(
	'main-menu' => _('Main'),
));
//


// Make me some thumbnails, please.
add_theme_support('post-thumbnails');
//

// My Sub Navigation
function my_subnavigation() {

	if (is_page()) { // if we're in pages
		
		if ($post->post_parent) { // if the page we're on has a parent
		
			echo '<h2>'.get_the_title($post->post_parent).'</h2>';
			echo '<ul>';
			wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent,)); // list the children of the page's parent
			echo '</ul>';
		
		} else { // if the page we're on does not have a parent
			
			echo '<h2>'.get_the_title($post->ID).'</h2>';
			echo '<ul>';
			wp_list_pages(array('title_li' => '', 'child_of' => $post->ID,)); // list the children of the page
			echo '</ul>';
			
		}
		
	} else { // if we're not in pages
		
		echo '<h2>Blog</h2>';
		echo '<ul>';
		wp_list_categories(array('title_li' => '',)); // list the categories of the postings
		echo '</ul>';
		
	}	
		
}
//

?>