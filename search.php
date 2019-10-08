<?php get_header(); ?>


<!-- Main Content -->
<div class="main">
    <div class="container">
        <h1 class="page-header">
            Search Results
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
                <br>
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