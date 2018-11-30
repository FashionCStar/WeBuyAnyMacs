<?php
/**
 * Checkout coupon form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-coupon.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.4
 */

defined( 'ABSPATH' ) || exit;

if ( ! wc_coupons_enabled() ) { // @codingStandardsIgnoreLine.
	return;
}

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
            <li data-target="#caren-slider" >
                <i class="fa ok"></i>
                <div class="timeline-label">Your Basket</div>
            </li>
            <li data-target="#caren-slider" class="active">
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


<!--<div class="woocommerce-form-coupon-toggle">-->
<!--	--><?php //wc_print_notice( apply_filters( 'woocommerce_checkout_coupon_message', __( 'Have a coupon?', 'woocommerce' ) . ' <a href="#" class="showcoupon">' . __( 'Click here to enter your code', 'woocommerce' ) . '</a>' ), 'notice' ); ?>
<!--</div>-->
<!---->
<!--<form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">-->
<!---->
<!--	<p>--><?php //esc_html_e( 'If you have a coupon code, please apply it below.', 'woocommerce' ); ?><!--</p>-->
<!---->
<!--	<p class="form-row form-row-first">-->
<!--		<input type="text" name="coupon_code" class="input-text" placeholder="--><?php //esc_attr_e( 'Coupon code', 'woocommerce' ); ?><!--" id="coupon_code" value="" />-->
<!--	</p>-->
<!---->
<!--	<p class="form-row form-row-last">-->
<!--		<button type="submit" class="button" name="apply_coupon" value="--><?php //esc_attr_e( 'Apply coupon', 'woocommerce' ); ?><!--">--><?php //esc_html_e( 'Apply coupon', 'woocommerce' ); ?><!--</button>-->
<!--	</p>-->
<!---->
<!--	<div class="clear"></div>-->
<!--</form>-->
