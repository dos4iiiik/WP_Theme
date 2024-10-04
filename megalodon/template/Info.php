<?php 
    /* Template name: Информация для размещения заказа */
    get_header(); 
?>

<div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>
    <h1 class="page__title">Информация для размещения заказа</h1>

    <div class="information__count"> 
        <?= get_field('text_top_card'); ?>
    </div>

    <?php get_template_part( 'template-parts/content', 'stages' ); ?>
    
    <p class="information__highlight">
        <?= get_field('text_highlight'); ?>
    </p>
    <div class="information__content">
        <?= get_field('text_content'); ?>
    </div>

    <?php get_template_part( 'template-parts/content', 'consultation' ); ?>

</div>


<?php get_footer(); ?>