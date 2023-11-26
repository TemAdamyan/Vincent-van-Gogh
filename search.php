<?php 
get_header();

// Display search results
if (have_posts()) {
   echo '<h1>Search Results for: ' . esc_html($search_query) . '</h1>';

   while (have_posts()) {
       the_post();

       echo '<h2><a href="' . esc_url(get_permalink()) . '">' . get_the_title() . '</a></h2>';
       echo '<div>' . get_the_excerpt() . '</div>';
   }
} else {
   echo '<h1>No search results found for: ' . esc_html($search_query) . '</h1>';
}

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
            the_excerpt();
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

<?php  
   get_footer();
?>