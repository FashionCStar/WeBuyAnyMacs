<?php
/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="site-paging">
    <div class="category-filtering">
        <div class="lt_page_info">Filtering</div>
        <div class="control-list">
            <div id="panel_p2">

                <?php
                if ( is_active_sidebar( 'buzzproductfilterform' ) ){
                    dynamic_sidebar( 'buzzproductfilterform' );
                    wc_enqueue_js(
                        "  jQuery('#panel_p2 section form select').select2('destroy');"
                    );
                }
                ?>
            </div>
        </div>
    </div>
</div>


