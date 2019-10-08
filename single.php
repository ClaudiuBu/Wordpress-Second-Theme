<?php get_header(); ?>


<!-- Main Content -->
<div class="main">
    <div class="container">

        <div class="row">
            <!-- Left side -->
            <div class="col-12 main-blog-content">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('content') ?>
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