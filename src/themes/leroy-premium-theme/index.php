<?php get_header();

    function showPosts() {
        while(have_posts()) {
           the_post(); ?>
           <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
           <?php the_content(); ?>
           <hr>
           <?php
        }
    }

    showPosts();

    get_footer();

?>

