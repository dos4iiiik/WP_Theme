<?= get_header(); ?>

<div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>
    <h1 class="page__title">Новости</h1>

    <div class="archive__news">
            <?php
            $query = new WP_Query(
                array(
                    'post_type' => 'news',
                    'suppress_filters' => true,

                )
            );

            // Цикл
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    ?>
                    <div class="archive__news-card">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(array( 500, 300 ), array('class' => 'archive__news-img')); ?>
                            <div class="archive__news-body">
                                <h4 class="archive__news-title"><?php the_title(); ?></h4>
                                <div class="archive__news-date">
                                    <svg width="17" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M11.7 1.8h2.7c.993 0 1.8.807 1.8 1.8v12.6c0 .993-.807 1.8-1.8 1.8H1.8C.807 18 0 17.193 0 16.2V3.6c0-.993.807-1.8 1.8-1.8h2.7V0h1.8v1.8h3.6V0h1.8v1.8ZM1.8 4.5v11.7h12.602L14.4 4.5H1.8Zm10.8 1.8h-9v1.8h9V6.3ZM8.1 9.9H3.6v1.8h4.5V9.9Z"
                                            fill="#E31E25" />
                                    </svg>
                                    <small><?php the_time('j F Y'); ?></small>
                                </div>
                                <?php the_excerpt(); ?>
                            </div>
                        </a>
                    </div>
                <?php }
            } ?>
            <?php wp_reset_postdata(); ?>
    </div>
</div>

<?= get_footer(); ?>