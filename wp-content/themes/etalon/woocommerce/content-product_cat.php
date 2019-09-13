<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<li class="shop_list--item shop_list--item_parent" <?php //wc_product_cat_class( 'shop_list--item', $category ); ?>>
    <?php $img = wp_get_attachment_url(get_term_meta($category->term_id, 'thumbnail_id', true )); ?>
    <a href="<?php echo get_term_link($category)?>" >
        <div class="image" style="background-color: #eee">
            <img src="<?php echo $img?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" />
        </div>
    </a>
    <div class="text">
        <a href="<?php echo get_term_link($category)?>" class="name"><?php echo $category->name?></a>
        <a href="<?php echo get_term_link($category)?>" class="buy"><div class="btn">Подробнее</div></a>
    </div>
    <?
	/**
	 * woocommerce_before_subcategory hook.
	 *
	 * @hooked woocommerce_template_loop_category_link_open - 10
	 */
	//do_action( 'woocommerce_before_subcategory', $category );

	/**
	 * woocommerce_before_subcategory_title hook.
	 *
	 * @hooked woocommerce_subcategory_thumbnail - 10
	 */
	//do_action( 'woocommerce_before_subcategory_title', $category );

	/**
	 * woocommerce_shop_loop_subcategory_title hook.
	 *
	 * @hooked woocommerce_template_loop_category_title - 10
	 */
	//do_action( 'woocommerce_shop_loop_subcategory_title', $category );

	/**
	 * woocommerce_after_subcategory_title hook.
	 */
	//do_action( 'woocommerce_after_subcategory_title', $category );

	/**
	 * woocommerce_after_subcategory hook.
	 *
	 * @hooked woocommerce_template_loop_category_link_close - 10
	 */
	//do_action( 'woocommerce_after_subcategory', $category ); ?>
</li>
