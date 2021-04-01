<?php if (is_active_sidebar('sidebar-blog-page')) : ?>
  <aside class="sidebar col-md-4 h-100">
    <?php get_search_form(); ?>
    <?php dynamic_sidebar('sidebar-blog-page'); ?>
  </aside>
<?php else :
  echo "Nothing sidbar add in theme";
endif;
?>