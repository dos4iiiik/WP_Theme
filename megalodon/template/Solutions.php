<?php 
    /* Template name: Конвеерные решения */
    get_header(); 
?>

<div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>

    <h1 class="page__title">Конвеерные решения</h1>

    <section id="solutions__slider">
        <div class="swiper-container swiper2" style="overflow: hidden; position: relative;" >
            <div class="swiper-wrapper">
                <?php $slides = get_field('slider_img');
                    foreach ($slides as $slide) {  ?>
                        <div class="swiper-slide" style=" background: url(<?= $slide['img']; ?>) center center / cover no-repeat;">

                        </div>
                <?php } ?>
            </div>   
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev swiper-button-prev-2"></div>
            <div class="swiper-button-next swiper-button-next-2"></div>
        </div>
    </section>
    
    <section class="solutions__content">
        <div class="solutons__highlight">
            <?= get_field('solutons__highlight'); ?>   
        </div>
        <div class="solutons__text">
            <?= get_field('solutons__text'); ?>
        </div>        
        
        <div class="solutons__list">
            <?php 
                $list = get_field('solutons__list'); 
                echo $list['solutons__list-name']; 
            ?>
            <ul>
                <?php
                    $items = $list['solutons__list-items'];
                    foreach($items as $item){
                        echo '<li>' . $item['solutons__list-item'] . '</li>';
                    }
                ?>
            </ul>
        </div>

        <div class="solutons__highlight-red">
            <div class="soluton__svg">       
                <svg width="14" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 18h6v2H4v-2Zm7.906-6.288C12.936 10.506 14 9.259 14 7c0-3.859-3.141-7-7-7S0 3.141 0 7c0 2.285 1.067 3.528 2.101 4.73.358.418.729.851 1.084 1.349.144.206.38.996.591 1.921H3v2h8v-2h-.774c.213-.927.45-1.719.593-1.925.352-.503.726-.94 1.087-1.363Zm-2.724.213C8.748 12.542 8.386 14 8.176 15H5.825c-.209-1.002-.572-2.463-1.011-3.08a20.5002 20.5002 0 0 0-1.196-1.492C2.644 9.294 2 8.544 2 7c0-2.757 2.243-5 5-5s5 2.243 5 5c0 1.521-.643 2.274-1.615 3.413-.373.438-.796.933-1.203 1.512Z" fill="#fff"/></svg>       
            </div>  
            <?= get_field('solutons__highlight-red'); ?>
        </div>

        <div class="solutions__gallery">
            
            <?php $gallery = get_field('gallery');
                foreach($gallery as $img){ ?>
                <img src="<?= $img['img_url']; ?>" alt="" class="solutions__gallery-img">
            <?php } ?>
        </div>
    </section>
    
    <?php 
        echo '<a href="' . get_post_type_archive_link( 'projects' ) . '">Архив проектов</a>';
    ?>
</div>

<script>
</script>

<?php get_footer(); ?>