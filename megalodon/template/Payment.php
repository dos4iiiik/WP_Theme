<?php 
    /* Template name: Оплата и доставка */
    get_header(); 
?>

<div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } ?>

    <h1 class="page__title">Оплата и доставка</h1>

    <section class="payment">
        <h2 class="payment__title">Оплата</h2>
        <div class="payment__text">
            <?= get_field('payment_text'); ?>
        </div>
        <div class="pnd__cards payment__cards">
            <div class="pnd__card payment__card">
                <div class="pnd__card-cc ">
                    <svg width="48" height="48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M40 8H8c-2.206 0-4 1.794-4 4v24c0 2.206 1.794 4 4 4h32c2.206 0 4-1.794 4-4V12c0-2.206-1.794-4-4-4ZM8 12h32v4H8v-4Zm0 24V24h32.002l.002 12H8Z" fill="#fff"/><path d="M12 28h12v4H12v-4Z" fill="#fff"/></svg>
                </div>
                <div class="pnd__card-content">
                    <h4 class="pnd__card-title">Покупка по безналичному расчёту</h4>
                    <div class="pnd__card-text">
                        <?= get_field('payment_card_2_text'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="delivery">
        <h2 class="page__subtitle">Доставка</h2>
        <div class="pnd__cards">
            <div class="pnd__card delivery__card">
                <div class="pnd__card-content">
                    <?php $deliveryOne = get_field('delivery_1');?>
                    <!-- <h4 class="pnd__card-title">По Новосибирску</h4> -->
                    <div class="pnd__card-text">
                        <?php  
                            echo $deliveryOne['delivery_card_1_text'];
                        ?>
                       
                    </div>
                    <a href="tel:<?= $deliveryOne['delivery_number']; ?>" class="pnd__card-call">
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 2H8C4.691 2 2 4.691 2 8v12a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6Zm4 13c0 2.206-1.794 4-4 4H4V8c0-2.206 1.794-4 4-4h8c2.206 0 4 1.794 4 4v7Z" fill="#E31E25"/><path d="M9.5 13c.8284 0 1.5-.6716 1.5-1.5S10.3284 10 9.5 10 8 10.6716 8 11.5 8.6716 13 9.5 13ZM14.5 13c.8284 0 1.5-.6716 1.5-1.5s-.6716-1.5-1.5-1.5-1.5.6716-1.5 1.5.6716 1.5 1.5 1.5Z" fill="#E31E25"/></svg>
                        <span class="price">Стоимость доставки уточняйте по телефону</span>
                        <span class="phone">
                            <?= $deliveryOne['delivery_number']; ?>
                        
                    </span>                       
                    </a>
                </div>
            </div>
            <div class="pnd__card delivery__card">
                <div class="pnd__card-content">
                <?php $deliveryOne = get_field('delivery_2');?>
                    <h4 class="pnd__card-title"><? echo $deliveryOne['delivery_card_title']; ?></h4>
                    <div class="pnd__card-text">
                        <?php  
                            echo $deliveryOne['delivery_card_1_text'];
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</div>

<?php get_footer();?>