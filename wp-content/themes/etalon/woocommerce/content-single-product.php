<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<section class="page_detail container">
    <a href="/akczii" class="sale_banner"></a>
    <div class="product">
        <div class="breadcrumbs">
            <?php echo  woocommerce_breadcrumb()?>
        </div>
        <div class="product_detail" id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

    <div class="product_detail--image">
	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>
    </div>

	<div class="summary entry-summary product_detail--text">
		<?php
        the_title( '<div class="title">', '</div>' );
        ?>
        <div class="params">
            <?php
                $pack_length = get_post_meta($post->ID, 'pack_length', true);
                $pack_width = get_post_meta($post->ID, 'pack_width', true);
                $pack_height = get_post_meta($post->ID, 'pack_height', true);
            ?>
            <?php if(!(strlen($pack_length) === 0 & strlen($pack_width) === 0 & strlen($pack_height) === 0)):?>
                Размеры:<br/>
            <?php endif;?>
            <?php if(strlen($pack_width) > 1):?>
                Ширина: <span><?php echo $pack_width?> мм</span><br/>
            <?php endif;?>
            <?php if(strlen($pack_length) > 1):?>
                Высота: <span><?php echo $pack_length?> мм</span><br/>
            <?php endif;?>
            <?php if(strlen($pack_height) > 1):?>
                Глубина: <span><?php echo $pack_height?> мм</span><br/>
            <?php endif;?>
            <?php cw_woo_attribute();?>
        </div>
        <div class="description">
            <?php  echo apply_filters( 'woocommerce_short_description', $post->post_excerpt );?>
        </div>
        <div class="bottom">
            <div class="colors">
                Цвета: <br />
                <div class="items">
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item"></div>
                    <div class="item"></div>
                </div>
            </div>
            <div class="button"><div class="btn">Заказать</div></div>
        </div>
        <?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		//do_action( 'woocommerce_single_product_summary' );
		?>
	</div>


</div>
        <div>
            <?php
            /**
             * Hook: woocommerce_after_single_product_summary.
             *
             * @hooked woocommerce_output_product_data_tabs - 10
             * @hooked woocommerce_upsell_display - 15
             * @hooked woocommerce_output_related_products - 20
             */
            do_action( 'woocommerce_after_single_product_summary' );
            ?>
            <?php do_action( 'woocommerce_after_single_product' ); ?>
        </div>
    </div>
</section>

