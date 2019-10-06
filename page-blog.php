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
                        <article class="post">
                            <div class="blog-post-title">
                                <a href="<?php the_permalink(); ?>">
                                    <h3><?php the_title(); ?></h3>
                                </a>
                            </div>
                            <div class="blog-post-sub-title">
                                <p>Created by <?php the_author(); ?> at <?php the_time(); ?></p>
                            </div>
                            <div class="img-container">
                            <?php the_post_thumbnail('', array('class' => 'img-fluid')); ?>
                            </div>
                            <div class="blog-post-article">
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                            <div class="read-more-container">
                                <button class="btn btn-outline-primary">
                                    <a href="<?php the_permalink(); ?>">
                                    Read More
                                </a>
                            </button>
                                <hr>
                            </div>
                        </article>
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