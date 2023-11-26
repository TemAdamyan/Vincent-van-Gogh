<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<title> <?php bloginfo('name'); ?> </title>
<meta_charset="<?php_bloginfo('charset'); ?>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="styles.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- site header-->
<header class="site-header">
<h1> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?> </a></h1>
<h5> <?php bloginfo('description'); ?> </h5>

     <nav class="site-nav">
         <?php 
         $args = array(
              "theme_location" => "primary"
         );
         ?>
         <?php wp_nav_menu($args); ?>
     </nav> 

</header> <!-- site header-->

<div class="hs-search">
     <?php get_search_form(); ?>
</div>

<?php
if(is_page('contact')): ?>

        <p> You can contact with us) </p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.6619682129726!2d4.878886915801444!3d52.35841587978392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609ef96d35a5f%3A0xc22828aef97cc51a!2sVan%20Gogh%20Museum!5e0!3m2!1sen!2sam!4v1687686714792!5m2!1sen!2sam" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<?php
endif;
?>
