<?php 
    /* Template name: Каталог */
    get_header(); 
?>

<div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>

    <h1 class="page__title">Каталог</h1>

    <div class="catalog__content">
        <div class="catalog__left_part">
            <?php  
                $left_items = get_field('col_1');
                foreach ( $left_items as $item ) { ?>
                    <div class="catalog__item">
                    <?php if($item['title']){ ?><h3 class="catalog__item-title"><?= $item['title']?></h3><?php } ?>
                        <?php $rows = $item['rows']; 
                            foreach ( $rows as $row ) { ?>
                            <a href="<?= $row['row_url']; ?>" class="catalog__item-link"
                            <?php if ( str_ends_with($row['row_url'], "pdf") ){ ?>
                                target="_blank" <?php } ?> 
                            >
                                <?= $row['row_name']; ?>
                            </a>
                        <?php } ?>
                    </div>
            <?php } ?>
        </div>

        <div class="catalog__right_part">
            <?php  
                $right_items = get_field('col_2');
                foreach ( $right_items as $item ) { ?>
                    <div class="catalog__item">
                    <?php if($item['title']){ ?><h3 class="catalog__item-title"><?= $item['title']?></h3><?php } ?>
                        <?php $rows = $item['rows']; 
                            foreach ( $rows as $row ) { ?>
                            <a href="<?= $row['row_url']; ?>" class="catalog__item-link"
                            <?php if ( str_ends_with($row['row_url'], "pdf") ){ ?>
                                target="_blank" <?php } ?> 
                            >
                                <?= $row['row_name']; ?>
                            </a>
                        <?php } ?>
                    </div>
            <?php } ?>                
        </div>
    </div>
</div>

<?php get_footer(); ?>