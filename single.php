<?php get_header(); ?>
<div class="primary">
  <div class="main">
    <div class="container">
      <?php
      while (have_posts()) : the_post();
        get_template_part('template-parts/content', 'single');
        if (comments_open() || get_comments_number()) :
          comments_template();
        endif;
      endwhile;
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>