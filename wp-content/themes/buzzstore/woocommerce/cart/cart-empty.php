<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

/*
 * @hooked wc_empty_cart_message - 10
 */

?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 upper-page-title">
            <h1>Your Basket</h1>
        </div>
    </div>
</div>

<div id="basket_order_timeline">

    <div class="ask-wb-nav nav4">
        <ul class="carousel-indicators">
            <li data-target="#caren-slider" class="active">
                <i class="fa ok"></i>
                <div class="timeline-label">Your Basket</div>
            </li>
            <li data-target="#caren-slider">
                <i class="fa ok"></i>
                <div class="timeline-label">Personal Info</div>
            </li>
<!--            <li data-target="#caren-slider"><i class="fa ok"></i>-->
<!--                <div class="timeline-label">Shipment</div>-->
<!--            </li>-->
            <li data-target="#caren-slider"><i class="fa ok"></i>
                <div class="timeline-label">Order Complete</div>
            </li>
        </ul>
    </div>
</div>

<?php
do_action( 'woocommerce_cart_is_empty_custom' );

//if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
<!--	<p class="return-to-shop">-->
<!--		<a class="button wc-backward" href="--><?php //echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?><!--">-->
<!--			--><?php //esc_html_e( 'Return to shop', 'woocommerce' ); ?>
<!--		</a>-->
<!--	</p>-->
<?php //endif; ?>

