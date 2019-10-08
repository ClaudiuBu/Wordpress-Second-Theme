<?php if (is_search() || is_archive()) : ?>
    <div class="archive-post">
        <h4>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h4>
        <p>Posted on : <?php the_time(' Y-m-d '); ?> at
            <?php the_time('H:i'); ?>
        </p>
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
<?php elseif (is_single()) : ?>
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
<?php else : ?>
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
<?php endif; ?>