<?= get_header(); ?>

<article id="post-<?php the_ID(); ?>" ></article>
    <div class="container">
        <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>

        
        <?php the_title( '<h1 class="post__title">', '</h1>' ); ?>
        <div class="post-news-content">
            <?php the_content(); ?>
        </div>
    </div>
</article>


<?= get_footer(); ?>