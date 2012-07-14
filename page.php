<?php get_header(); ?>

<section id="content" role="main" class="cf <?php $key="section-class"; echo get_post_meta($post->ID, $key, true); ?>">

    <?php while ( have_posts() ) : the_post() ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; ?>    

</section>


<?php get_footer(); ?>
