<?php  
   get_header();
?>

<?php
while (have_posts()) {
    the_post();
    global $product;
    ?>

    <article class="product">
        <div class="post-thumbnail">
            <?php the_post_thumbnail('large'); ?>
        </div>
        <h2><?php the_title(); ?></h2>
        <p class="post-info"><?php the_time("F j, Y g:i a"); ?></p>
        <hr>
        <p><?php the_content(); ?></p>
    </article>

    <?php
}
?>

<?php  
   get_footer();
?>