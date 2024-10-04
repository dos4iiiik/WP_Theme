<?= get_header(); ?>
 
<section id="main-slider">
    <div class="swiper1">
        <div class="swiper-wrapper">
            <?php
            $slides = get_field('gallery');
            foreach ($slides as $slide) {
                ?>
                <div style="position: relative; background: url(<?= $slide['slide']; ?>) center center / cover no-repeat;"
                    class="swiper-slide">
                    <div class="container">
                        <div class="main-slider-content">
                            <?= $slide['text']; ?>
                            <div class="main-slider__buttons">
                                <button class="slider__btn more-btn"
                                    onclick="location.href='<?= $slide['btn-link']; ?>'">Подробнее</button>
                                <!-- <button class="slider__btn quest-list" onclick="document.getElementById('my-modal').classList.add('open')"><span>Опросный лист<span></button> -->
                                <!-- <a class="slider__btn project__link" href=" https://rutube.ru/channel/43535889/" target="_blank">Реализованные проекты</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="swiper-button-prev swiper-button-prev-project"></div>
        <div class="swiper-button-next swiper-button-next-project"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<section class="about-company">
    <div class="container">
        <h3 class="section__title">О компании</h3>
        <?php get_template_part( 'template-parts/content', 'about' ); // entry-video.php в директории 'parts' ?>
    </div>
</section>

<section class="complect">
    <div class="container">
        <div class="title__flex">
            <h3 class="section__title">Комплектующие</h3>
            <div class="btns__wrap">
                <button class="look-btn" onclick="location.href='https://megabelt.testpronaiti.ru/components/';" >Смотреть все</button>
                <button class="opros-btn" id="open-modal-btn-opros">Информация для размещения заказа</button>
            </div>     
        </div>
        <div class="complect__flex">
            
            <?php

            $args = array(
                'taxonomy' => 'catalog-components',          // указываем таксономию товаров
                'hide_empty' => false,                      // показываем пустые категории
                'parent' => 0,                              // фильтруем только категории без родительской категории
                // 'include' => array(12, 11, 10, 9, ),
                'exclude' => array(14),
                'orderby' => 'id',
                'order' => 'DESC',

            );
            $terms = get_terms($args);                    // получаем список категорий

            if ($terms && !is_wp_error($terms)):      // если категории найдены
                foreach ($terms as $term) {               // перебираем категории
                    $term_link = get_term_link($term);    // получаем URL категории
                    
                    ?>
                    <div class="complect__flex-item">
                        <a href="<?php echo esc_url($term_link); ?>">
                            <div class="item__gradient">
                                <img src="<?= get_field('ctegory-img', 'catalog-components_' . $term->term_id); ?>">
                            </div>
                            <h3><?php echo esc_html($term->name); ?></h3>                  
                        </a>
                    </div>

                <?php }
            endif; ?>
        </div>
    </div>
</section>

<section class="stages">
    <div class="container">
        <h3 class="section__title">Этапы работ</h3>
        <?php get_template_part( 'template-parts/content', 'stages' ); ?>
    </div>
</section>

<section class="news">
    <div class="container">
        <div class="title__flex">
            <h3 class="section__title">Новости</h3>
            <button class="look-btn" onclick="location.href='https://megabelt.testpronaiti.ru/news/';">Смотреть все</button>
        </div>
        <div class="news__flex">
            <?php
            $query = new WP_Query(
                array(
                    'posts_per_page' => 3,
                    'post_type' => 'news',
                )
            );

            // Цикл
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    ?>
                    <div class="news__card">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', array('class' => 'news-img')); ?>
                            <div class="news-body">
                                <h4 class="news-title"><?php the_title(); ?></h4>
                                <div class="news-date">
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
</section> 


<section class="qa">
    <div class="container">
        <div class="qa__bg">
            <div class="qa__text">
                <h4 class="qa__text-big">Задайте вопрос нашим специалистам</h4>
                <p class="qa_text-small">Оставьте заявку на бесплатную консультацию и мы обязательно свяжемся с Вами!
                </p>
            </div>
            <div class="cap">
                <?= do_shortcode('[contact-form-7 id="4aa514c" title="Задать вопрос"]'); ?>
            </div>

        </div>
    </div>
</section>



<script>
    jQuery(document).on('ready', function () {
         // Открыть модальное окно опросника
        document.getElementById("open-modal-btn-opros").addEventListener("click", function() {
            document.getElementById("inform").classList.add("open")
        })

        // Закрыть модальное окно опросника
        document.getElementById("close-inform").addEventListener("click", function () {
            document.getElementById("inform").classList.remove("open")
        })

        window.addEventListener('keydown', (e) => {
            if (e.key === "Escape") {
                document.getElementById("inform").classList.remove("open")
            }
        });
        document.querySelector("#inform .modal__box").addEventListener('click', event => {
            event._isClickWithInModal = true;
        });
        document.getElementById("inform").addEventListener('click', event => {
            if (event._isClickWithInModal) return;
            event.currentTarget.classList.remove('open');
        });

        $("#files").change(function() {
            filename = this.files[0].name;
            console.log(filename);
            $('.file_form').html('');
            $('.file_form').append('<i class=\"fa fa-paperclip\" aria-hidden=\"true\"></i>' + filename);
        });
    })
</script>
<?= get_footer(); ?>