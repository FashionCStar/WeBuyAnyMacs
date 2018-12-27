<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters( 'woocommerce_single_product_image_gallery_classes', array(
	'woocommerce-product-gallery',
	'woocommerce-product-gallery--' . ( $product->get_image_id() ? 'with-images' : 'without-images' ),
	'woocommerce-product-gallery--columns-' . absint( $columns ),
	'images',
) );
?>


<div class="row">
    <div class="col-md-4">
        <div class="img-pro">
            <?php
            if ( $product->get_image_id() ) {
                $img_src = wc_get_gallery_image( $post_thumbnail_id, true );
            } else {
                $img_src  = '<div class="woocommerce-product-gallery__image--placeholder">';
                $img_src .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
                $img_src .= '</div>';
            }

            $available_variations = $product->get_available_variations();
            $variation_id1=$available_variations[0]['variation_id'];
            $variable_product1= new WC_Product_Variation( $variation_id1 );
            $regular_price = $variable_product1 ->regular_price;

            $price = $regular_price;

    //
    //		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $img_src, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
    //
    //		do_action( 'woocommerce_product_thumbnails' );
            ?>
            <img src="<?php echo $img_src ?>">
            <div class="price-item">We Pay You <br>
                <span id="user_calculated_price">£<i class="in-price-final"><?php echo $price ?></i></span>
            </div>
        </div>

        <div class="info-pro">
            <?php the_title( '<div class="pro-name-down">', '</div>' ); ?>

            <?php $attributes = $product->get_attributes(); ?>
            <?php foreach ( $attributes as $attribute ) : ?>
                <span><?php if (wc_attribute_label( $attribute->get_name() ) != "Condition") {
                    echo wc_attribute_label($attribute->get_name()); ?></span>
                    <?php
                    $value = $product->get_attribute($attribute->get_taxonomy());
                    echo $value;
                }
                ?>
            <br>
            <?php endforeach; ?>
        </div>
	</div>
