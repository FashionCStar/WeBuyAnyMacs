<?php
/**
 * Template Name: Help
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


<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 upper-page-title">
                <h1>Help</h1>
            </div>
        </div>
    </div>
</div>
<div id="final-shipping-step" class="wizard-inner trackorder-base">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 inner-static-page">
                We welcome all customer feedback, so if you have any questions, comments,
                or other related queries concerning our services then please feel free to get in touch with us.
                We can be contacted via Email, Telephone or by using our online contact form at the bottom of this page.
                Our customer services team is waiting to hear from you.
            </div>

            <div id="contact_us">
                <div class="col-sm-12 margin-top-me">
                    <div class="row">
                        <div class="col-sm-6 order-form">
                            <div class="uinfo-border">
                                <h2>Contact Us</h2>
                                <div class="inner-mail">
                                    <i class="fa"></i>Email
                                </div>
                                <div class="inner-uinfo-text2" style="text-align:center">
                                    Please contact us via email on:<br>
                                    <a href="mailto:info@webuyanyelectronics.com">info@webuyanyelectronics.com</a>
                                </div>

                                <div class="inner-phone">
                                    <i class="fa"></i> Telephone
                                </div>
                                <div class="inner-uinfo-text2" style="text-align:center">
                                    Office: 0203 664 0642<br>
                                    Mobile: 07557057629<br>
                                    Our phone lines are open between <br> 10am - 6:30pm, Monday - Friday.
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 order-form">
                            <div class="uinfo-border">
                                <h2>Contact Form</h2>
                                <div class="inner-uinfo-text">
                                    You will receive an automated response to your enquiry upon successful
                                    receipt of your query. We aim to answer all queries within 1 hour between
                                    our office hours of 10am - 6:30pm, Monday - Friday.
                                </div>

                                <?php echo do_shortcode('[contact-form-7 id="110" title="Contact Help"]'); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();