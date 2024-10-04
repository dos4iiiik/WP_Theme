<div class="post-lents recomendation">
    <?php get_template_part( 'template-parts/content', 'sidenav' ); ?>

    <div class="recomendation__content">
    <h2 class="page__subtitle">Tипы опор</h2>
            <div class="recommendation__text">По которым может передвигаться лента</div>
            <ul class="recommendation__list">
                <li>НАСТИЛ (т.е. металлический лист)</li>
                <li>РОЛИКОВАЯ ОПОРА</li>
                <li>СМЕШАННЫЙ НАСТИЛ (роликовая опора в сочетании с настилом)</li>
                <li>ЖЕЛОБКОВАЯ ОПОРА (ролики либо настил).</li>
            </ul>

            <div class="recommendation__types-flex">
            <?php 
                $items = get_field('type');
                foreach ($items as $item){ ?> 
                    <div class="types-flex__item">
                            <div class="types__item-left">
                                <div class="types__item-title"><?= $item['ttle']; ?></div>
                                <img src="<?= $item['man_mg']; ?>" alt="">
                            </div>
                            <div class="types__item-right">
                                <div class="types__item-view">
                                    <div class="types__item-text">Вид сборку:</div>
                                    <img src="<?= $item['mge_1']; ?>" alt="">
                                </div>
                                <div class="types__item-view">
                                    <div class="types__item-text">Вид спереди:</div>
                                    <img src="<?= $item['mge_2']; ?>" alt="">
                                </div>
                            </div>
                        </div>
            <?php   } ?>
            </div>
    </div>

</div>