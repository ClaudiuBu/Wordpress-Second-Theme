<?php get_header(); ?>


<!-- Main Content -->
<div class="main">
    <div class="container">

        <div class="row">
            <!-- Left side -->
            <div class="col-12 main-blog-content">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="post-single">
                            <div class="blog-post-title-single-page">
                                <h3>
                                    <a>
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                            </div>
                            <div class="blog-post-sub-title-single-page">
                                <p>
                                    Created by <?php the_author(); ?> on <?php the_time('l jS \of F Y h:i:s A'); ?>
                                </p>
                            </div>

                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-image">
                                    <?php the_post_thumbnail('medium_large'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="post-article">
                                <?php the_content(); ?>
                                <div class="footer-post">
                                    Category:
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
                                <br>
                            </div>
                        </article>
                        <div class="widget-single">
                            <?php include('widgets2.php'); ?>
                        </div>
                        <div class="clr">
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php echo wpautop('Nu avem postari'); ?>

                <?php endif; ?>
                <br style="width:300px;">
                <?php comments_template(); ?>

            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>