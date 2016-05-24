<?php get_header(); ?>
   
    <!-- Begin Flex Slider -->
    <div class="flexslider">
        <ul class="slides">
        <li><img src="<?php bloginfo('template_directory'); ?>/images/img-slide-01.jpg" width="940" height="400" alt="Image One"></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/images/img-slide-02.jpg" width="940" height="400" alt="Image Two"></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/images/img-slide-03.jpg" width="940" height="400" alt="Image Three"></li>
        </ul>
    </div>
    <!-- End Flex Slider -->
    
    <!-- Begin Widgets -->
    <div id="widgets">
        <section class="widget-item">
        <?php if (have_posts()) : while (have_posts()) : the_post(); // start loop one that pulls the SEO text ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(''); ?>
        <?php endwhile; endif; ?>
        <p>front-page.php</p>
        </section>
        <section class="widget-item">
            <h2>Latest Postings:</h2>
            <?php rewind_posts(); // stop loop one ?>
            <?php query_posts('showposts=5'); // give directions to loop two ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); // start loop two ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; endif; ?>
        </section>
        <section class="widget-item">
            <h2>Contact Me:</h2>
            <p><strong>Phone: </strong>206.543.2567<br><strong>Email: </strong><a href="mailto:sinkum@uw.edu">sinkum@uw.edu</a></p>
            <p>428 Sieg Hall<br>University of Washington<br>Seattle, WA 98195</p> 
        </section>
    </div>
    <!-- End Widgets -->

<?php get_footer(); ?>