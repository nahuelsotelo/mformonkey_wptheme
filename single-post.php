<?php get_header(); ?>

    <section id="content" role="main" class="cf post">

    <?php while ( have_posts() ) : the_post() ?>
        <article>
            <header>
                <h1><?php the_title(); ?></h1>
            </header>
            
            <div class="entry">
                <?php the_content(); ?>
            </div>
            
            <?php if ( comments_open() ) {?>
                <?php comments_template( '', true ); ?>
            <?php } ?>
        </article>
        
        
        
    <?php endwhile; ?>    

</section>


<?php get_footer(); ?>
