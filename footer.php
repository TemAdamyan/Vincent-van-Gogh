<!-- Site Footer-->
<footer class="site-footer">

<div class="footer-widgets clearfix">
</div>
<?php if(is_active_sidebar('footer1')) : ?>
<div class="footer-widget-area">
      <?php dynamic_sidebar('footer1');  ?>
</div>
<?php endif; ?>

</html>
</body>
<?php bloginfo('name'); ?> &copy; <?php echo date('Y')?></p>
</footer> <!-- Site Footer--
<?php wp_footer(); ?>