<?php get_header(); ?>


<!-- Main Content -->
<div class="main">
    <div class="container">

        <div class="row">
            <!-- Left side -->
            <div class="col-8 main-blog-content">
                <?php
                $args = array(
                    'post_type' => 'post'
                );

                $post_query = new WP_Query($args);
                if ($post_query->have_posts()) {
                    while ($post_query->have_posts()) {
                        $post_query->the_post();
                        ?>
                        <?php get_template_part('content', get_post_format()); ?>
                        <br>

                <?php
                    }
                }
                ?>
                <?php wp_reset_postdata(); ?>
            </div>

            <!-- Sidebar-right -->
            <div class="col-4 widget-sidebar">
                <?php include('widgets.php'); ?>
            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>