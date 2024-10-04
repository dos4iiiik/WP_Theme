<?= get_header(); ?>

<article id="post-<?php the_ID(); ?>" ></article>
    <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>        
    <?php the_title( '<h1 class="post__title">', '</h1>' ); ?>

    <?php
        if ( is_single(573) ){ include 'single-573.php'; }
        elseif ( is_single(688) ){ include 'single-688.php'; }
        elseif ( is_single(689) ){ include 'single-689.php'; }
        else{ 
        
        ?>
        <div class="post-components-content">
            <?php get_template_part( 'template-parts/content', 'sidenav' ); ?>
            <div class="post-content">
                <?php the_content(); ?>

                <?php
                    if ( get_field('content' )){
                        $fields = get_field('content' );
                        foreach ($fields as $field ){ ?> 
                            <h4 class="yhod-subtitle"><?= $field['subtitle']; ?></h4>
                            <div class="yhod-items">
                                <?php 
                                    $lines = $field['line'];
                                    foreach ($lines as $line ){ ?>
                                        <div class="yhod-item">
                                            <p><?= $line['text']; ?></p>
                                            <?php
                                                if ( $line['img'] ){ ?>
                                                    <div class="yhod-item-img-bg"><img src="<?= $line['img']; ?>"></div>
                                            <?php    }
                                            ?>
                                            
                                        </div>
                                    <?php
                                    }
                                ?>

                            </div>
                            <?php
                        }
                        
                    }
                ?>
            </div>
        </div>
    <?php } ?>

    <?php get_template_part( 'template-parts/content', 'consultation' ); ?>
    </div>
    
</article>

<?= get_footer(); ?>