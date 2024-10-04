<?= get_header(); ?>

<article id="post-<?php the_ID(); ?>" ></article>
    <div class="container">
        <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>

        <?php the_title( '<h1 class="post__title">', '</h1>' ); ?>

        <div class="post-project-content">

            <section id="post-project__slider">
                <div class="swiper-container swiperProject" style="overflow: hidden; position: relative;" >
                    <div class="swiper-wrapper">
                    <?php $slides = get_field('slider_gallery');
                        foreach ($slides as $slide) {  ?>
                            <div class="swiper-slide" style=" background: url(<?= $slide['img']; ?>) center center / cover no-repeat;"></div>
                    <?php } ?>
                    </div>   
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev swiper-button-prev-project"></div>
                    <div class="swiper-button-next swiper-button-next-project"></div>
                </div>
            </section>


        <?php if ( !empty(get_field('text_description'))) { ?>
            <section class="post-project__destiny">
                <p class="destiny__highlighted"><?= get_field('highlighted');?></p>               
            </section>
        <?php } ?>


        <?php
            if ( !empty(get_field('text_description')) || !empty(get_field('characteristics')) ){ ?>
            <section class="post-project__description">
                <h2 class="post__subtitle">Описание конструкции</h2>
                <p class="post-project__text"><?= get_field('text_description'); ?></p>

            <?php $characteristics = get_field('characteristics'); 
                if ($characteristics){ ?>
                
                <div class="post-project__characteristics">
                <?php foreach ($characteristics as $character){ ?>
                    <div class="post-project__characteristic">
                        <h4 class="characteristic__title"><?= $character['characteristic_title']?></h4>
                        <p class="characteristic__text"><?= $character['characteristic_content']?></p>
                    </div>
                <?php } ?>
                </div>
            <?php } ?>
            </section>
        <?php } ?>


        <?php 
            if ( !empty(get_field('scheme')) ){ ?>
            <section class="post-project__scheme">
                <h2 class="post__subtitle">Схема</h2>
                <img src="<?= get_field('scheme'); ?>" data-fancybox="gallery">            
            </section>
        <?php } ?>
            
        </div>

 
    </div>
</article>


<?= get_footer(); ?>