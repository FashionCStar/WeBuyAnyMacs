<?php
/**
 * Show messages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/notices/success.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! $messages ) {
	return;
}

?>

<?php foreach ( $messages as $message ) : ?>
<div class="container" id="add_cart_notice" style=" margin-top: 10px;">
        <div id="msg_add_to_basket" role="alert">
            <i class="fa"></i>
            <?php
                echo wc_kses_notice( $message );
            ?>
        </div>
</div>

<?php endforeach; ?>
