<?php
/**
 * Handle Woocommerce bundled products on cart and order page while calculate shipping and generate label 
 * Plugin link : https://woocommerce.com/products/product-bundles/
 */

// Skip the bundled products while generating the packages on order page

if( !function_exists('ph_ups_woocommerce_bundle_product_support_on_generate_label') )
{
	function ph_ups_woocommerce_bundle_product_support_on_generate_label( $package_items, $order )
	{
		$orderItems = $order->get_items();
		$child_items_cart_key_to_be_ignored = array();
		$order_items_need_to_skip 		= array();
		$bundled_item_exist_in_order = false;
		foreach( $orderItems as $key => $orderItem )
		{
			$count_the_child_item_required_shipping = null;
			$item_id 	= $orderItem['variation_id'] ? $orderItem['variation_id'] : $orderItem['product_id'];

			if( empty($items[$item_id]) ) {
				
				$product_data 		= wc_get_product( $item_id );

				if( is_a( $product_data, 'WC_Product' ) && $product_data->needs_shipping() ){
					// For Woocommerce product bundle type
					if( $product_data->get_type() == 'bundle' ) {

						// If bundled item is prepacked add it to the package
						$pre_packed = $product_data->get_meta('_wf_pre_packed_product');
						if( $pre_packed == 'yes') {
							$items[$item_id] 	= array('data' => $product_data , 'quantity' => $orderItem['qty']);
						}
						else {
							// Bundle product cart key
							$bundle_item_cart_key = $orderItem->get_meta('_bundle_cart_key');
							foreach( $orderItems as $order_item_key => $order_item ) {
								// Parent cart key of child item
								$parent_cart_key_of_child_item 	= $order_item->get_meta('_bundled_by');
								
								if( $parent_cart_key_of_child_item == $bundle_item_cart_key ) {
									$child_item_need_shipping = $order_item->get_meta('_bundled_item_needs_shipping');
									if( $child_item_need_shipping == 'yes' ) {
										$count_the_child_item_required_shipping++;
									}
								}
							}
							$child_items = $orderItem->get_meta('_bundled_items');
							// Add bundled product to the package only if not all the child item needs shipping
							if( count($child_items) > $count_the_child_item_required_shipping ) {
								$items[$item_id] 	= array('data' => $product_data , 'quantity' => $orderItem['qty']);
							}
						}
					}
					// If product is not a bundled product
					else{
						$child_product_need_shipping = $orderItem->get_meta('_bundled_item_needs_shipping');
						// Empty in case of normal product and yes in case of child product require shipping
						if( empty($child_product_need_shipping) || $child_product_need_shipping == 'yes' ) {
							$items[$item_id] 	= array('data' => $product_data , 'quantity' => $orderItem['qty']);
						}
					}
				}
			}
			// If a product came twice in order, might be one in bundle and one individually
			else {
				$child_product_need_shipping = $orderItem->get_meta('_bundled_item_needs_shipping');
				if( empty($child_product_need_shipping) || $child_product_need_shipping == 'yes' ) {
					$items[$item_id]['quantity'] += $orderItem['qty'];
				}
			}
		}

		// If bundled product exist in order then only modify the package items
		$package_items = $items;
		return $package_items;
	}
}

add_filter( 'xa_ups_get_customized_package_items_from_order', 'ph_ups_woocommerce_bundle_product_support_on_generate_label', 9, 2 );

//End of skip bundled products and external products while generating the packages


// Customize or break package if package contains bundled product on cart and checkout page
if( !function_exists('wf_ups_break_bundled_products_to_individual_product_packages') )
{
	function wf_ups_break_bundled_products_to_individual_product_packages( $package )
	{
		foreach($package['contents'] as $key => $product)
		{
			$count = null;
			$item_count_in_bundle = null;
			if( $product['data']->get_type() == 'bundle' ) {

				// If Bundled product is prepacked remove all the child items
				$pre_packed = $product['data']->get_meta('_wf_pre_packed_product');
				if( $pre_packed == 'yes' ) {
					foreach( $product['bundled_items'] as $bundled_item_key ) {
						unset( $package['contents'][$bundled_item_key]);
					}
				}
				else {
					foreach( $product['bundled_items'] as $bundled_item_key ) {
						$item_count_in_bundle++;
						if( isset( $package['contents'][$bundled_item_key] ) ){
							// Price is not set when price individually not marked, price required for insurance and customs purpose
							$child_product_price = $package['contents'][$bundled_item_key]['data']->get_price();
							if( empty($child_product_price) ) {
								$child_product = wc_get_product($package['contents'][$bundled_item_key]['data']);
								$package['contents'][$bundled_item_key]['data']->set_price($child_product->get_price());
							}
							$count++;
						}
					}

					// If no. of child product in bundled product equal to number of child product availability in package then unset parent product, note child product only available in package if marked for shipped individually
					if( $count == $item_count_in_bundle ) {
						unset($package['contents'][$key]);
					}
				}
			}
		}

		return $package;
	}
}

add_filter( 'wf_customize_package_on_cart_and_checkout', 'wf_ups_break_bundled_products_to_individual_product_packages', 9 );

// End of customize or break package if package contains bundled product on cart and checkout page