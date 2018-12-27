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
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

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
global $product;
global $post;

$terms = get_the_terms ( $product->get_id(), 'product_cat' );
foreach ( $terms as $term ) {
    $cat_id = $term->id;
    $cat = $term->name;
    $cat_slug = $term->slug;
}

?>

<div class="product-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pro-outline" id="pro_outline">

                    <?php
                        /**
                         * Hook: woocommerce_before_single_product_summary.
                         *
                         * @hooked woocommerce_show_product_sale_flash - 10
                         * @hooked woocommerce_show_product_images - 20
                         */
                        do_action( 'woocommerce_before_single_product_summary' );
                    ?>

                    <div class="col-md-8">
                        <div class="condition-options" id="condition-options">
                            <div id="inner_options">

                                <div class="in-title">
                                    Condition Options
                                </div>
                                <?php if ($cat == "iPad" || $cat == "iPhone") {?>

                                <div id="has_network">
                                    <div class="row-items-title">Choose Network</div>
                                    <div>
                                        <select class="pro-network-list" id="network_list_price">
                                            <option wb-data-ratio="<?php echo myprefix_get_theme_option($cat_slug."_unlocked"); ?>" value="0">Unlocked</option>
                                            <option wb-data-ratio="<?php echo myprefix_get_theme_option($cat_slug."_three"); ?>" value="145e4adf-0241-4db9-9094-1827729f8f2b">Three</option>
                                            <option wb-data-ratio="<?php echo myprefix_get_theme_option($cat_slug."_o2_tesco"); ?>" value="bcdfeced-e4ae-44c8-b1d9-2c1f4e4322f6">O2 - TESCO</option>
                                            <option wb-data-ratio="<?php echo myprefix_get_theme_option($cat_slug."_orange_tmobile_ee"); ?>" value="229f36da-b126-433a-912c-51ace4c3d366">ORANGE - T MOBILE - EE</option>
                                            <option wb-data-ratio="<?php echo myprefix_get_theme_option($cat_slug."_vodafone"); ?>" value="4498699a-8f7a-4e2f-be7e-affe4802e145">Vodafone</option>
                                        </select>
                                    </div>
                                </div>

                                <?php } ?>

                                <div class="row-items-title">
                                    The condition of this item is
                                </div>
                                <div class="option-selector" id="upper_tabs">
                                    <div class="inner-tab-item">
                                        <input id="tab1" type="radio" checked="" name="tab-selector">
                                        <label class="tab-inner-btn" for="tab1">
                                            <i class="fa"></i>New &amp; Sealed
                                        </label>
                                        <input type="radio" name="tab-selector" id="tab2">
                                        <label class="tab-inner-btn" for="tab2">
                                            <i class="fa"></i>
                                            Used
                                        </label>
                                        <div class="items-seal-list">
                                            <input id="product_price_main" type="hidden" value="<?php
                                            $available_variations = $product->get_available_variations();
                                            $variation_id1=$available_variations[0]['variation_id'];
                                            $variable_product1= new WC_Product_Variation( $variation_id1 );
                                            $regular_price = $variable_product1 ->regular_price;

                                            $price = $regular_price; echo $price; ?>">

                                            <input id="object_guid" type="hidden" value="075708d5-6fe6-4744-b7b3-5888a8759d49">
                                            <div id="grade_list" class="items-seal-list-in">
                                                <input name="used-list" wb-data-ratio="70" type="radio" id="grade-a">
                                                <label for="grade-a">
                                                    <i class="fa"></i>
                                                    GRADE A - Fully Working/No Scratches or Dents
                                                </label>
                                                <input name="used-list" wb-data-ratio="55" type="radio" id="grade-b">
                                                <label for="grade-b"><i class="fa"></i>
                                                    GRADE B - Fully Working/Minor Scratches
                                                </label>
                                                <input name="used-list" wb-data-ratio="40" type="radio" id="grade-c">
                                                <label for="grade-c">
                                                    <i class="fa"></i>
                                                    GRADE C - Fully Working/Major Scratches or Dents
                                                </label>

                                                <label for="grade4">
                                                    FAULTY - Not Working/Damaged/Missing Parts/Other
                                                    <input name="used-list" wb-data-ratio="30" type="radio" id="faulty-a">
                                                    <label for="faulty-a">
                                                        <i class="fa"></i>
                                                        <?php
                                                        if($cat=="MacBook Pro" || $cat=="MacBook Air"){
                                                            echo "Faulty Screen";
                                                        } else if($cat=="iMac") {
                                                            echo "Faulty Screen";
                                                        } else if($cat=="iPad" || $cat=="iPhone"){
                                                            echo "Faulty Screen";
                                                        } else {
                                                            echo "Faulty Screen";
                                                        }
                                                        ?>

                                                    </label>
                                                    <input name="used-list" wb-data-ratio="20" type="radio" id="faulty-b">
                                                    <label for="faulty-b">
                                                        <i class="fa"></i>
                                                        <?php
                                                        if($cat=="MacBook Pro" || $cat=="MacBook Air"){
                                                            echo "Faulty Keyboard/Trackpad/Battery";
                                                        } else if($cat=="iMac") {
                                                            echo "Faulty Fan";
                                                        } else if($cat=="iPad" || $cat=="iPhone"){
                                                            echo "Faulty Battery";
                                                        } else {
                                                            echo "Faulty Battery";
                                                        }
                                                        ?>
                                                    </label>
                                                    <input name="used-list" wb-data-ratio="10" type="radio" id="faulty-c">
                                                    <label for="faulty-c">
                                                        <i class="fa"></i>
                                                        <?php
                                                        if($cat=="MacBook Pro" || $cat=="MacBook Air"){
                                                            echo "Faulty Hard Drive";
                                                        } else if($cat=="iMac") {
                                                            echo "Faulty Hard Drive";
                                                        } else if($cat=="iPad" || $cat=="iPhone"){
                                                            echo "Faulty Microphone/Speakers/Proximity Sensor";
                                                        } else {
                                                            echo "Faulty Hard Drive";
                                                        }
                                                        ?>
                                                    </label>
                                                    <input name="used-list" wb-data-ratio="5" type="radio" id="faulty-d">
                                                    <label for="faulty-d">
                                                        <i class="fa"></i>
                                                        <?php
                                                        if($cat=="MacBook Pro" || $cat=="MacBook Air"){
                                                            echo "Multiple Faults/Logic Board Issues/Liquid Damage";
                                                        } else if($cat=="iMac") {
                                                            echo "Multiple Faults/Logic Board Issues";
                                                        } else if($cat=="iPad" || $cat=="iPhone"){
                                                            echo "Multiple Issues/Logic Board Issues/Liquid Damage";
                                                        } else {
                                                            echo "Multiple Faults";
                                                        }
                                                        ?>
                                                    </label>
                                                </label>
                                            </div>

                                            <div class="items-seal-list-in" id="package_list_price">
                                                <input wb-data-ratio="0" name="used-list2" type="radio" id="box1">
                                                <label for="box1">
                                                    <i class="fa"></i>
                                                    Boxed
                                                </label>
                                                <input <?php if($cat == "iMac") echo 'style="display: none;"' ?> wb-data-ratio="<?php echo myprefix_get_theme_option($cat_slug."_with_charger"); ?>" name="used-list2" type="radio" id="box2">
                                                <label <?php if($cat == "iMac") echo 'style="display: none;"' ?> for="box2">
                                                    <i class="fa"></i>
                                                    <?php
                                                    echo $cat;
                                                    ?>  &amp; Charger
                                                </label>
                                                <input  wb-data-ratio="<?php echo myprefix_get_theme_option($cat_slug."_product_only"); ?>" name="used-list2" type="radio" id="box3">
                                                <label for="box3">
                                                    <i class="fa"></i>
                                                    <?php echo $cat; ?>  Only
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row-items-title">Model info</div>
                                <div class="option-selector">
                                    <div class="inner-tab-item" id="inner_uk_items">
                                        <input wb-data-ratio="0" id="tab11" type="radio" checked="" name="tab-selector2">
                                        <label class="tab-inner-btn" for="tab11">
                                            <i class="fa"></i>UK Model
                                        </label>
                                        <input wb-data-ratio="<?php echo myprefix_get_theme_option($cat_slug."_none_uk_model"); ?>" type="radio" name="tab-selector2" id="tab22">
                                        <label class="tab-inner-btn" for="tab22">
                                            <i class="fa"></i>None-UK Model
                                        </label>
                                    </div>
                                </div>

                                <div class="row-items-title">Faulty/Other Details?</div>
                                <div>
                                    <textarea id="product_description" placeholder="No need to worry! We accept faulty, damaged and items with missing parts. Please fill in the box with details of the item and we will contact you shortly."></textarea>
                                </div>
