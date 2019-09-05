<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="shop_list--item">
    <a href="<?php echo get_post_permalink()?>">
        <div class="image">
            <?php the_post_thumbnail()?>
        </div>
    </a>
    <div class="text">
        <a href="<?php echo get_post_permalink()?>" class="name"><?php echo the_title()?></a>
        <!--<div class="material">Материал: <?php /*echo get_post_meta($post->ID, '_textarea', true)*/?></div>-->
        <div class="color">
            <span>Цвета:</span>
            <div class="items">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
        </div>
        <a href="<?php echo get_post_permalink()?>" class="buy"><div class="btn">Подробнее</div></a>
    </div>
</div>
