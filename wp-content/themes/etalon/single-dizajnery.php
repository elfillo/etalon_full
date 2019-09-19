<?php get_header()?>
<?php $id = get_the_ID()?>
<section class="page_detail container">
    <div class="sale_banner"></div>
    <div class="product">
        <div class="breadcrumbs">
            <a href="/designers/">Дизайнеры</a>
        </div>
        <div class="product_detail">
            <div class="product_detail--image">
                <?php the_post_thumbnail()?>
            </div>
            <div class="product_detail--text">
                <div class="title"><?php the_title()?></div>
                <div class="params">
                    Проектов: <?php echo get_post_meta($id, 'project_count', true)?> <br/><br/>
                    Опыт работы: <?php echo get_post_meta($id, 'experience', true)?> лет<br/><br/>
                    Рейтинг: <br/><br/>
                    <div class="flex rating_wrapper">
                        <?php
                        $rating = (int)get_post_meta($id, 'rating', true);
                        $star = '<span class="red_star"></span>';
                        for($i = 0; $i < $rating; $i++){
                            echo $star;
                        }
                        ?>
                    </div>
                </div>
                <div class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                </div>
                <div class="bottom">
                    <div class="button"><div class="btn">Связаться!</div></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer()?>
