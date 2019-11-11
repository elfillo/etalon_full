<?php get_header(); ?>
    <div class="container flex flex_sb">
        <div class="sidebar">
            <div class="sidebar_menu">
                <?php sideBar_menu()?>
            </div>
            <div class="sidebar_news">
                <div class="title">Новости</div>
                <?php if (have_posts()): query_posts('category_name=news'); while (have_posts()): the_post(); ?>
                    <div class="sidebar_news--item">
                        <div class="cover">
                            <?php the_post_thumbnail()?>
                        </div>
                        <div class="title"><?php the_title()?></div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="content">
            <!-- Swiper -->
            <div class="swiper-container sale-slider">
                <div class="swiper-wrapper">
                    <?php if (have_posts()): query_posts('category_name=main_page_slider'); while (have_posts()): the_post(); ?>
                        <div class="swiper-slide"><?php the_post_thumbnail()?></div>
                    <?php endwhile; endif; ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <?php
                $cat_args = array(
                    'orderby'    => 'name',
                    'order'      => 'asc',
                    'hide_empty' => false,
                    'with_thumbnail' => true,
                    'parent' => 0
                );
                $product_categories = get_terms( 'product_cat', $cat_args );
            ?>
            <div class="shop_list category_list">
                <?php foreach ($product_categories as $key => $category):?>
                <?php if($category->name != 'Uncategorized'):?>
                <?php $img = wp_get_attachment_url(get_term_meta($category->term_id, 'thumbnail_id', true )); ?>
                <div class="shop_list--item">
                    <a href="<?php echo get_term_link($category)?>" >
                        <div class="image" <?php if(!$img){echo 'style="background-color: #eee"';} ?>>
                            <img src="<?php echo $img?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" />
                        </div>
                    </a>
                    <div class="text">
                        <a href="<?php echo get_term_link($category)?>" class="name"><?php echo $category->name?></a>
                        <a href="<?php echo get_term_link($category)?>" class="buy"><div class="btn">Подробнее</div></a>
                    </div>
                </div>
                <?php endif;?>
                <?php endforeach;?>
            </div>
        </div>
    </div>
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
            Мы поможем<br>
            подобрать<br>
            мебель<br>
            для Вас!
        </div>
    </section>
<?php get_footer(); ?>
