<?php
/**
 * Result Count
 *
 * Shows text: Showing x - x of x results.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/result-count.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 upper-page-title">
            <div class="site-paging">
                <div class="category-filtering">
                    <div class="lt_page_info">
                        <?php
                        if ( $total <= $per_page || -1 === $per_page ) {
                            /* translators: %d: total results */
                            printf( _n( 'Showing all %d result', 'Showing all %d results', $total, 'woocommerce' ), $total, $total );
                        } else {
                            $first = ( $per_page * $current ) - $per_page + 1;
                            $last  = min( $total, $per_page * $current );
                            $pagenum = floor($total/$per_page) + 1;
                            /* translators: 1: first result 2: last result 3: total results */
                            printf( _nx( '', 'Page %1$d from %2$d - Total Items: %3$d', $total, 'woocommerce' ), $current, $pagenum, $total );
                        }
                        ?>
                    </div>

<!--                    <div style=" text-align:right">-->
<!--                        <span class="currentPage">1</span>-->
<!--                        <a href="/Sell/MacBook/2">2</a>-->
<!--                        <a href="/Sell/MacBook/3">3</a>-->
<!--                        <a href="/Sell/MacBook/4">4</a>-->
<!--                    </div>-->

                    <nav class="woocommerce-pagination">
                        <?php
                        $total_pages   = isset( $total_pages ) ? $total_pages : wc_get_loop_prop( 'total_pages' );
                        $current1 = isset( $current ) ? $current : wc_get_loop_prop( 'current_page' );
                        $base    = isset( $base ) ? $base : esc_url_raw( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) );
                        $format  = isset( $format ) ? $format : '';
                        echo paginate_links( apply_filters( 'woocommerce_pagination_args', array( // WPCS: XSS ok.
                            'base'         => $base,
                            'format'       => $format,
                            'add_args'     => false,
                            'current'      => max( 1, $current1 ),
                            'total'        => $total_pages,
                            'prev_text'    => '&larr;',
                            'next_text'    => '&rarr;',
                            'type'         => 'list',
                            'end_size'     => 3,
                            'mid_size'     => 3,
                        ) ) );
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

