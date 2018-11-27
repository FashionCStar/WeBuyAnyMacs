<?php
/**
 * Template Name: Home Page
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


    <div id="site_slider" class="hidden-xs hidden-sm">
        <div id="search_container">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div id="inner_search_input">
                            <input id="autocomplete" type="text" placeholder="Enter Item or Model Number or Part Number (e.g iPhone 7)"
                                   class="ui-autocomplete-input" autocomplete="off">
                            <i id="search_icon" class="fa"></i>
                            <div id="autosearch-container" style="position:absolute; width: 100%;">
                                <ul id="ui-id-1" tabindex="0"
                                    class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front"
                                    style="display: none;">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri() . "/assets/images/slider.png"?>" alt="WeBuyAnyMacs">

    </div>
    <div id="webuy-icons" class="hidden-lg hidden-md">
        <div class="container">
            <div class="row" id="intimes_mobile">
                <div class="col-sm-6 col-sm-4">
                    <a href="/Sell/iMac/">
                        <div class="flaticon-imac"></div>
                        Sell iMac
                    </a>
                </div>
                <div class="col-sm-6 col-sm-4">
                    <a href="/Sell/MacBook/">
                        <div class="flaticon-macbook"></div>
                        Sell MacBook
                    </a>
                </div>

                <div class="col-sm-6 col-sm-4">
                    <a href="/Sell/MacBook-Pro/">
                        <div class="flaticon-macbook"></div>
                        Sell MacBook Pro
                    </a>
                </div>

                <div class="col-sm-6 col-sm-4">
                    <a href="/Sell/MacBook-Air/">
                        <div class="flaticon-macbook"></div>
                        Sell MacBook Air
                    </a>
                </div>

                <div class="col-sm-6 col-sm-4">
                    <a href="/Sell/iPad/">
                        <div class="flaticon-ipad-1"></div>
                        Sell iPad
                    </a>
                </div>
                <div class="col-sm-6 col-sm-4">
                    <a href="/Sell/iPhone/">
                        <div class="flaticon-iphone"></div>
                        Sell iPhone
                    </a>
                </div>

            </div>
        </div>

    </div>

    <div class="lt-sellers">

        <div class="container site-prolist">
            <div class="row inner-products">

                <div class="col-md-12"><h3>Latest sellers</h3></div>
                <div class="col-md-12">


                    <div id="slide-last-sellers" class="carousel slide">

                        <div class="wizard-inner openh2">

                            <div class="item active">
                                <div class="row">
                                    <i class="fa arr-go hidden-xs hidden-sm"></i>
                                    <div class="col-sm-6 col-md-3">
                                        <a href="/Sell/Apple/MacBook-Pro/MacBook-Pro-Core-i5-2.0-13-256GB-Space-Grey-Late-2016/">
                                            <div class="pro_img">
                                                <img alt="MacBook Pro Core i5 2.0 13 256GB - Space Grey - Late 2016"
                                                        src="<?php echo get_template_directory_uri()."/assets/products/lt-image.jpg" ?>">
                                            </div>
                                            <h2>MacBook Pro "Core i5" 2.0 13" 256GB - Space Grey - Late 2016</h2>
                                            <h5>We paid Ireneusz <span>£459</span></h5>
                                            <h6><i class="fa"></i>Pastusiak</h6>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <a href="/Sell/Apple/MacBook-Pro/MacBook-Pro-Core-i7-2.2-15-256GB-Retina-Mid-2015/">
                                            <div class="pro_img">
                                                <img alt="MacBook Pro Core i7 2.2 15 256GB Retina Mid-2015"
                                                        src="<?php echo get_template_directory_uri()."/assets/products/lt-image.jpg" ?>">
                                            </div>
                                            <h2>MacBook Pro "Core i7" 2.2 15" 256GB Retina Mid-2015</h2>
                                            <h5>We paid Sara <span>£629</span></h5>
                                            <h6><i class="fa"></i>Hayes</h6>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <a href="/Sell/Apple/iMac/iMac-Core-i5-2.7-21.5-inch-8GB-1TB-2013/">
                                            <div class="pro_img">
                                                <img alt="iMac Core i5 2.7 21.5 inch 8GB 1TB (2013)"
                                                     src="<?php echo get_template_directory_uri()."/assets/products/lt-image.jpg" ?>">
                                            </div>
                                            <h2>iMac "Core i5" 2.7 21.5 inch 8GB 1TB (2013)</h2>
                                            <h5>We paid Hakeem <span>£45</span></h5>
                                            <h6><i class="fa"></i>GLASGOW</h6>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <a href="/Sell/DELL/Laptop/DELL-XPS-13-13.3-2-in-1-8GB-256GB-SSD-Silver/">
                                            <div class="pro_img">
                                                <img alt="DELL XPS 13 13.3 2 in 1 - 8GB - 256GB SSD - Silver"
                                                     src="<?php echo get_template_directory_uri()."/assets/products/lt-image.jpg" ?>">
                                            </div>
                                            <h2>DELL XPS 13 13.3" 2 in 1 - 8GB - 256GB SSD - Silver</h2>
                                            <h5>We paid Marketa <span>£295</span></h5>
                                            <h6><i class="fa"></i>London</h6>
                                        </a>
                                    </div>
                                    <i class="fa arr-go hidden-xs hidden-sm"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="outhave">
            <div class="havelook" id="review-scroll">Have a look at our reviews ?</div>
        </div>
    </div>
    <div class="shiw" id="so_how_does">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 >How does it work?</h2>
                </div>
                <div class="col-md-12">
                    <h3>Do you have any unwanted electronics lying around,<br/>
                        gathering dust that are no longer needed anymore?</h3>
                </div>
                <div class="col-md-12">
                    <h4>WeBuyAnyMacs.com specialise in buying your electronics at the best market rate available.</h4>
                    <h4 style="font-size:2.8rem;">We have broken down the journey into four simple steps...</h4>
                </div>


                <div class="col-sm-6 col-md-3">
                    <div class="incons find">
                        <img src="<?php echo get_template_directory_uri()."/assets/images/find.png" ?>" alt="WeBuyAnyMacs">
                    </div>
                    <h4><strong>Number One</strong><br>Find your electronic on our site.</h4>
<!--                    <i class="fa arr-go hidden-xs hidden-sm"></i>-->
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="incons describe">
                        <img src="<?php echo get_template_directory_uri()."/assets/images/describe.png" ?>" alt="WeBuyAnyMacs">
                    </div>
                    <h4><strong>Number Two</strong><br>Configure your electronics details which will update your live price</h4>
<!--                    <i class="fa arr-go hidden-xs hidden-sm"></i>-->
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="incons sell"><img src="<?php echo get_template_directory_uri()."/assets/images/sell.png" ?>" alt="WeBuyAnyMacs"></div>
                    <h4><strong>Number Three</strong><br>We will arrange a courier to come and collect your item. Free of charge</h4>
<!--                    <i class="fa arr-go hidden-xs hidden-sm"></i>-->
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="incons cash">
                        <img src="<?php echo get_template_directory_uri()."/assets/images/cash.png" ?>" alt="WeBuyAnyMacs"></div>
                    <h4><strong>Number Four</strong><br>We will pay you for your electronic</h4>
                </div>


            </div>
        </div>
    </div>


    <div class="site-exchange" id="part_exchange">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Part Exchange Your Mac</h3>

                    <div class="col-md-6" style="padding-top: 50px;">
                        <h4>You can part exchange your old Apple Mac or other electronic for the latest brand new, sealed product!<br><br>
                            All our items come with a 12 month warranty and we have the best prices available for your electronics.<br><br>
                            Simple complete the form, letting us know what product you have and what product
                            you would like and we will get back to you
                            within one working hour.</h4>
                    </div>

                    <div class="col-md-6">


                        <div id="askiran-smartwizard" class="carousel slide asksmartwizard">
                            <div class="ask-multilevel-nav nav3">
                                <ul class="carousel-indicators">
                                    <li data-target="#caren-slider" class="active"></li>
                                    <li data-target="#caren-slider"></li>
                                    <li data-target="#caren-slider"></li>
                                </ul>
                            </div>
                            <form method="post" action="./" id="part_exchange_form">
                                <div class="aspNetHidden">
                                    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                                           value="WPJQ6hNMokotTKaLfZ7LJPw3PD4e55iIazyyATo2wzkAt5hjhO2qfQXjXZfKNuxTHnPVJr5atZhG/psgM29XNS9hNHeyMD8S8T79/HwwDR6XudAE">
                                </div>

                                <div class="aspNetHidden">

                                    <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR"
                                           value="CA0B0334">
                                    <input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="">
                                    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                                           value="AazTgwLOoRrLRnjDBHSknDvUhlLiZNzQhbsRAvVGwSjZwYJEdUQZM45G2OzuzSK/nZ1yViOqlLQ2OPH2B7y8o1lRVxizMxWjRM/4C1BmrzUFy8r+5hA48nFcouXWilwLLE3LzjPtjsv7jQeOyslGb0frOK1esQDVZXwzSARduZpwuRHhhTPNHhrcfcpIoVldWUa1SGNOADWFS7JMUb/s0WtEAHz8PRDN1mmRYpCXRlFaXg0U0/2yIaMx96wSUquT+UHb4UCXviCbQGZWYErV076lLp37M4I4qMXZ8PZ9YNMa9gIrayfnpSn6n5YBrwmebdJq/8qUtxjr8q+6Zx2JSqBMPPj9Q/BytuIVtwPgU4UNiLFwHdcPf9+W7n8PbXCVnkP+/0nF1IJ4PLChCk/PMHxvbBNAVHaPw4dFkhT0J6bOpuyGrfjieLrCRn7LSzt4K1KdgIMx5Oc/TQSDeFFsMbccmY8=">
                                </div>
                                <div class="wizard-inner">

                                    <div class="item active">
                                        <div class="form-items">

                                            <label>Category</label>
                                            <?php
                                            $orderby = 'name';
                                            $order = 'asc';
                                            $hide_empty = false ;
                                            $cat_args = array(
                                                'orderby'    => $orderby,
                                                'order'      => $order,
                                                'hide_empty' => $hide_empty,
                                            );

                                            $product_categories = get_terms( 'product_cat', $cat_args );
                                            if( !empty($product_categories) ) {
                                            ?>
                                            <select name="Categories_List" id="Categories_List">
                                                <option value="0">Please select</option>
                                                <?php
                                                foreach ($product_categories as $key => $category) {
                                                    if ($category->name != "Uncategorized") {
                                                        ?>
                                                        <option value="<?php echo $category->term_id ?>"> <?php echo $category->name ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <?php
                                            }
                                            ?>

                                        </div>

                                        <div class="form-items">

                                            <label>Product</label>
                                            <select id="Products_List">
                                                <option selected="selected" value="...">...</option>

                                            </select>

                                        </div>
                                        <div class="form-items">

                                            <label>Condition</label>
                                            <select id="Condition_list">
                                                <option selected="selected" value="">Please select...</option>
                                                <option value="New &amp; Sealed">New &amp; Sealed</option>
                                                <option value="GRADE A - Fully Working/No Scratches or Dents">GRADE A -
                                                    Fully Working/No Scratches or Dents
                                                </option>
                                                <option value="GRADE B - Fully Working/Minor Scratches or Dents.">GRADE
                                                    B - Fully Working/Minor Scratches or Dents.
                                                </option>
                                                <option value="GRADE C - Fully Working/Major Scratches or Dents.">GRADE
                                                    C - Fully Working/Major Scratches or Dents.
                                                </option>
                                                <option value="FAULTY - Not Working/Damaged/Missing Parts/Other.">FAULTY
                                                    - Not Working/Damaged/Missing Parts/Other.
                                                </option>

                                            </select>

                                        </div>
                                        <div class="form-items">
                                            <input role="button" type="submit" id="step1_part_next" class="btnExample"
                                                   value="NEXT STEP">
                                        </div>

                                    </div>

                                    <div class="item">


                                        <div class="form-items">
                                            <label for="txt_wyw">Tell Us What You Want</label>
                                            <textarea rows="8" cols="20" id="txt_wyw" class="textbox"></textarea>
                                        </div>


                                        <div class="form-items">
                                            <input href="#askiran-smartwizard" role="button" data-slide="prev"
                                                   type="submit" id="nexts" name="nexts" class="btnExample"
                                                   value="PREVIOUS STEP">
                                            <input role="button" type="submit" id="step2_part_next" name="nexts"
                                                   class="btnExample" value="NEXT STEP">
                                        </div>

                                    </div>

                                    <div class="item">
                                        <div id="info_user_part">
                                            <div class="form-items">
                                                <label>Name</label>
                                                <input name="txt_part_name" type="text" id="txt_part_name">
                                            </div>


                                            <div class="form-items">
                                                <label>Address</label>
                                                <input name="txt_part_add" type="text" id="txt_part_add">
                                            </div>


                                            <div class="form-items">
                                                <label>Email</label>
                                                <input name="txt_part_mail" type="text" id="txt_part_mail">
                                            </div>

                                            <div class="form-items">
                                                <label>Telephone</label>
                                                <input name="txt_part_tel" type="text" id="txt_part_tel">
                                            </div>


                                            <div class="form-items">
                                                <label>More information</label>
                                                <textarea rows="8" cols="20" id="txt_part_info"
                                                          class="textbox"></textarea>
                                            </div>
                                        </div>


                                        <div class="form-items">
                                            <input href="#askiran-smartwizard" role="button" data-slide="prev"
                                                   type="submit" id="prev_part3" name="prev_part3" class="btnExample"
                                                   value="PREVIOUS STEP">
                                            <input role="button" type="button" id="step3_part_next" value="SEND FORM">
                                        </div>


                                    </div>

                                    <div class="item">
                                        <div id="part_successfull">
                                            <i class="fa"></i>
                                            Thank you for placing a part exchange request. We will get back to you
                                            shortly
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="social-networks" id="social_networks">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Social networks</h3>
                    <div class="col-md-6">
                        <script src="https://widget.reviews.co.uk/vertical/dist.js"></script>
                        <div id="tweet-page-widget1" style="width:100%; border-radius:8px">
                            <iframe name="full-page-widget_frame" id="full-page-widget_frame"
                                    src="https://widget.reviews.co.uk/vertical/widget?elementId=full-page-widget&amp;version=1&amp;&amp;store=webuyanyelectronics&amp;primaryClr=%2348beeb&amp;neutralClr=%23f4f4f4&amp;buttonClr=%23fff&amp;textClr=%23fff&amp;layout=fullWidth&amp;height=400&amp;numReviews=21"
                                    frameborder="0" width="100%" title="Reviews Vertical Widget" style="min-width: 170px;"
                                    height="499">

                            </iframe>
                        </div>
<!--                        <script>-->
<!--                            verticalWidget('tweet-page-widget1', {-->
<!--                                store: 'webuyanyelectronics',-->
<!--                                primaryClr: '#48beeb',-->
<!--                                neutralClr: '#f4f4f4',-->
<!--                                buttonClr: '#fff',-->
<!--                                textClr: '#fff',-->
<!--                                layout: 'fullWidth',-->
<!--                                height: 400,-->
<!--                                numReviews: 21-->
<!--                            });-->
<!--                        </script>-->
                    </div>

                    <div class="col-md-6">
                        <script src="https://widget.reviews.co.uk/vertical/dist.js"></script>
                        <div id="tweet-page-widget2" style="width:100%; border-radius:8px">
                            <iframe name="full-page-widget_frame" id="full-page-widget_frame"
                                    src="https://widget.reviews.co.uk/vertical/widget?elementId=full-page-widget&amp;version=1&amp;&amp;store=webuyanyelectronics&amp;primaryClr=%2348beeb&amp;neutralClr=%23f4f4f4&amp;buttonClr=%23fff&amp;textClr=%23fff&amp;layout=fullWidth&amp;height=400&amp;numReviews=21"
                                    frameborder="0" width="100%" title="Reviews Vertical Widget" style="min-width: 170px;"
                                    height="499">

                            </iframe>
                        </div>
                        <!--                        <script>-->
                        <!--                            verticalWidget('tweet-page-widget2', {-->
                        <!--                                store: 'webuyanyelectronics',-->
                        <!--                                primaryClr: '#48beeb',-->
                        <!--                                neutralClr: '#f4f4f4',-->
                        <!--                                buttonClr: '#fff',-->
                        <!--                                textClr: '#fff',-->
                        <!--                                layout: 'fullWidth',-->
                        <!--                                height: 400,-->
                        <!--                                numReviews: 21-->
                        <!--                            });-->
                        <!--                        </script>-->
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="shiw2 hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><h2>About Us</h2>
                    <h3>
                        <strong>
                            In 2003, we began our london based specialist electronics service, focusing on the repair and
                            sales of apple devices. alongside, we began looking into ways to ensure that our old electronics
                            were reinvested back into our global community.
                        </strong><br><br>
                        For as long as electronics have been continually upgraded, consumers have been left with an ever
                        mounting supply of disused, unwanted computers, laptops and mobiles. some are faulty, missing
                        cables or essential parts and some kept and refined to a drawer as a 'spare' that never ends up
                        being needed.

                    </h3>
<!--                    <a id="about_links" href="/about-us">Read More</a>-->
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/about.png"?> " alt="WeBuyAnyMacs" class="img-responsive"></div>
            </div>
        </div>
    </div>


    <div class="out-rev hidden-xs hidden-sm" id="site-rev">
        <div class="container site-reviews">
            <div class="row">
                <div class="col-md-12"><h3>Our reviews</h3></div>
                <div class="col-sm-12">


                    <script src="https://widget.reviews.co.uk/vertical/dist.js"></script>
                    <div id="full-page-widget" style="width:100%; border-radius:8px">
                        <iframe name="full-page-widget_frame" id="full-page-widget_frame"
                                src="https://widget.reviews.co.uk/vertical/widget?elementId=full-page-widget&amp;version=1&amp;&amp;store=webuyanyelectronics&amp;primaryClr=%2348beeb&amp;neutralClr=%23f4f4f4&amp;buttonClr=%23fff&amp;textClr=%23fff&amp;layout=fullWidth&amp;height=400&amp;numReviews=21"
                                frameborder="0" width="100%" title="Reviews Vertical Widget" style="min-width: 170px;"
                                height="499"></iframe>
                    </div>
<!--                    <script>-->
<!--                        verticalWidget('full-page-widget', {-->
<!--                            store: 'webuyanyelectronics',-->
<!--                            primaryClr: '#48beeb',-->
<!--                            neutralClr: '#f4f4f4',-->
<!--                            buttonClr: '#fff',-->
<!--                            textClr: '#fff',-->
<!--                            layout: 'fullWidth',-->
<!--                            height: 400,-->
<!--                            numReviews: 21-->
<!--                        });-->
<!--                    </script>-->
                </div>


            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>

        $(document).ready(function () {

            $("#review-scroll").click(function () {
                $('html, body').animate({
                    scrollTop: $("#site-rev").offset().top
                }, 1500, 'easeOutQuint');
            });
        });
    </script>

<?php get_footer();
