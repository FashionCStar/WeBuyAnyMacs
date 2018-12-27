<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
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

defined('ABSPATH') || exit;

do_action('woocommerce_before_cart');
global $woocommerce;
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

<form class=" woocommerce-cart-form" id="basket_items_content" action="<?php echo esc_url(wc_get_checkout_url()); ?>"
      method="post">
    <?php do_action('woocommerce_before_cart_table'); ?>

    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
        <thead>
        <tr>
            <!--				<th class="product-thumbnail">&nbsp;</th>-->
            <th class="product-name"><?php esc_html_e('Product', 'woocommerce'); ?></th>
            <th class="product-description"><?php esc_html_e('Description', 'woocommerce'); ?></th>
            <th class="product-quantity"><?php esc_html_e('Quantity', 'woocommerce'); ?></th>
            <th class="product-subtotal"><?php esc_html_e('Price', 'woocommerce'); ?></th>

            <th class="product-remove">&nbsp;</th>
        </tr>

        </thead>
        <tbody>
        <?php do_action('woocommerce_before_cart_contents'); ?>

        <?php
        foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
            $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
            $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

            if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                ?>
                <tr class="woocommerce-cart-form__cart-item <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">

                    <td class="product-name" data-title="<?php esc_attr_e('Product', 'woocommerce'); ?>">
                        <?php
                        $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

                        if (!$product_permalink) {
                            echo $thumbnail; // PHPCS: XSS ok.
                        } else {
                            printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
                        }
                        ?>
                        <div class="product-info-basket">
                            <?php
                            if (!$product_permalink) {
                                echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
                            } else {
                                echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('%s', $_product->get_name()), $cart_item, $cart_item_key));
                            }

                            do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

                            // Meta data.
                            echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.

                            // Backorder notification.
                            if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
                                echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
                            }
                            ?>
                        </div>
                    </td>

                    <td class="item-desc " data-title="<?php esc_attr_e('Description', 'woocommerce'); ?>">
                        <div class="product-info-basket2">
                            <?php
                            echo $_product->post->post_excerpt;
                            ?>
                        </div>
                    </td>

                    <td class="item-quantity" data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>">
                        <?php
                        if ($_product->is_sold_individually()) {
                            $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
                        } else {
                            $product_quantity = woocommerce_quantity_input(array(
                                'input_name' => "cart[{$cart_item_key}][qty]",
                                'input_value' => $cart_item['quantity'],
                                'max_value' => $_product->get_max_purchase_quantity(),
                                'min_value' => '0',
                                'product_name' => $_product->get_name(),
                            ), $_product, false);
                        }

                        echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
                        ?>
                    </td>

                    <td class="product-subtotal item-price" data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>">
                        <?php
                        echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                        ?>
                    </td>

                    <td class="product-remove delete-basket">
                        <?php
                        // @codingStandardsIgnoreLine
                        echo apply_filters('woocommerce_cart_item_remove_link', sprintf(
                            '<a href="%s" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="fa"></i></a>',
                            esc_url(wc_get_cart_remove_url($cart_item_key)),
                            __('Remove this item', 'woocommerce'),
                            esc_attr($product_id),
                            esc_attr($_product->get_sku())
                        ), $cart_item_key);
                        ?>
                    </td>
                </tr>
                <?php
            }
        }
        ?>

        <?php do_action('woocommerce_cart_contents'); ?>

        <?php do_action('woocommerce_after_cart_contents'); ?>
        </tbody>
    </table>

    <div class="wbae-bask">

        <div class="row">
            <div class="col-sm-4">
                <div id="payment_waitlist" class="items-seal-list-in">
                    <h1 class="wait_title">Increase Payment Amount By Waiting</h1>

                    <p class="wait_option">
                        <input name="wait-payment" wb-data-ratio="0" type="radio" id="nowait_payment">
                        <label for="nowait_payment">
                            Directly
                        </label>
                    </p>
                    <p class="wait_option">
                        <input name="wait-payment" wb-data-ratio="<?php echo myprefix_get_theme_option('wait_payment14'); ?>" type="radio" id="wait_weeks2">
                        <label for="wait_weeks2">
                            Wait 14 Days
                        </label>
                    </p>
                    <p class="wait_option">
                        <input name="wait-payment" wb-data-ratio="<?php echo myprefix_get_theme_option('wait_payment28'); ?>" type="radio" id="wait_weeks4">
                        <label for="wait_weeks4">
                            Wait 28 Days
                        </label>
                    </p>
                </div>
            </div>
            <div class="col-sm-3"><img src="<?php echo get_template_directory_uri() . "/assets/images/basket-icon.png" ?>"></div>
            <div class="col-sm-5">
                <input type="hidden" id="cart_extra_option" name="cart_extra_option" value="nowait_payment" >
                <input type="hidden" id="cart_total_price" name="cart_total_price" wb-data-ratio="<?php echo $woocommerce->cart->total ?>" value="<?php echo $woocommerce->cart->total ?>" >
                <div class="we-pay-basket">We Pay You <span><?php echo $woocommerce->cart->get_cart_total() ?></span></div>

<!--                <div class="btn_next nomargin2  ">-->
                <?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
<!--                </div>-->
                <?php do_action( 'woocommerce_after_cart_totals' ); ?>

            </div>
        </div>
    </div>
    <?php do_action('woocommerce_after_cart_table'); ?>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function () {
        $("#payment_waitlist #nowait_payment:radio").attr('checked', true);
        $("#payment_waitlist input:radio").click(function () {
            var cartTotal = parseInt($("#cart_total_price").attr("wb-data-ratio"));
            var extra_percent = parseInt($('#payment_waitlist input:radio:checked').attr("wb-data-ratio"));
            var extra_id = $('#payment_waitlist input:radio:checked').attr('id');

            cartTotal = parseInt(cartTotal * (100 + extra_percent) / 100);
            // $(".woocommerce-current_Price").val(cartTotal);
            $('#cart_extra_option').val(extra_id);
            $('#cart_total_price').val(cartTotal);
            $('.we-pay-basket span.woocommerce-current_Price').animateNumbers(cartTotal, false, 500, "easeInOutQuad");

            // $.ajax({
            //     type: "POST"
            //     ,dataType: 'json'
            //     ,url: woocommerce_params.ajax_url
            //     ,data: {
            //         'action': 'set_cart_total_with_wait',
            //         'cart_total': cartTotal,
            //     },
            //     error: function () {
            //         alert("Oops look like something broke, please try later.");
            //         return false;
            //     },
            //     success: function (r) {
            //         console.log(r);
            //         $('#cart_total_price').val(cartTotal);
            //         $('.we-pay-basket span.woocommerce-current_Price').animateNumbers(cartTotal, false, 500, "easeInOutQuad");
            //         return false;
            //     }
            // });
        });
    });
</script>

<div class="cart-collaterals" style="display:none;">
    <?php
    /**
     * Cart collaterals hook.
     *
     * @hooked woocommerce_cross_sell_display
     * @hooked woocommerce_cart_totals - 10
     */
    do_action('woocommerce_cart_collaterals');
    ?>
</div>

<?php do_action('woocommerce_after_cart'); ?>

