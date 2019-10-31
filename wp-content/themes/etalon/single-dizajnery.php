<?php get_header()?>
<?php $id = get_the_ID()?>
<section class="page_detail container">
    <div class="sale_banner"></div>
    <div class="designer">
        <div class="breadcrumbs">
            <a href="/designers/">Дизайнеры</a>
        </div>
        <div class="designer_detail flex">
            <div class="designer_detail--image">
                <?php the_post_thumbnail()?>
            </div>
            <div class="designer_detail--text">
                <div class="title"><?php the_title()?></div>
                <div class="position">Дизайнер</div>
                <div class="params">
                    <p>Проектов: <?php echo get_post_meta($id, 'project_count', true)?> </p>
                    <p>Опыт работы: <?php echo get_post_meta($id, 'experience', true)?> лет</p>
                    <p>Рейтинг:</p>
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
                <div class="button"><div class="btn">Связаться!</div></div>
            </div>
        </div>
        <div class="designer_detail flex">
            <div class="description">
                <span>О дизайнере:</span>
                <?php echo get_post_meta($id, 'designer_gallery', true); ?>
            </div>
            <div class="slogan"><?php the_excerpt()?></div>
        </div>
    </div>
</section>
<section class="designer_detail--gallery">
    <div class="title">Лучшие проекты:</div>
    <section class="gallery">
        <?php the_content()?>
    </section>
</section>
<?php get_footer()?>
