<?php get_header(); ?>
    <div class="container flex flex_sb">
        <div class="sidebar">
            <div class="sidebar_menu">
                <?php wp_nav_menu(array('theme_location'=>'cat_catalog', 'menu_class'=>'sidebar_menu--list') );?>
            </div>
        </div>
        <div class="content">
            <div class="breadcrumbs">
                <?php echo  woocommerce_breadcrumb()?>
            </div>
            <?php $designers = query_posts('post_type=designers');
            ?>
            <div class="designers_list">
                <?php foreach ($designers as $key => $designer):?>
                    <?php $img = wp_get_attachment_url(get_term_meta($designer->ID, 'thumbnail_id', true )); ?>
                    <div class="designers_list--item">
                        <a href="<?php echo get_term_link($designer)?>" >
                            <div class="image" style="background-color: #eee">
                                <?php echo get_the_post_thumbnail($designer->ID)?>
                            </div>
                        </a>
                        <div class="text">
                            <a href="<?php echo get_term_link($designer)?>" class="name"><?php echo $designer->post_title?></a>
                            <p>Проектов: <?php echo get_post_meta($designer->ID, 'project_count', true)?></p>
                            <p>Опыт работы: <?php echo get_post_meta($designer->ID, 'experience', true)?> лет</p>
                            <p>Рейтинг
                                <div class="flex rating_wrapper">
                                    <?php
                                        $rating = (int)get_post_meta($designer->ID, 'rating', true);
                                        $star = '<span class="red_star"></span>';
                                        for($i = 0; $i < $rating; $i++){
                                            echo $star;
                                        }
                                    ?>
                                </div>
                            </p>
                            <a href="<?php echo get_permalink($designer->ID)?>" class="buy"><div class="btn">Подробнее</div></a>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
