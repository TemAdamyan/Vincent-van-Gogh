<?php  
   get_header();
?>

<h2>
	<?php 
	if(is_category() ){
	single_cat_title();
	}
	elseif(is_tag() ){
	single_tag_title();
	}
	elseif( is_author() ){
	the_post();
	echo 'Author Archives: ' . get_the_author();
	rewind_posts();
	}
	elseif( is_day() ){
		echo "Dayly Archives: " . get_the_date();
	}
	elseif( is_mounth() ){
		echo "Monthly Archives:" . get_the_date("F Y");
	}
	elseif( is_year() ){
		echo "Yearly Archives" . get_the_date("Y");
	}
	else{
		single_cat_title();
	}

	 ?>
</h2>

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

<?php  
   get_footer();
?>