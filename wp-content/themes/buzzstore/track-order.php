<?php
/**
 * Template Name: Tracking Order
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Buzz_Store
 */

get_header();

$order_id = $_GET['track_id'];
$order = wc_get_order( $order_id );
$order_data = $order->get_data();
$order_status = $order_data['status'];
?>

<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 upper-page-title">
                <h1>Track Order</h1>
            </div>
        </div>
    </div>
</div>

<div id="final-shipping-step" class="wizard-inner trackorder-base">
    <div class="container">

        <div class="row">
            <div class="col-sm-6 order-form">
                <div class="uinfo-border">
                    <h2>WeBuyAnyMacs Order Info</h2>
                    <label for="txt_scode">Order Status</label>
                    <div class="ups-reveiw4"><span> <?php echo $order_status ?> </span><i class="fa"></i></div>
                    <label for="txt_bname">WBAE Tracking Code</label>
                    <div class="ups-reveiw2"><span> <?php echo $order_id ?> </span><i class="fa"></i></div>
                    <label for="txt_an">Order Date</label>
                    <div class="ups-reveiw2"><span> <?php echo wc_format_datetime( $order->get_date_created(), "m/d/Y g:i:s A" ); ?> </span><i class="fa"></i></div>
                    <label for="txt_an">Email Address</label>
                    <div class="ups-reveiw2"><span> <?php echo $order_data['billing']['email'];?> </span><i class="fa"></i></div>

                    <div>
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
                       class="ups-reveiw3">UPS Tracking<i class="fa"></i>
                    </a>

                </div></div>

        </div>

        <?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>

    </div>

</div>
