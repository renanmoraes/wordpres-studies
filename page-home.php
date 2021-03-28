<?php get_header(); ?>
<div class="content-area">
    <main>
        <section class="slide">
            <div class="container">
                <div class="row">Slide</div>
            </div>
        </section>
        <section class="services">
            <div class="container">
                <h1 class="text-center">Our Services</h1>
                <div class="row align-items-center">
                    <div class="col-sm-4">
                        <div class="services-item">
                            <?php if (is_active_sidebar('sidebar-service-1')) :
                                dynamic_sidebar('sidebar-service-1');
                            endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services-item">
                            <?php if (is_active_sidebar('sidebar-service-2')) :
                                dynamic_sidebar('sidebar-service-2');
                            endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services-item">
                            <?php if (is_active_sidebar('sidebar-service-3')) :
                                dynamic_sidebar('sidebar-service-3');
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <?php get_sidebar('home'); ?>
                    <div class="news col-md-8">

                        <div class="container">
                            <h1>Latest News</h1>
                            <div class="row">
                                <?php
                                $feature = new WP_Query('post_type=post&posts_per_page=1&cat=3,17');

                                if ($feature->have_posts()) :
                                    while ($feature->have_posts()) : $feature->the_post(); ?>
                                        <div class="col-12">
                                            <?php get_template_part('template-parts/content', 'featured'); ?>
                                        </div>
                                    <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 2,
                                    'category__not_in' => array(8, 7),
                                    'caregory__in' => array(3),
                                    'offset' => 1
                                );
                                $secondFeature = new WP_Query($args);

                                if ($secondFeature->have_posts()) :
                                    while ($secondFeature->have_posts()) : $secondFeature->the_post(); ?>
                                        <div class="col-sm-6">
                                            <?php get_template_part('template-parts/content', 'secondary'); ?>
                                        </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="map">
            <div class="container">
                <div class="row">Mapa</div>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>