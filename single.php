<?php get_header(); ?>
<h2>single.php</h2>
<?php while(have_posts()): the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; ?>
<?php get_footer(); ?>
