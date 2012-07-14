<?php
/**
 * Template Name: Shop
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
?>    
    
<?php get_header(); ?>

<section id="content" role="main"  class="cf shop">
    
    <div class="cf shop-header">
        <?php the_title('<h1>', '</h1>'); ?>
        
        <div class="shop-bag">
            <script type="text/javascript" src="http://app.ecwid.com/script.js?803114" charset="utf-8"></script>
            <script type="text/javascript"> xMinicart("style="); </script>
        </div>
        
        <div class="shop-menu">
            <script type="text/javascript" src="http://app.ecwid.com/script.js?803114" charset="utf-8"></script>
            <script type="text/javascript"> xCategories("style="); </script>
        </div>
        

    </div>
    
    
    <div class="shop-browser">
        <script type="text/javascript" src="http://app.ecwid.com/script.js?803114" charset="utf-8"></script>
        <script type="text/javascript"> xProductBrowser("categoriesPerRow=3","views=grid(3,3) list(10) table(20)","categoryView=grid","searchView=list","style="); </script>
        <noscript>Your browser does not support JavaScript. Please proceed to <a href="http://app.ecwid.com/jsp/803114/catalog">HTML version of Maria Yepes's store</a></noscript>
    </div>      
</section>


<?php get_footer(); ?>