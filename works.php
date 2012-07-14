<?php
/*
 * Template Name: Page of Works
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
?>    
    
<?php get_header(); ?>

<section id="content" role="main"  class="cf works">
    <?php the_title('<h1>', '</h1>'); ?>
   
    <?php $loop = new WP_Query( array( 'post_type' => 'm4m_work', 'posts_per_page' => 10  ) ); ?>
    <?php $count = 0; ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
        <?php $count++; ?>
        <?php if (!(($count%4) - 1)) : ?>
            <article class="first">
        <?php else : ?>
            <article>
         <?php endif; ?>
         
                <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                    <?php the_post_thumbnail(); ?>
                </a>
            </article>
        
    <?php endwhile; ?>

        
</section>


<?php get_footer(); ?>
