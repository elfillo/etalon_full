<?php
//поддержка вукомерс
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


add_action( 'woocommerce_product_options_general_product_data', 'art_woo_add_custom_fields' );
function art_woo_add_custom_fields() {
    global $product, $post;
    echo '<div class="options_group">';// Группировка полей

    // Тектовая область
    /*woocommerce_wp_textarea_input( array(
        'id'            => '_textarea', // Идентификатор поля
        'label'         => 'Список материалов', // Заголовок поля
        'placeholder'   => 'Металл, Стекло, и прочее ...', // Надпись внутри поля
        'class'         => 'textarea-field', // Произвольный класс поля
        'style'         => 'width: 70%;', // Произвольные стили для поля
        'wrapper_class' => 'wrap-textarea', // Класс обертки поля
        'desc_tip'      => 'true', // Включение подсказки
        'description'   => 'На странице будут выводиться так, как будет записано сюда',// Описение поля
        'name'          => 'textarea-field', // Имя поля
        'rows'          => '5', //Высота поля в строках текста.
        'col'           => '10', //Ширина поля в символах.
    ) );*/
    ?>

    </div>
    <div class="options_group">
        <h2><strong>Габариты</strong></h2>
        <p class="form-field custom_field_type">
            <label for="custom_field_type"><?php echo 'Размер (мм)'; ?></label> <span class="wrap">
      <input placeholder="Высота" class="input-text" type="text" name="_pack_length"
             value="<?php echo get_post_meta( $post->ID, 'pack_length', true ); ?>"
             style="width: 15.75%;margin-right: 2%;"/>
      <input placeholder="Ширина" class="input-text" type="text" name="_pack_width"
             value="<?php echo get_post_meta( $post->ID, 'pack_width', true ); ?>"
             style="width: 15.75%;margin-right: 2%;"/>
      <input placeholder="Глубина" class="input-text" type="text" name="_pack_height"
             value="<?php echo get_post_meta( $post->ID, 'pack_height', true ); ?>"
             style="width: 15.75%;margin-right: 0;"/>
   </span>
        </p>
    </div>
    <?php
}

add_action( 'woocommerce_process_product_meta', 'art_woo_custom_fields_save', 10 );
function art_woo_custom_fields_save( $post_id ) {

    // Вызываем объект класса
    $product = wc_get_product( $post_id );

    // Сохранение области тектса
    $textarea_field = isset( $_POST['textarea-field'] ) ?  $_POST['textarea-field'] : '';
    $product->update_meta_data( '_textarea', $textarea_field );


    // Сохранение габариты
    $pack_length = isset( $_POST['_pack_length'] ) ? $_POST['_pack_length'] : '';
    $pack_width  = isset( $_POST['_pack_width'] ) ? ( $_POST['_pack_width'] ) : '';
    $pack_height = isset( $_POST['_pack_height'] ) ? ( $_POST['_pack_height'] ) : '';

    $product->update_meta_data( 'pack_length', $pack_length );
    $product->update_meta_data( 'pack_width', $pack_width );
    $product->update_meta_data( 'pack_height', $pack_height );

    // Сохраняем все значения
    $product->save();

}


//add random sort

add_filter( 'woocommerce_get_catalog_ordering_args', 'custom_woocommerce_get_catalog_ordering_args' );

function custom_woocommerce_get_catalog_ordering_args( $args ) {
    $orderby_value = isset( $_GET['orderby'] ) ? woocommerce_clean( $_GET['orderby'] ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );

    if ( 'random_list' == $orderby_value ) {
        $args['orderby'] = 'rand';
        $args['order'] = '';
        $args['meta_key'] = '';
    }
    return $args;
}

add_filter( 'woocommerce_default_catalog_orderby_options', 'custom_woocommerce_catalog_orderby' );
add_filter( 'woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby' );

function custom_woocommerce_catalog_orderby( $sortby ) {
    $sortby['random_list'] = 'Random';
    return $sortby;
}

function etalon_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'etalon_setup' );


//view for parent category (for product)
function woocommerce_content() {

    if ( is_singular( 'product' ) ) {
        while ( have_posts() ) :
            the_post();
            wc_get_template_part( 'content', 'single-product' );
        endwhile;

    } else {
        ?>
        <div class="sidebar">
            <!--<div class="sidebar_menu">
                <?php /*sideBar_menu()*/?>
            </div>-->
            <div class="sidebar_menu">
                <?php include_once ('widgets.php');?>
            </div>
        </div>
        <div class="content">
        <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

            <h1 class="page-title"><?php //woocommerce_page_title(); ?></h1>
            <div class="breadcrumbs">
                <?php echo  woocommerce_breadcrumb()?>
            </div>

        <?php endif; ?>

        <?php do_action( 'woocommerce_archive_description' ); ?>


        <?php if ( woocommerce_product_loop() ) : ?>

            <?php //do_action( 'woocommerce_before_shop_loop' ); ?>

            <?php woocommerce_product_loop_start(); ?>

            <?php if ( wc_get_loop_prop( 'total' ) ) : ?>
                <?php while ( have_posts() ) : ?>
                    <?php the_post(); ?>
                    <?php wc_get_template_part( 'content', 'product' ); ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php woocommerce_product_loop_end(); ?>

            <?php do_action( 'woocommerce_after_shop_loop' ); ?>

            <?php
        else :
            do_action( 'woocommerce_no_products_found' );
        endif;
        echo '</div>';
    }
}

function cw_woo_attribute(){
    global $product;
    $attributes = $product->get_attributes();

    if ( ! $attributes ) {
        return;
    }

    $display_result = '';

    foreach ( $attributes as $attribute ) {


        if ( $attribute->get_variation() ) {
            continue;
        }
        $name = $attribute->get_name();

        if ( $attribute->is_taxonomy() ) {

            $terms = wp_get_post_terms( $product->get_id(), $name, 'all' );

            $cwtax = $terms[0]->taxonomy;

            $cw_object_taxonomy = get_taxonomy($cwtax);

            if ( isset ($cw_object_taxonomy->labels->singular_name) ) {
                $tax_label = $cw_object_taxonomy->labels->singular_name;
            } elseif ( isset( $cw_object_taxonomy->label ) ) {
                $tax_label = $cw_object_taxonomy->label;
                if ( 0 === strpos( $tax_label, 'Product ' ) ) {
                    $tax_label = substr( $tax_label, 8 );
                }
            }
            $display_result .= $tax_label . ': ';
            $tax_terms = array();

            foreach ( $terms as $term ) {
                $link = '/'.substr($term->taxonomy, 3);
                $link .= '/'.$term->slug;

                $single_term = '<a href="'.$link.'" target="_blank">'.esc_html( $term->name ).'</a>';
                array_push( $tax_terms, $single_term );
            }

            $display_result .= implode(', ', $tax_terms) .  '<br />';

        } else {
            $display_result .= $name . ': ';
            $display_result .= esc_html( implode( ', ', $attribute->get_options() ) ) . '<br />';
        }
    }
    echo $display_result;
}