<!--                                <input type="button" value="Proceed to basket">-->
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
                                    do_action( 'woocommerce_single_product_summary' );
                                ?>
                            </div>
                        </div>
                        <a href="#add_cart_notice" class="gotoNotice" style="display: none">Go to Notice</a>

                    </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script type="text/javascript">
                    $(document).ready(function () {

                        window.location.href = $('.gotoNotice').attr('href');

                        $("#pa_condition").val('new-sealed').change();

                        var _mainprice = $("#product_price_main").val();

                        function CalculatePrice() {

                            var num1=0;
                            var num2=0;
                            var num3=0;
                            var finalnumber=0;

                            if ($('#upper_tabs input#tab2') .is(':checked')) {
                                if (!$("#grade_list input:radio:checked").val()) {
                                } else {
                                    $("#pa_condition").val($("#grade_list input:radio:checked").attr('id')).change();
                                    num1 = parseInt($(".woocommerce-current_Price").text().replace(/,/g, ''));
                                }

                                if (!$("#package_list_price input:radio:checked").val()) {
                                    num2 = 0;
                                } else {
                                    num2 = $('#package_list_price input:radio:checked', '#upper_tabs').attr("wb-data-ratio");
                                }
                            } else {
                                $("#pa_condition").val("new-sealed").change();
                                num1 = parseInt($(".woocommerce-current_Price").text().replace(/,/g, ''));
                                num2 = 0;
                            }


                            if ($('#inner_uk_items #tab11').is(':checked')) {
                                num3 = $('#inner_uk_items #tab11').attr("wb-data-ratio");
                            }

                            if ($('#inner_uk_items #tab22').is(':checked')) {
                                num3 = $('#inner_uk_items #tab22').attr("wb-data-ratio");
                            }

                            if (num1 == 0) {
                                num1 = _mainprice;
                            }


                            var num4 = 0;
                            if ($("#network_list_price").length) {
                                num4 = $("#network_list_price option:selected").attr("wb-data-ratio");
                            }


                            //            alert(num1);
                            //            alert(num2);
                            //            alert(num3);

                            // $("#user_calculated_price i").text(num1 - num2 - num3)
                            var startnumber = $("#user_calculated_price i").text();
                            finalnumber = parseInt(num1 - num2 - num3 - num4);

                            if (finalnumber < 1) {
                                finalnumber = 0;
                                $("#condition-options input:button").prop('disabled', true);
                            } else {
                                $("#condition-options input:button").prop('disabled', false);
                            }


                            // alert(startnumber);
                            //$("#user_calculated_price i").animateNumber({ number: 10000 });
                            $('#user_calculated_price i').animateNumbers(finalnumber, false, 500, "easeInOutQuad");
                            $('#real_price').val(finalnumber);
                        }


                        $("#upper_tabs input#tab1").click(function () {
                            CalculatePrice()
                        });

                        $("#upper_tabs input#tab2").click(function () {
                            CalculatePrice()
                        });

                        $('#network_list_price').on('change', function () {
                            CalculatePrice()
                        })

                        $("#tab2").click(function () {
                            if ($('#grade_list input:radio').is(':checked')) {
                            } else {
                                $("#grade_list #grade-a:radio").attr('checked', true);
                            }
                            if ($('#package_list_price input:radio').is(':checked')) {
                            } else {
                                $("#package_list_price #box1:radio").attr('checked', true);
                            }
                            CalculatePrice()

                        });

                        $("#grade_list input:radio").click(function () {
                            if ($('#package_list_price input:radio').is(':checked')) {
                            } else {
                                $("#package_list_price #box1:radio").attr('checked', true);
                            }
                            CalculatePrice()

                        });
                        $("#package_list_price input:radio").click(function () {
                            CalculatePrice()
                        });


                        $("#inner_uk_items input#tab11").click(function () {
                            CalculatePrice();
                        });

                        $("#inner_uk_items input#tab22").click(function () {
                            CalculatePrice();
                        });

                    });
                </script>

                    <?php
                        /**
                         * Hook: woocommerce_after_single_product_summary.
                         *
                         * @hooked woocommerce_output_product_data_tabs - 10
                         * @hooked woocommerce_upsell_display - 15
                         * @hooked woocommerce_output_related_products - 20
                         */
//                        do_action( 'woocommerce_after_single_product_summary' );
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php do_action( 'woocommerce_after_single_product' );

?>

