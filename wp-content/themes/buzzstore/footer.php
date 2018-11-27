<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Buzz_Store
 */
?>

<div class="before-footer">
    <div class="container">
        <div class="row">

            <div class="col-md-5"><img alt="WeBuyAnyMacs" src="<?php echo get_template_directory_uri() . '/assets/images/anymacs-logo2.png' ?>"></div>
            <div class="col-md-7"></div>
        </div>
    </div>
</div>
<footer class="hidden-xs hidden-sm">
    <div class="container">
        <div class="row">

            <?php

//            do_action( 'buzzstore_footer_before');

            /**
             * @see  buzzstore_footer_widget_area() - 10
             */
            do_action( 'buzzstore_footer_widget');

            /**
             * Button Footer Area
             * Two different filters
             * @see  buzzstore_credit() - 5
             */
//            do_action( 'buzzstore_button_footer');

//            do_action( 'buzzstore_footer_after');
            ?>

        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6"><span>© 2017 WeBuyAnyMacs.com All Rights Reserved</span></div>
            <div class="col-md-6 social-links">
                <a title="Facebook" target=_blank class="facebook" href="https://www.facebook.com/webuyanyelectronic/"><i class="fa"></i></a>
                <a title="Twitter" target=_blank class="twitter" href="https://twitter.com/WeBuyAny"><i class="fa"></i></a>
                <a title="Wordpress" target=_blank class="wordpress" href="https://webuyanyelectronics.wordpress.com"><i class="fa"></i></a>
            </div>
        </div>
    </div>

</div>
<?php wp_footer(); ?>
</body>
</html>
