<article class="post post-aside">
    <div class="meta">
        <p> <?php the_title(); ?> @<a href="#"><?php the_time(); ?></a>
        </P>
    </div>
    <p>
        <?php the_excerpt(); ?>
    </p>
    <a href="<?php the_permalink(); ?>">
        <button class="btn btn-outline-dark">
           Don't READ MORE
        </button>
    </a>
</article>