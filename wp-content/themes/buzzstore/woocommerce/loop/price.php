<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
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
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
$available_variations = $product->get_available_variations();
$variation_id=$available_variations[0]['variation_id'];
$variable_product1= new WC_Product_Variation( $variation_id );
$regular_price = $variable_product1 ->regular_price;
$sales_price = $variable_product1 ->sale_price;
?>

<?php if ( $price = $regular_price ) : ?>
	<h5><?php echo "We pay you £".$price ?></h5>
<?php endif; ?>
