<?= get_header(); ?>

<div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>
    <h1 class="page__title"><?= single_term_title(); ?></h1>
    <div class="components-page__content">
        <?php get_template_part( 'template-parts/content', 'sidenav' ); ?>
        <div class="taxonomy__components-content">    
            <?php    
                
                $query = new WP_Query( array(
                    'post_type'      => 'components',
                    'posts_per_page' => -1,
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'catalog-components',
                            'field'    => 'id',
                            'terms'    => get_queried_object_id(),
                        ),
                    ),
                ) );
            
                
                if($query->have_posts()){
                    
                    echo '<div class="taxonomy__components-flex">';
                    while($query->have_posts()){ $query->the_post();
                        echo '<a class="taxonomy__components-item" href="' . get_permalink() . '">' .
                            '<div class="fa-icon-bg"><i class="fa-solid fa-certificate"></i></div>' . '<h4 class="taxonomy__components-item-title">' . get_the_title() . '</h4>' . '</a>';
                    }

                    if ( get_field('links_pdf', 'catalog-components_' . get_queried_object()->term_id) ){
                        $links = get_field('links_pdf', 'catalog-components_' . get_queried_object()->term_id);
                
                        foreach ($links as $link){
                            
                            echo '<a class="taxonomy__components-item" href="' . $link['pdf'] . '" target="_blank" >' .
                            '<div class="fa-icon-bg"><i class="fa-solid fa-certificate"></i></div>' . '<h4 class="taxonomy__components-item-title">' . $link['pdf_text'] . '</h4>' . '</a>';
                        }
                    }
                    echo '</div>';
                    // восстанавливаем глобальную переменную $post
                    wp_reset_postdata();
                }else{
                    if ( get_field('links_pdf', 'catalog-components_' . get_queried_object()->term_id) ){
                        echo'<div class="taxonomy__components-flex">';
                        $links = get_field('links_pdf', 'catalog-components_' . get_queried_object()->term_id);
                
                        foreach ($links as $link){
                            
                            echo '<a class="taxonomy__components-item" href="' . $link['pdf'] . '" target="_blank" >' .
                            '<div class="fa-icon-bg"><i class="fa-solid fa-certificate"></i></div>' . '<h4 class="taxonomy__components-item-title">' . $link['pdf_text'] . '</h4>' . '</a>';
                        }
                        echo '</div>';
                    }
                }
                
                
            ?>

            
            

            
            <div class="taxonomy__components-text">
                <?= get_field( 'category__text','catalog-components_' . get_queried_object_id() ); ?>
            </div> 
        </div>

    </div>
</div>

<?= get_footer(); ?>