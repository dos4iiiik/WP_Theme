<?= get_header(); ?>
<div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>
    <h1 class="page__title">Комплектующие</h1>
    <div class="components-page__content">
        <?php get_template_part( 'template-parts/content', 'sidenav' ); ?>

        <div class="components-page__categoryes">
            <?php
                $args = array(
                    'taxonomy' => 'catalog-components',          // указываем таксономию товаров
                    'hide_empty' => false,                      // показываем пустые категории
                    'parent' => 0,                              // фильтруем только категории без родительской категории
                    // 'include' => array(12, 11, 10, 9, ),
                    'orderby' => 'id',
                    'order' => 'DESC',
                    'exclude' => array(14),
    
                );
                $terms = get_terms($args);                    // получаем список категорий
    
                if ($terms && !is_wp_error($terms)):      // если категории найдены
                    foreach ($terms as $term) {               // перебираем категории
                        $term_link = get_term_link($term);    // получаем URL категории
                        ?>
                        <div class="components-page__category">
                            <a href="<?php echo esc_url($term_link); ?>">
                                <div class="category__gradient">
                                    
                                    <img src="<?= get_field('ctegory-img', 'catalog-components_' . $term->term_id); ?>">

                                </div>
                                <h3><?php echo esc_html($term->name); ?></h3>                  
                            </a>
                        </div>
                        <?php }
            endif; ?>

            <?php
                $term_id = 14;
                $taxonomy = 'catalog-components'; // С версии 4.4. параметр стал не обязательным.
                $term = get_term( $term_id, $taxonomy );
                $term_link = get_term_link($term);
            ?>
                <div class="components-page__category" style="height:fit-content;">
                    <a href="<?php echo esc_url($term_link); ?>">
                        <h3><?php echo esc_html($term->name); ?></h3>                  
                    </a>
                </div>

        </div>
    </div>
</div>


<?= get_footer(); ?>