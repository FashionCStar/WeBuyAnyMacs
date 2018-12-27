<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Buzz_Store
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php buzzstore_html_tag_schema(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-scrolling-animations="true">

<input name="modal_tracker" id="modal_tracker" type="checkbox"/>
<div id="site_order_tracker">
    <label for="modal_tracker" class="close big"></label>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div id="inner_tracker_search">
                    <form action="<?php echo home_url("/track-order/") ?>" type="POST">
                        <input maxlength="7" id="tracker_textbox" name="track_id" placeholder="Type your WBAM Tracking Code then Press Enter" type="text">
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="wbae-header">
    <div class="container">
        <div class="row">

            <div class="col-md-5"><a href="/"><img src="<?php echo get_template_directory_uri() . '/assets/images/anymacs-logo.png' ?>" alt="WeBuyAnyMacs"/></a>
            </div>
            <div class="col-md-7 hidden-xs hidden-sm">
                <div class="header-toolbar">

                    <?php buzzstore_cart_link(); ?>

                    <label id="modal_tracker_trigger" for="modal_tracker" class="toolbar-basket2">
                        <i class="fa"></i>Track order
                    </label>
                    <div class="phone-number-hd">
                        <i class="fa"></i>0203 6640 642
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12 hidden-xs hidden-sm postatic">
                    <?php
                    /**
                     * @see  buzzstore_skip_links() - 5
                     */
//                    do_action('buzzstore_header_before');

                    /**
                     * @see  buzzstore_top_header() - 15
                     * @see  buzzstore_main_header() - 20
                     */
                    do_action('buzzstore_header');

//                    do_action('buzzstore_header_after');
                    ?>
                </div>

            </div>
        </div>

        <div id="mobile_menu" class="visible-xs visible-sm">
            <label for="mobile_menu2"><i class="fa"></i>Main Menu</label>
            <input name="mobile_menu2" id="mobile_menu2" type="checkbox"/>
            <div class="mobile-menu-outliner">
                <div class="main-menu-mobile">
<!--                    --><?php //wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                    <a class="call-us-btn" href="tel:02036640642">CALL US NOW!</a>
                    <div class="in-item trackitems">
                        <form action="<?php echo home_url("/track-order/") ?>" type="POST">
                            <input type="text" placeholder="Enter Track Number"
                                   id="tracker_textbox2" name="track_id" class="trackboxitem">
                            <i class="fa"></i>
                        </form>
                    </div>
                    <div class="in-item searchitems">
                        <input type="text" placeholder="Search" id="autocomplete2">
                        <i class="fa"></i>
                    </div>

                    <?php
                    $menuLocations = get_nav_menu_locations();
                    $menuID = $menuLocations['primary']; // Get the *primary* menu ID

                    $primaryNav = wp_get_nav_menu_items($menuID);
                    foreach ( $primaryNav as $navItem ) {
                        echo '<a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>

</div>