<?php
/*
 * Template Name: Shop Template
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
    
    <div class="shop-policy">
      <h2>TERMS and CONDITIONS</h2>
      
      <p>About UPDATES:</p>
      <p>There is a limit of "1 item per person, per update" policy. You can only buy one item at each update. An update consists of all items available at a specific time and day, including all three different times in one day. So you can only buy one item from those available at that day.</p>
      <p>In the case of multiple quantities of the same item, we will make sure to distribute them in the three different hours, and inform about what will be available at each time.</p>
      <p>This does not include the items already on the shop, you can buy them freely without quantity restriction.</p>
      <p>Set up time and limitation of quantity should help to reach as many people as possible. Thank you very much for your understanding!</p>
      <p>In the case of an item getting a duplicate order from two different customers, we'll give priority on a first come first serve basis.</p>
      
      <p class="feature">*Please be sure to complete a transaction with us to save your USER information. Search for the Monkey logo "Test buy for new customers" and make a purchase free of charge.</p>
      <p>If you have any questions, please don't hesitate to contact us.</p>
    </div>
    
    
    <div class="shop-browser">
        <script type="text/javascript" src="http://app.ecwid.com/script.js?803114" charset="utf-8"></script>
        <script type="text/javascript"> xProductBrowser("categoriesPerRow=3","views=grid(3,3) list(10) table(20)","categoryView=grid","searchView=list","style="); </script>
        <noscript>Your browser does not support JavaScript. Please proceed to <a href="http://app.ecwid.com/jsp/803114/catalog">HTML version of Maria Yepes's store</a></noscript>
    </div>      
</section>


<?php get_footer(); ?>