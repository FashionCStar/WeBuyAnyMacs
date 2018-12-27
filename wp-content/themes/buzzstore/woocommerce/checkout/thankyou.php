<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
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
            <li data-target="#caren-slider">
                <i class="fa ok"></i>
                <div class="timeline-label">Personal Info</div>
            </li>
            <!--            <li data-target="#caren-slider"><i class="fa ok"></i>-->
            <!--                <div class="timeline-label">Shipment</div>-->
            <!--            </li>-->
            <li data-target="#caren-slider" class="active">
                <i class="fa ok"></i>
                <div class="timeline-label">Order Complete</div>
            </li>
        </ul>
    </div>
</div>

<div class="woocommerce-order">

	<?php if ( $order ) : ?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php _e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php _e( 'Pay', 'woocommerce' ) ?></a>
				<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php _e( 'My account', 'woocommerce' ); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>

<!--			<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">--><?php //echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), $order ); ?><!--</p>-->
<!---->
<!--			<ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">-->
<!---->
<!--				<li class="woocommerce-order-overview__order order">-->
<!--					--><?php //_e( 'Order number:', 'woocommerce' ); ?>
<!--					<strong>--><?php //echo $order->get_order_number(); ?><!--</strong>-->
<!--				</li>-->
<!---->
<!--				<li class="woocommerce-order-overview__date date">-->
<!--					--><?php //_e( 'Date:', 'woocommerce' ); ?>
<!--					<strong>--><?php //echo wc_format_datetime( $order->get_date_created() ); ?><!--</strong>-->
<!--				</li>-->
<!---->
<!--				--><?php //if ( is_user_logged_in() && $order->get_user_id() === get_current_user_id() && $order->get_billing_email() ) : ?>
<!--					<li class="woocommerce-order-overview__email email">-->
<!--						--><?php //_e( 'Email:', 'woocommerce' ); ?>
<!--						<strong>--><?php //echo $order->get_billing_email(); ?><!--</strong>-->
<!--					</li>-->
<!--				--><?php //endif; ?>
<!---->
<!--				<li class="woocommerce-order-overview__total total">-->
<!--					--><?php //_e( 'Total:', 'woocommerce' ); ?>
<!--					<strong>--><?php //echo $order->get_formatted_order_total(); ?><!--</strong>-->
<!--				</li>-->
<!---->
<!--				--><?php //if ( $order->get_payment_method_title() ) : ?>
<!--					<li class="woocommerce-order-overview__payment-method method">-->
<!--						--><?php //_e( 'Payment method:', 'woocommerce' ); ?>
<!--						<strong>--><?php //echo wp_kses_post( $order->get_payment_method_title() ); ?><!--</strong>-->
<!--					</li>-->
<!--				--><?php //endif; ?>
<!---->
<!--			</ul>-->

		<?php endif; ?>

        <div id="final-shipping-step">
            <div id="msg_add_to_basket" class="show-the-loader">
                <i class="fa"></i>
                Thanks for your order.
                <br>Your order added to WeBuyAnyMacs System and UPS Shipping Service.
            </div>
            <div class="row">
                <div class="col-sm-6 order-form">
                    <div class="uinfo-border">
                        <h2>WeBuyAnyMacs Order Info</h2>
                        <label for="txt_bname">WBAM Tracking Code</label>
                        <div class="ups-reveiw2">
<!--                            <span>40267</span>-->
                            <span><?php echo $order->id ?></span>
                            <i class="fa"></i>
                        </div>
                        <label for="txt_an">Order Date</label>
                        <div class="ups-reveiw2">
                            <span>
                                <?php echo wc_format_datetime( $order->get_date_created(), "m/d/Y g:i:s A" ); ?>
                            </span>
                            <i class="fa"></i>
                        </div>
                        <label for="txt_scode">Order Status</label>
                        <div class="ups-reveiw2">
                            <span>Received and UPS Shipment Created</span>
                            <i class="fa"></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 order-form">
                    <div class="uinfo-border">
                        <h2>UPS Shipping Information</h2>
                        <label>UPS shipment Tracking Number</label>
                        <div class="ups-reveiw2">
                            <span>
                                <?php echo get_post_meta( $order->get_order_number() , "ups_shipment_ids", true );?>
                            </span>
                            <i class="fa"></i>
                        </div>
                        <label>UPS Label URL</label>
                        <?php
                        $created_shipments_details_array 	= get_post_meta( $order->id, 'ups_created_shipments_details_array', true );
                        $ups_label_details_array = get_post_meta( $order->id, 'ups_label_details_array', true );
                        $ups_commercial_invoice_details = get_post_meta( $order->id, 'ups_commercial_invoice_details', true );
                        $ups_settings = get_option( 'woocommerce_'.WF_UPS_ID.'_settings', null );
                        $show_print_label_in_browser = isset( $ups_settings['show_label_in_browser'] ) ? $ups_settings['show_label_in_browser'] : 'no';

                        if(!empty($ups_label_details_array) && is_array($ups_label_details_array)) {

                            $packages = xa_get_custom_meta_key($order, '_wf_ups_stored_packages', true, 'order');        //For displaying the products name with label on order page

                            foreach ($created_shipments_details_array as $shipmentId => $created_shipments_details) {

                                if ("yes" == $show_print_label_in_browser) {
                                    $target_val = "_blank";
                                } else {
                                    $target_val = "_self";
                                }

                                // Multiple labels for each package.
                                $index = 0;
                                if (!empty($ups_label_details_array[$shipmentId])) {
                                    foreach ($ups_label_details_array[$shipmentId] as $ups_label_details) {
                                        $label_extn_code = $ups_label_details["Code"];
                                        $tracking_number = isset($ups_label_details["TrackingNumber"]) ? $ups_label_details["TrackingNumber"] : '';
                                        $download_url = admin_url('/?wf_ups_print_label=' . base64_encode($shipmentId . '|' . $order->id . '|' . $label_extn_code . '|' . $index . '|' . $tracking_number));
                                    }
                                }
                            }
                        }
                        ?>
                        <a href="<?php echo $download_url; ?>" target="<?php echo $target_val; ?>"
                           class="ups-reveiw5 print_ups_label">
                            Click Here to Print Label
                            <i class="fa"></i>
                        </a>
                        <label>UPS Tracking</label>
                        <a target="_blank"
                                    href="http://wwwapps.ups.com/WebTracking/track?track=yes&trackNums=<?php echo get_post_meta( $order->get_order_number() , "ups_shipment_ids", true )?>"
                                class="ups-reveiw3">
                            UPS Tracking
                            <i class="fa"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
<!--		--><?php //do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
<!--		--><?php //do_action( 'woocommerce_thankyou', $order->get_id() ); ?>

	<?php else : ?>

		<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), null ); ?></p>

	<?php endif; ?>

</div>
