
  </div><!-- /#wrap -->

  <?php roots_footer_before(); ?>
  
  <?php roots_footer_after(); ?>

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>
<footer id="content-info" class="<?php echo WRAP_CLASSES; ?>" role="contentinfo">
    <?php roots_footer_inside(); ?>
    <?php dynamic_sidebar('roots-footer'); ?>
    <p class="copy"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small></p>
  </footer>
</body>
</html>