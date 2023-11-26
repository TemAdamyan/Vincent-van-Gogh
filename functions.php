<?php
function connect_resources(){
}
wp_enqueue_style('style', get_stylesheet_uri());
add_action('wp_enqueue_scripts', 'connect_resources');


// get top ancestor
function get_top_ancestor_id(){

     global $post;

     if($post->post_parent){
            $ancestors = get_post_ancestors($post->ID);
            return $ancestors[0];
} 
return $post->ID;
}

function has_children(){

     global $post;
 
     $pages = get_pages('child_of=' . $post->ID);
 
     return count($pages);
 
 }
// if(has_children() OR $post->post_parent

 $categories = get_the_category();
 foreach ($categories as $key => $value) {
 $link = get_category_link($value->term_id);
 echo "<a href='$link'>" . $value->name . "</a> ";
 }

 function custom_excerpt_length(){
     return 24;
 }
 add_filter('excerpt_length', 'custom_excerpt_length');

// Theme setup
function custom_theme_setup() {

// Navigation Menues
register_nav_menus( array(
     'primary' => __('Primary menu'),
     'footer' => __('Footer menu')
));

// Add featured image support
add_theme_support('post-thumbnails');

add_image_size( 'small-thumbnail', 180,120, true );
 add_image_size( 'banner-image', 1000, 250, array('left','top'));

}

add_action('after_setup_theme', 'custom_theme_setup');

// Add post format support
add_theme_support('post-formats', array('aside', 'gallery', 'link'));

// Add Widget locations 
function widgetsInit(){

     register_sidebar(array(
          'id' => 'sidebar1' ,
          'name' => 'Sidebar' ,
          'before_widget' => '<div class="widget-item">' ,
          'after_widget' => '</div>' ,
          'before_title' => '<h4 class="my_class_name">' ,
          'after_title' => '</h4>' ,

     ));
}

add_theme_support('post-thumbnails');

?>
