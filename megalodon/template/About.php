<?php 
    /* Template name: О компании */
    get_header(); 
?>
<div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>

    <h1 class="page__title">О компании</h1>

    <?php get_template_part( 'template-parts/content', 'about' ); // entry-video.php в директории 'parts' ?>
</div>
<?php get_footer(); ?> 