<?php 
get_header();
?>

<?php
if (have_posts() ){
   while(have_posts()){
   	  the_post();
  ?>
   <article class="post" <?php if(has_post_thumbnail()) { echo "has-thumbnail";} ?>>
      <div class="post-thumbnail">
         <?php the_post_thumbnail('small-thumbnail'); ?>
      </div>
   	<h2>
   		<a href="<?php the_permalink(); ?>">
   			<?php the_title(); ?>
   		</a>
   	</h2>
      <p class="post-info">
         <?php the_time("F j, Y g:i a");?>
      </p>
      <a href="<?php echo get_author_posts_url(get_the_author_meta('ID' )) ?>">
<?php the_author(); ?>
</a>
      <hr>
   	<p><?php the_excerpt(); ?></p>
      <?php 
      if($post->post_excerpt){ 
      ?>
         <p>
            <?php get_the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">Read more&raquo </a>
         </p>
         <?php 
         }
         else{
            the_content();
         }
          ?>
         
   </article>
   <?php 
   }
}    
else{
	echo "<p>no content found</p>";
}

?>
<nav class="site-nav children-links clearfix">
   <span class="parent-link">
   <a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?>
   </a>  
   </span>

   <ul>
<?php 
$args = array(
   'child_of' => get_top_ancestor_id(),
   'title_li' => ''
);
?>
<?php wp_list_pages($args); ?>
</ul>
</nav>

<div class="site-content clearfix">
    <div class="main-column">
</div>
<?php get_sidebar(); ?>
</div>   

<?php  
   get_footer();
?>