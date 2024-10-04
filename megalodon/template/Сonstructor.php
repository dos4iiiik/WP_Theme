<?php 
    /* Template name: Конструкторам */
    get_header(); 
?>

<div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>

    <h1 class="page__title">Конструкторам</h1>

    <div class="construct-page__content">
        <?php the_content(); ?>
    </div>
</div>


<?php get_footer(); ?>