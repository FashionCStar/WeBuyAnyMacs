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

                                <div class="row-items-title">
                                    The condition of this item is
                                </div>
                                <div class="option-selector" id="upper_tabs">
                                    <div class="inner-tab-item">
                                        <input id="tab1" type="radio" checked="" name="tab-selector">
                                        <label class="tab-inner-btn" for="tab1">
                                            <i class="fa"></i>New &amp;
                                            Sealed
                                        </label>
                                        <input type="radio" name="tab-selector" id="tab2">
                                        <label class="tab-inner-btn" for="tab2">
                                            <i class="fa"></i>
                                            Used
                                        </label>
                                        <div class="items-seal-list">
                                            <input id="product_price_main" type="hidden" value="<?php $price = $product->get_price(); echo $price; ?>">
                                            <input id="object_guid" type="hidden" value="075708d5-6fe6-4744-b7b3-5888a8759d49">
                                            <div id="grade_list" class="items-seal-list-in">
                                                <input name="used-list" wb-data-ratio="70" type="radio" id="grade1">
                                                <label for="grade1">
                                                    <i class="fa"></i>
                                                    GRADE A - Fully Working/No Scratches or Dents
                                                </label>
                                                <input name="used-list" wb-data-ratio="55" type="radio" id="grade2">
                                                <label for="grade2"><i class="fa"></i>
                                                    GRADE B - Fully Working/Minor Scratches
                                                </label>
                                                <input name="used-list" wb-data-ratio="40" type="radio" id="grade3">
                                                <label for="grade3">
                                                    <i class="fa"></i>
                                                    GRADE C - Fully Working/Major Scratches or Dents
                                                </label>

                                                <label for="grade4">
                                                    FAULTY - Not Working/Damaged/Missing Parts/Other
                                                    <input name="used-list" wb-data-ratio="30" type="radio" id="grade4_1">
                                                    <label for="grade4_1">
                                                        <i class="fa"></i>
                                                        GRADE A - Fully Working/Major Scratches or Dents
                                                    </label>
                                                    <input name="used-list" wb-data-ratio="20" type="radio" id="grade4_2">
                                                    <label for="grade4_2">
                                                        <i class="fa"></i>
                                                        GRADE B - Fully Working/Major Scratches or Dents
                                                    </label>
                                                    <input name="used-list" wb-data-ratio="10" type="radio" id="grade4_3">
                                                    <label for="grade4_3">
                                                        <i class="fa"></i>
                                                        GRADE C - Fully Working/Major Scratches or Dents
                                                    </label>
                                                </label>
                                            </div>

                                            <div class="items-seal-list-in" id="package_list_price">
                                                <input wb-data-ratio="0" name="used-list2" type="radio" id="box1">
                                                <label for="box1">
                                                    <i class="fa"></i>
                                                    Boxed
                                                </label>
                                                <?php
                                                    $cat = strip_tags($product->get_categories());
                                                ?>
                                                <input <?php if($cat == "iMac") echo 'style="display: none;"' ?> wb-data-ratio="25" name="used-list2" type="radio" id="box2">
                                                <label <?php if($cat == "iMac") echo 'style="display: none;"' ?> for="box2">
                                                    <i class="fa"></i>
                                                    <?php
                                                    echo $cat;
                                                    ?>  &amp; Charger
                                                </label>
                                                <input  wb-data-ratio="70" name="used-list2" type="radio" id="box3">
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
                                        <input wb-data-ratio="50" type="radio" name="tab-selector2" id="tab22">
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

                    </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script type="text/javascript">
                    $(document).ready(function () {

                        var _mainprice = $("#product_price_main").val();

                        function CalculatePrice() {

                            var num1;
                            var num2;
                            var num3;


                            if ($('#upper_tabs input#tab2').is(':checked')) {
                                if (!$("#grade_list input:radio:checked").val()) {
                                    num1 = 0;
                                }
                                else {
                                    num1 = $('#grade_list input:radio:checked', '#upper_tabs').attr("wb-data-ratio");
                                }

                                if (!$("#package_list_price input:radio:checked").val()) {
                                    num2 = 0;
                                }
                                else {
                                    num2 = $('#package_list_price input:radio:checked', '#upper_tabs').attr("wb-data-ratio");
                                }

                            } else {
                                num1 = 0;
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
                            } else {
                                num1 = (parseInt(_mainprice) * parseInt(num1)) / 100;
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
                            var finalnumber = parseInt(num1 - num2 - num3 - num4);

                            if (finalnumber < 1) {
                                finalnumber = 0;
                                $("#condition-options input:button").prop('disabled', true);
                            } else {
                                $("#condition-options input:button").prop('disabled', false);
                            }


                            // alert(startnumber);
                            //$("#user_calculated_price i").animateNumber({ number: 10000 });
                            $('#user_calculated_price i').animateNumbers(finalnumber, false, 500, "easeInOutQuad");
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
                                $("#grade_list #grade1:radio").attr('checked', true);
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
                            CalculatePrice()
                        });

                        $("#inner_uk_items input#tab22").click(function () {
                            CalculatePrice()
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



<?php do_action( 'woocommerce_after_single_product' ); ?>
