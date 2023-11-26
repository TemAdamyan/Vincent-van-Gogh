<?php
/*
Template Name: tname
 */
get_header();
?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        ?>

        <article class="post_page">
            <p><?php the_content(); ?></p>
        </article>

    <?php
    endwhile;
else:
    echo "<p>No content found</p>";
endif;
?>
<?php
get_footer();
?>