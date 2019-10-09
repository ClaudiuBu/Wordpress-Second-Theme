<?php get_header(); ?>

<div class="main">
    <div class="container">

        <div class="row">
            <div class="col-8">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="post">
                            <?php if(page_is_parent() || $post->post_parent >0) : ?>
                            <nav class="nav sub-nav">
                            <ul>
                                    <span class="parent-link"><a class="parent"
                                    href="<?php echo get_the_permalink(get_top_parent()); ?>"><?php
                                    echo get_the_title(get_top_parent()); ?></a>
                            <?php
                                $args = array(
                                    'child_of' => get_top_parent(),
                                    'title_li' => ''
                                );
                            ?>
                            <?php wp_list_pages($args); ?>
                            </ul>
                            </nav>
                            <?php endif; ?>
                            <?php the_title(); ?>
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
                <?php include('widgets.php'); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>