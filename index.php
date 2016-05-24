<?php get_header(); ?>

    <!-- Begin Text -->
    <div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" class="post-excerpt">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small>
    
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
    <?php the_excerpt(); ?>
    </article>
    <?php endwhile; endif; ?>
    <p>index.php</p>
    </div>
    <!-- End Text -->

<?php get_sidebar(); ?>  
<?php get_footer(); ?>