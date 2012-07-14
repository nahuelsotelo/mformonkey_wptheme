<?php get_header(); ?>

<section id="content" role="main" class="cf works">

    <?php while ( have_posts() ) : the_post() ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <div class="galeria-flickr">
            <?php $key="galeria-flickr"; echo get_post_meta($post->ID, $key, true); ?>
        </div>
    <?php endwhile; ?>    

</section>

<?php get_footer(); ?>
