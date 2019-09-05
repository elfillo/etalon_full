<?php get_header()?>
    <section class="sale_banner">
        <div class="container">
            <a href="/akczii">
                <div class="sale_banner__tex top">спецпредложения на кухни</div>
                <div class="sale_banner__logo"><img src="<?php echo get_template_directory_uri() ?>/img/banners/promo_log.png" alt="banner"></div>
                <div class="sale_banner__text bottom">
                    <span>чтобы завтракать в удовольствие</span>
                    <p>Предложение действительно с 12.08.2019г. до 12.10.2019г. <br/> Подробности на сайте www.etalon-irkutsk.ru и у продавцов.</p>
                </div>
            </a>
        </div>
    </section>
    <section class="partners">
        <div class="container">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php if (have_posts()): query_posts('category_name=partners'); while (have_posts()): the_post(); ?>
                        <div class="swiper-slide">
                            <a href="/akczii" class="partner">
                                <div class="partner__img">
                                    <?php the_post_thumbnail()?>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; endif;?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next partners_arrow partners_arrow--right"></div>
                <div class="swiper-button-prev partners_arrow partners_arrow--left"></div>
            </div>
            <div class="partners_button">
<!--                <div class="btn">Подробнее</div>-->
            </div>
        </div>
    </section>
    <section class="promo_product">
        <div class="container">
            <div class="shop">
                <?php echo do_shortcode('[products]');?>
                <div class="shop--show_all">
                    <!--<div class="btn btn--dark btn--big">Посмотреть все товары</div>-->
                </div>
            </div>
        </div>
    </section>
    <section class="help_promo container">
        <div class="text">
            <div class="title">
                Мебельный центр “Эталон”
            </div>
            <p>
                <span>Мы делаем все для того, чтобы наши клиенты были довольны своей новой мебелью!</span>

                Для этого мы выбираем лучших поставщиков, расширяем ассортимент - Вы сможете найти искомое в любых вариантах исполнения. Поэтому мы говорим Вам: у нас есть больше, чем видно. Мы стараемся сделать так, чтобы во всём центре не было повторяющихся образцов мебели всех категорий.
            </p>
            <div class="button">
                <div class="btn btn--big btn--dark">Хочу подобрать мебель</div>
            </div>
        </div>
        <div class="banner">
            Мы поможем<br/>
            подобрать<br/>
            мебель<br/>
            для Вас!
        </div>
    </section>
<?php get_footer()?>