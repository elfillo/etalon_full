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
        <?php
        $orderby = 'name';
        $order = 'asc';
        $hide_empty = false ;
        $cat_args = array(
            'orderby'    => $orderby,
            'order'      => $order,
            'hide_empty' => $hide_empty,
            'with_thumbnail' => true
        );
        $product_categories = get_terms( 'product_cat', $cat_args );
        ?>
        <div class="shop_list category_list">
            <?php foreach ($product_categories as $key => $category):?>
                <?php $img = wp_get_attachment_url(get_term_meta($category->term_id, 'thumbnail_id', true )); ?>
                <div class="shop_list--item">
                    <a href="<?php echo get_term_link($category)?>" >
                        <div class="image" style="background-color: #00a0d2">
                            <img src="<?php echo $img?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" />
                        </div>
                    </a>
                    <div class="text">
                        <a href="<?php echo get_term_link($category)?>" class="name"><?php echo $category->name?></a>
                        <a href="<?php echo get_term_link($category)?>" class="buy"><div class="btn">Подробнее</div></a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
