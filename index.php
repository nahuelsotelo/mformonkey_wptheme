<?php get_header(); ?>

<?php if ( is_home() ) { ?>
    <section id="content" role="main" class="cf news">
    <h1>News</h1>
 <?php } else { ?>
    <section id="content" role="main" class="cf <?php $key="section-class"; echo get_post_meta($post->ID, $key, true); ?>">
 <?php } ?>

    <?php while ( have_posts() ) : the_post() ?>
        <?php if ( is_page() ) { ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        
        <?php } else { ?>
            <article>
                <h1><a href="<?php the_permalink()?>" title="permalink to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
                <?php the_content(); ?>
            </article>
        <?php } ?>
    
    <?php endwhile; ?>    

</section>


<?php get_footer(); ?>
