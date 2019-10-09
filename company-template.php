<?php
/*

    Template Name: Company Layout

*/

?>

<?php get_header(); ?>

<div class="main">
    <div class="container">

        <div class="row">
            <div class="col-8">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="post">
                            <h2><?php the_title(); ?></h2>
                            <p class="phone">1-800-444-5555</p>
                            <?php the_content(); ?>
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php echo wpautop('There are no posts to display'); ?>
                <?php endif; ?>
                <h3>

                </h3>

            </div>
            <div class="col-4 widget-sidebar">
                <?php include('widget-front-page.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>