<?php get_header(); ?>
<div class="main">
    <div class="container">
        <div class="main-site-front shadow-lg p-3 mb-5">
        <?php include('widget-front-page.php') ?>
        </div>
        <div class="box-home">
            <h2>Home</h2>
            <p>Welcome to the homepage. This is an area for static text</p>
        </div>
    </div>
    <div class="box-container">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <?php if (is_active_sidebar('box-1')) : ?>
                        <?php dynamic_sidebar('box-1'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4 col-xs-12">
                    <?php if (is_active_sidebar('box-2')) : ?>
                        <?php dynamic_sidebar('box-2'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4 col-xs-12">
                    <?php include('widgets2.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>