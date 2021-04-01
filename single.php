<?php get_header(); ?>
<div class="primary">
  <div class="main">
    <div class="container">
      <?php
      while (have_posts()) : the_post();
        get_template_part('template-parts/content', 'single');
      endwhile;
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>