<?php get_header(); ?>
<div class="primary">
  <div class="main">
    <div class="container">
      <h2>Search results for: </h2><?php echo get_search_query(); ?>
      <br>
      <?php
      get_search_form();
      while (have_posts()) : the_post();
        get_template_part('template-parts/content', 'search');
        if (comments_open() || get_comments_number()) :
          comments_template();
        endif;
      endwhile;
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>