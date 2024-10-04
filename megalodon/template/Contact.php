<?php
/* Template name: Контакты */
get_header();
?>

<div class="container">
    <?php if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    } ?>

    <h1 class="page__title">Контакты</h1>

    <div class="contact__top">
        <div class="top__content">
            <div class="content__info">
                <div class="info__item">
                    <div class="circle__contact">
                        <svg width="16" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8 0C3.59 0 0 3.589 0 7.995c-.029 6.445 7.116 11.604 7.42 11.819a.998.998 0 0 0 1.16 0C8.884 19.599 16.03 14.44 16 8c0-4.411-3.589-8-8-8Zm0 17.735C6.39 16.427 1.98 12.441 2 8c0-3.309 2.691-6 6-6 3.31 0 6 2.691 6 6.005.021 4.437-4.388 8.423-6 9.73ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"
                                fill="#222" />
                        </svg>
                    </div>
                    <div class="item__inner">
                        <a class="item__inner-info" href="">
                            <h5>Производство:</h5>
                            <h6>Трикотажная 47 к.4</h6>
                        </a>
                        <a class="item__inner-info" href="">
                            <h5>Офис:</h5>
                            <h6>ул. Писарева, 125, этаж 1, офис 2</h6>
                        </a>
                    </div>
                </div>
                <div class="info__item">
                    <div class="circle__contact">
                        <a href="mailto:info@megabelt.ru">
                            <svg width="20" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18 0H2C.897 0 0 .897 0 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V2c0-1.103-.897-2-2-2Zm0 2v.511l-8 6.223-8-6.222V2h16ZM2 14V5.044l7.386 5.745a.994.994 0 0 0 1.228 0L18 5.044 18.002 14H2Z"
                                    fill="#222" />
                            </svg>
                        </a>
                    </div>
                    <a class="item__inner-info" href="mailto:info@megabelt.ru">
                        <h5>Почта:</h5>
                        <h6>info@megabelt.ru</h6>
                    </a>
                </div>
                <div class="info__item">
                    <div class="circle__contact">
                        <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.933 9.748a.945.945 0 0 0-1.339 0l-1.51 1.51c-.7-.208-2.005-.682-2.833-1.51-.828-.827-1.301-2.133-1.51-2.833l1.51-1.51a.946.946 0 0 0 0-1.34L4.463.279a.946.946 0 0 0-1.34 0L.556 2.846c-.36.36-.562.854-.555 1.36.022 1.348.379 6.032 4.07 9.723 3.692 3.692 8.377 4.048 9.726 4.071h.027c.5 0 .972-.197 1.33-.555l2.569-2.568a.947.947 0 0 0 0-1.34l-3.789-3.789Zm-.12 6.357c-1.182-.02-5.226-.337-8.403-3.516-3.188-3.187-3.497-7.246-3.516-8.404l1.9-1.899 2.448 2.45L5.018 5.96a.947.947 0 0 0-.258.864c.023.109.579 2.691 2.15 4.263 1.573 1.572 4.156 2.129 4.265 2.151a.939.939 0 0 0 .863-.256l1.226-1.225 2.449 2.45-1.9 1.898Z"
                                fill="#222" />
                        </svg>
                    </div>
                    <div class="item__inner">
                        <a class="item__inner-info" href="tel:+73832246212">
                            <h5>Телефоны:</h5>
                            <h6>+7 (383) 224 62 12</h6>
                        </a>
                        <a class="item__inner-info" href="tel:+73832240601">
                            <h5 class="space-hidden">ㅤ</h5>
                            <h6>+7 (383) 224 06 01</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content__btns">
                <h5 class="btns__title">Соц. сети и мессенджеры</h5>
                <div class="mini__btn">
                    <a class="watsupp__btn" href="">
                        <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.003 0A10.015 10.015 0 0 0 0 9.998a9.968 9.968 0 0 0 1.529 5.32l.237.377-1.01 3.689 3.786-.992.363.216A9.985 9.985 0 0 0 9.997 20h.002a10.017 10.017 0 0 0 10-9.996 9.929 9.929 0 0 0-2.924-7.072A9.935 9.935 0 0 0 10.003 0Zm5.881 14.293c-.25.703-1.452 1.341-2.029 1.428a4.108 4.108 0 0 1-1.894-.119 17.114 17.114 0 0 1-1.713-.632c-3.017-1.301-4.985-4.335-5.138-4.538-.149-.201-1.225-1.63-1.225-3.109 0-1.48.775-2.207 1.05-2.508a1.109 1.109 0 0 1 .804-.373c.2 0 .4.002.576.01.185.008.432-.07.675.516.251.602.854 2.08.928 2.23.074.15.125.326.026.527-.1.203-.149.325-.301.502-.149.177-.316.391-.45.528-.15.149-.307.311-.133.612.177.3.78 1.286 1.672 2.083 1.148 1.024 2.119 1.34 2.418 1.492.301.148.476.126.653-.076.174-.203.75-.878.952-1.177.2-.301.4-.251.677-.153.275.103 1.753.828 2.053.978.297.149.5.225.576.352.072.124.072.724-.177 1.427Z"
                                fill="#222" />
                        </svg>
                    </a>
                    <a class="youtube__btn" href="https://www.youtube.com/channel/UC-H_IglJCkEGu39mYVvxhNg"
                        target="_blank">
                        <svg width="25" height="25" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" fill="none"><g fill="#fff"><path d="M128.689 47.57H20.396v116.843h30.141V126.4h57.756l26.352 38.013h33.75l-29.058-38.188c9.025-1.401 15.522-4.73 19.493-9.985 3.97-5.255 5.956-13.664 5.956-24.875v-8.759c0-6.657-.721-11.912-1.985-15.941-1.264-4.029-3.43-7.533-6.498-10.686-3.249-2.978-6.858-5.08-11.19-6.481-4.332-1.226-9.747-1.927-16.424-1.927zm-4.873 53.08H50.537V73.321h73.279c4.15 0 7.038.7 8.482 1.927 1.444 1.226 2.347 3.503 2.347 6.832v9.81c0 3.503-.903 5.78-2.347 7.006s-4.331 1.752-8.482 1.752z" style="display:inline;fill:none;stroke:#222;stroke-width:12;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:none;stroke-opacity:1" transform="translate(1.605 -1.99)"/><path d="M162.324 45.568c5.52 0 9.998-4.477 9.998-10s-4.478-10-9.998-10c-5.524 0-10.002 4.477-10.002 10s4.478 10 10.002 10z" style="display:inline;fill:#222;fill-opacity:1;stroke:none;stroke-width:10.6667;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:none;stroke-opacity:1" transform="translate(1.605 -1.99)"/></g></svg>

                        <!-- <svg width="21" height="15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.607 2.203A2.506 2.506 0 0 0 17.845.437C16.279.007 10.014 0 10.014 0S3.75-.007 2.183.404A2.56 2.56 0 0 0 .417 2.182C.004 3.748 0 6.996 0 6.996s-.004 3.264.406 4.814c.23.857.905 1.534 1.763 1.765 1.582.43 7.83.437 7.83.437s6.265.007 7.831-.403a2.516 2.516 0 0 0 1.767-1.763c.414-1.565.417-4.812.417-4.812s.02-3.265-.407-4.831ZM8.01 10.005l.005-6 5.207 3.005-5.212 2.995Z"
                                fill="#222" />
                        </svg> -->
                    </a>
                </div>
            </div>
        </div>
        <div class="contact__map">
            <script type="text/javascript" charset="utf-8" async
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3c89453c0a9325c6676e07116aa90be9e270fb0bf3118a55ada59cad77e29c05&amp;width=620&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </div>


    <div class="contact__bottom">
        <h3 class="page__subtitle">Представитель в Республике Казахстан</h3>
        <div class="contact__bottom-flex">
            <div class="info__item">
                <div class="circle__bg">
                    <svg width="16" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8 0C3.59 0 0 3.589 0 7.995c-.029 6.445 7.116 11.604 7.42 11.819a.998.998 0 0 0 1.16 0C8.884 19.599 16.03 14.44 16 8c0-4.411-3.589-8-8-8Zm0 17.735C6.39 16.427 1.98 12.441 2 8c0-3.309 2.691-6 6-6 3.31 0 6 2.691 6 6.005.021 4.437-4.388 8.423-6 9.73ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"
                            fill="#222" />
                    </svg>
                </div>
                <a class="item__inner-info" href="">
                    <h5>Адрес:</h5>
                    <h6>г. Павлодар ТОО “РТИ Трейд”</h6>
                </a>

            </div>
            <div class="info__item">
                <div class="circle__bg">
                    <a href="mailto:shuvgrand@bk.ru">
                        <svg width="20" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18 0H2C.897 0 0 .897 0 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V2c0-1.103-.897-2-2-2Zm0 2v.511l-8 6.223-8-6.222V2h16ZM2 14V5.044l7.386 5.745a.994.994 0 0 0 1.228 0L18 5.044 18.002 14H2Z"
                                fill="#222" />
                        </svg>
                    </a>
                </div>
                <a class="item__inner-info" href="mailto:shuvgrand@bk.ru">
                    <h5>Почта:</h5>
                    <h6>shuvgrand@bk.ru</h6>
                </a>
            </div>
            <div class="info__item">
                <a href="tel:+77774491253">
                    <div class="circle__bg">
                        <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.933 9.748a.945.945 0 0 0-1.339 0l-1.51 1.51c-.7-.208-2.005-.682-2.833-1.51-.828-.827-1.301-2.133-1.51-2.833l1.51-1.51a.946.946 0 0 0 0-1.34L4.463.279a.946.946 0 0 0-1.34 0L.556 2.846c-.36.36-.562.854-.555 1.36.022 1.348.379 6.032 4.07 9.723 3.692 3.692 8.377 4.048 9.726 4.071h.027c.5 0 .972-.197 1.33-.555l2.569-2.568a.947.947 0 0 0 0-1.34l-3.789-3.789Zm-.12 6.357c-1.182-.02-5.226-.337-8.403-3.516-3.188-3.187-3.497-7.246-3.516-8.404l1.9-1.899 2.448 2.45L5.018 5.96a.947.947 0 0 0-.258.864c.023.109.579 2.691 2.15 4.263 1.573 1.572 4.156 2.129 4.265 2.151a.939.939 0 0 0 .863-.256l1.226-1.225 2.449 2.45-1.9 1.898Z"
                                fill="#222" />
                        </svg>
                    </div>
                </a>
                <a class="item__inner-info" href="tel:+77774491253">
                    <h5>Телефон:</h5>
                    <h6>+7 (777) 449 12 53</h6>
                </a>

            </div>

        </div>
    </div>


</div>

<?php get_footer(); ?>