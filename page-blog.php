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
                                <p>Created by
                                    <a href="<?php echo get_author_posts_url(
                                                            get_the_author_meta('ID')
                                                        ); ?> ">
                                        <?php the_author(); ?>
                                    </a>
                                    at <?php the_time('H:i Y-m-d '); ?>

                                </p>
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
                                <a href="<?php the_permalink(); ?>">
                                    <button class="btn btn-outline-primary">

                                        Read More
                                    </button>
                                </a>

                                <hr>
                                <div class="footer-post">
                                    <?php
                                            $categories = get_the_category();
                                            $separator = " , ";
                                            $output  = '';
                                            if ($categories) {
                                                foreach ($categories as $category) {
                                                    $output .= '<a href="' .
                                                        get_category_link($category->term_id) . ' ">' . $category->cat_name . '</
                                                a>' . $separator;
                                                }
                                            }
                                            echo trim($output, $separator);
                                            ?>
                                </div>
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