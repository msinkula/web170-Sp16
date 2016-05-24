<?php get_header(); ?>

    <!-- Begin Text -->
    <div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <small>Posted in <?php the_category(', '); ?></small>
    <?php the_post_thumbnail('large') ?>
    <?php the_content(''); // look... a change! ?>
    <?php endwhile; endif; ?>
    <p>single.php</p>
    </div>
    <!-- End Text -->

<?php get_sidebar(); ?>  
<?php get_footer(); ?>