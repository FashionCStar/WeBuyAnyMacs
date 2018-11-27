<?php
/**
 * Template Name: Product Condition
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

get_header(); ?>


    <div class="product-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="info-box-up">You’re nearly there! Please fill in the Condition Options screen and the
                        price will update accordingly.
                        Once finished, click the Proceed To Basket button to add the item to your shopping basket.
                    </div>
                    <div class="pro-outline" id="pro_outline">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="img-pro">
                                    <img src="<?php echo get_template_directory_uri() . "/assets/products/image.jpg"?>">
                                    <div class="price-item">We Pay You <br>
                                        <span id="user_calculated_price">
                                            £<i class="in-price-final">3652</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="info-pro">
                                    <div class="pro-name-down">iMac Pro "Intel Xeon W" 3.0 27 inch Retina 5K Display
                                        32GB 1TB SSD (2017)
                                    </div>
                                    <span>Model Number</span>A1862<br>
                                    <span>Part Number</span>BTO<br>
                                    <span>Year</span>2017<br>
                                    <span>Model Number</span>A1862<br>
                                    <span>Screen Size</span>27"<br>
                                    <span>RAM</span>32GB<br>
                                    <span>Storage</span>1TB SSD<br>
                                    <span>Processor</span>3.0GHz 10-core Intel Xeon W<br>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="condition-options" id="condition-options">
                                    <div id="inner_options">
                                        <div id="loader_section">
                                            <div id="msg_add_to_basket">
                                                <i class="fa"></i>
                                                Thanks for your order.<br>What to do next?<br>
                                                If you finished,please check the
                                                <a href="/Basket/">Basket</a>
                                                for complete your order.<br>
                                                If you do have more Items please add them to basket.
                                            </div>
                                            <div class="sk-fading-circle" id="sk-fading-circle">
                                                <div class="sk-circle1 sk-circle"></div>
                                                <div class="sk-circle2 sk-circle"></div>
                                                <div class="sk-circle3 sk-circle"></div>
                                                <div class="sk-circle4 sk-circle"></div>
                                                <div class="sk-circle5 sk-circle"></div>
                                                <div class="sk-circle6 sk-circle"></div>
                                                <div class="sk-circle7 sk-circle"></div>
                                                <div class="sk-circle8 sk-circle"></div>
                                                <div class="sk-circle9 sk-circle"></div>
                                                <div class="sk-circle10 sk-circle"></div>
                                                <div class="sk-circle11 sk-circle"></div>
                                                <div class="sk-circle12 sk-circle"></div>
                                            </div>

                                        </div>
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
                                                    <input id="product_price_main" type="hidden" value="3652">
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
                                                        <input name="used-list" wb-data-ratio="10" type="radio" id="grade4">
                                                        <label for="grade4">
                                                            <i class="fa"></i>
                                                            FAULTY - Not Working/Damaged/Missing Parts/Other
                                                        </label>
                                                    </div>

                                                    <div class="items-seal-list-in" id="package_list_price">
                                                        <input wb-data-ratio="0" name="used-list2" type="radio" id="box1">
                                                        <label for="box1">
                                                            <i class="fa"></i>
                                                            Boxed
                                                        </label>
                                                        <input  wb-data-ratio="70" name="used-list2" type="radio" id="box3">
                                                        <label for="box3">
                                                            <i class="fa"></i>iMac Only
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
                                        <input type="button" value="Proceed to basket">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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


                //alert(startnumber);
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

            $("#condition-options input:button").click(function () {
                $(this).prop('disabled', true);


                var num1, num2, num3, num4, num4, num5, num6;
                var _outputdata;


                if ($('#upper_tabs input#tab1').is(':checked')) {
                    num1 = "0,";
                }
                if ($('#upper_tabs input#tab2').is(':checked')) {
                    num1 = "1,";
                }

                if (!$("#grade_list input:radio:checked").val()) {
                    num2 = "0,";
                }
                else {
                    num2 = $('#grade_list input:radio:checked', '#upper_tabs').attr("id") + ",";
                }


                if (!$("#package_list_price input:radio:checked").val()) {
                    num3 = "0,";
                }
                else {
                    num3 = $('#package_list_price input:radio:checked', '#upper_tabs').attr("id") + ",";
                }


                if ($('#inner_uk_items #tab11').is(':checked')) {
                    num4 = "0"
                }
                if ($('#inner_uk_items #tab22').is(':checked')) {
                    num4 = "1"
                }

                if ($("#network_list_price").length) {
                    num5 = $("#network_list_price option:selected").val();
                    num6 = $("#network_list_price option:selected").text();
                } else {
                    num5 = 0;
                    num6 = "";
                }


                _outputdata = num1 + num2 + num3 + num4;


                $.ajax({
                    url: "/BasketSerializer/",
                    data: {
                        Function: 1,
                        ObjectId: $("#object_guid").val(),
                        objectData: _outputdata,
                        ObjectDescription: $("#product_description").val(),
                        NetworkId: num5,
                        NetworkName: num6
                    },
                    error: function () {
                        alert("We have problem in system please contact with administrator");
                    },
                    dataType: 'text',
                    beforeSend: function () {
                        $("#loader_section").addClass("show-the-loader");
                    },
                    success: function (data) {

                        $("#sk-fading-circle").addClass("remove-the-loader");
                        $("#msg_add_to_basket").addClass("show-the-loader");

                        $('html, body').animate({
                            scrollTop: 0
                        }, 800, 'easeOutQuint');


                        if ($('#basket_count').length) {
                            var _num = $("#top_toolbar_basket #basket_count").text();
                            _num = parseInt(_num) + 1;
                            $("#top_toolbar_basket #basket_count").text(_num);
                        } else {
                            $("#top_toolbar_basket").append("<span id=\"basket_count\">1</span>")
                        }


                    },
                    type: 'POST'
                });


            });


        });
    </script>


<?php get_footer();