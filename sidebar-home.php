<?php if (is_active_sidebar('sidebar-home-page')) : ?>
  <aside class="sidebar col-md-4 h-100">
    <?php dynamic_sidebar('sidebar-home-page'); ?>
  </aside>
<?php else :
  echo "Nothing sidbar add in theme";
endif;
?>