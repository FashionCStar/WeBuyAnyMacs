<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $woocommerce;

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

$cart_total = $_POST['cart_total_price'];
$extra_option = $_POST['cart_extra_option'];
$woocommerce->cart->set_total($cart_total);
//echo $woocommerce->cart->total; exit;
//foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $cart_item ) {
//    $cart_item['data']->set_price($cart_total);
//}
//$woocommerce->cart->set_session();
?>

<form id="wbae_userdata" name="checkout" method="post" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
    <input type="hidden" name="cart_extra_option" value="<?php echo $extra_option ?>" >
	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="row" id="customer_details">
			<div class="col-sm-6 order-form">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-sm-6 order-form">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>

    <div class="row">
        <div class="col-sm-6">
            <a href="<?php echo esc_url( wc_get_cart_url() );?>" class="btn_prev">
                <?php esc_html_e( '< PREVIOUS STEP - YOUR BASKET', 'woocommerce' ); ?>
            </a>
        </div>
        <div class="col-sm-6">
            <?php
            $innerHTML .= '<button type="submit" class="button alt btn_next" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr( $order_button_text ) . '" data-value="' . esc_attr( $order_button_text ) . '">' . esc_html( "NEXT STEP - COMPLETE ORDER >" ) . '</button>';
            echo apply_filters( 'woocommerce_order_button_html', $innerHTML ); // @codingStandardsIgnoreLine
            ?>
        </div>
    </div>


<!--    <h3 id="order_review_heading">--><?php //esc_html_e( 'Your order', 'woocommerce' ); ?><!--</h3>-->

<!--	--><?php //do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order" style="display: none">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

<!--	--><?php //do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function () {
        var option = "<?php echo $extra_option ?>";
        if (option == "nowait_payment") {
            $("#wait_payment").val("No Wait");
        } else if(option == "wait_weeks2") {
            $("#wait_payment").val("Wait 14 days");
        } else if(option == "wait_weeks4") {
            $("#wait_payment").val("Wait 28 days");
        }
    });
</script>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
