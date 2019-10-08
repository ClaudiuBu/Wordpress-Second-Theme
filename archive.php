<?php get_header(); ?>


<!-- Main Content -->
<div class="main">
    <div class="container">
        <h1 class="page-header">
            <?php
            if (is_category()) {
                single_cat_title();
            } else if (is_author()) {
                the_post();
                echo 'Archives By Author: ' . get_the_author();
                rewind_posts();
            } else if (is_tag()) {
                single_tag_title();
            } else if (is_day()) {
                echo 'Archives By Day:' . get_the_date();
            } else if (is_month()) {
                echo 'Archives by Month:' . get_the_month('F Y');
            } else if (is_year()) {
                echo 'Archives by Year:' . get_the_year('Y');
            } else {
                echo 'Archives';
            }

            ?>
        </h1>
        <div class="row">
            <!-- Left side -->
            <div class="col-8 main-blog-content">
            
            <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="archive-post">
                            <h4>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h4>
                            <p>Posted on : <?php the_time(' Y-m-d '); ?> at
                                <?php the_time('H:i'); ?> </p>
                            <hr>
                        </div>
                    <?php endwhile; ?>
                <?php else :?>
                    <?php echo wpautop("No search results were found"); ?>
                <?php endif; ?>
            </div>

            <!-- Sidebar-right -->
            <div class="col-4 widget-sidebar">
                <?php include('widgets.php'); ?>
            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>