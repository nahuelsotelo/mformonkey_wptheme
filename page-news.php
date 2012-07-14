<?php get_header(); ?>

<section id="content" role="main" class="cf news">
<h1>News</h1>
<?php if ( have_posts() ) : ?>
    <h1>News</h1>
    <?php while ( have_posts() ) : the_post(); ?>
    <article>
        <?php the_title('<h1>', '</h1>'); ?>
        <div class="post-content">
            <?php the_content(); ?>
        </div>
    </article>
<?php endwhile; else: ?>
    <p>Elves couldn't found a single post, sorry!.</p>
 <?php endif; ?>
        
</section>

<?php get_footer(); ?>