jQuery(document).ready(function(){

	// Toggle Estimated delivery related data
	ph_ups_toggle_based_on_checkbox_status( '#woocommerce_wf_shipping_ups_enable_estimated_delivery', '.ph_ups_est_delivery' );
	jQuery('#woocommerce_wf_shipping_ups_enable_estimated_delivery').click(function(){
		ph_ups_toggle_based_on_checkbox_status( '#woocommerce_wf_shipping_ups_enable_estimated_delivery', '.ph_ups_est_delivery' );
	});

	// Toggle pickup options
	wf_ups_load_pickup_options();
	jQuery('#woocommerce_wf_shipping_ups_pickup_enabled').click(function(){
		wf_ups_load_pickup_options();
	});
	
	// Toggle declaration Statement for Commercial Invoice
	ph_ups_toggle_based_on_checkbox_status( '#woocommerce_wf_shipping_ups_commercial_invoice', '#woocommerce_wf_shipping_ups_declaration_statement');
	jQuery('#woocommerce_wf_shipping_ups_commercial_invoice').click(function(){
		ph_ups_toggle_based_on_checkbox_status( '#woocommerce_wf_shipping_ups_commercial_invoice', '#woocommerce_wf_shipping_ups_declaration_statement');
	});

	jQuery('#woocommerce_wf_shipping_ups_pickup_date').change(function(){
		wf_ups_load_working_days();
	});

	// Toggle Minimum Insurance amount
	ph_ups_toggle_based_on_checkbox_status( '#woocommerce_wf_shipping_ups_insuredvalue', '#woocommerce_wf_shipping_ups_min_order_amount_for_insurance' );
	jQuery('#woocommerce_wf_shipping_ups_insuredvalue').click(function(){
		ph_ups_toggle_based_on_checkbox_status( '#woocommerce_wf_shipping_ups_insuredvalue', '#woocommerce_wf_shipping_ups_min_order_amount_for_insurance' );
	});

	// Toggle Minimum Insurance amount
	ph_ups_toggle_based_on_checkbox_status( '#woocommerce_wf_shipping_ups_ship_from_address_different_from_shipper', '.ph_ups_different_ship_from_address' );
	jQuery('#woocommerce_wf_shipping_ups_ship_from_address_different_from_shipper').click(function(){
		ph_ups_toggle_based_on_checkbox_status( '#woocommerce_wf_shipping_ups_ship_from_address_different_from_shipper', '.ph_ups_different_ship_from_address' );
	});

	// Toggle Label Size
	ph_toggle_ups_label_size();
	jQuery('#woocommerce_wf_shipping_ups_show_label_in_browser').click(function(){
		ph_toggle_ups_label_size();
	});

	// Toggle Label Format based on Print Label Type option and Display Label in Browser.
	ph_ups_toggle_label_format();
	jQuery('#woocommerce_wf_shipping_ups_print_label_type').change(function(){
		ph_ups_toggle_label_format();
		ph_toggle_ups_label_size();
	});
	// End of Toggle Label Format

	//Toggle Email Settings
	ph_ups_toggle_label_email_settings();
	jQuery('#woocommerce_wf_shipping_ups_auto_email_label').change(function(){
		ph_ups_toggle_label_email_settings();
	});
	// End of Toggle Email Settings
});

/**
 * Toggle Label Size option.
 */
function ph_toggle_ups_label_size(){
	if( jQuery("#woocommerce_wf_shipping_ups_print_label_type").val() == 'gif' || jQuery("#woocommerce_wf_shipping_ups_print_label_type").val() == 'png' ) {
		ph_ups_toggle_based_on_checkbox_status( '#woocommerce_wf_shipping_ups_show_label_in_browser', '#woocommerce_wf_shipping_ups_resize_label' );
	}
	else{
		jQuery("#woocommerce_wf_shipping_ups_resize_label").closest('tr').hide();
	}
}

// Toggle based on checkbox status
function ph_ups_toggle_based_on_checkbox_status( tocheck, to_toggle ){
	if( ! jQuery(tocheck).is(':checked') ) {
		jQuery(to_toggle).closest('tr').hide();
	}
	else{
		jQuery(to_toggle).closest('tr').show();
	}
}

function wf_ups_load_pickup_options(){
	var checked	=	jQuery('#woocommerce_wf_shipping_ups_pickup_enabled').is(":checked");
	if(checked){
		jQuery('.wf_ups_pickup_grp').closest('tr').show();
	}else{
		jQuery('.wf_ups_pickup_grp').closest('tr').hide();
	}
	wf_ups_load_working_days();
}

function wf_ups_load_working_days(){
	var pickup_date = jQuery('#woocommerce_wf_shipping_ups_pickup_date').val();
	if( pickup_date != 'specific' ){
		jQuery('.pickup_working_days').closest('tr').hide();
	}else{
		jQuery('.pickup_working_days').closest('tr').show();
	}
}

/**
 * Toggle Label Format based on Print Label Type option and Display Label in Browser.
 */
function ph_ups_toggle_label_format() {
	if( jQuery("#woocommerce_wf_shipping_ups_print_label_type").val() == 'gif' ) {
		jQuery("#woocommerce_wf_shipping_ups_label_format").closest('tr').show();
	}
	else{
		jQuery("#woocommerce_wf_shipping_ups_label_format").closest('tr').hide();
	}
}

/**
 * Toggle UPS Label Email Settings.
 */
function ph_ups_toggle_label_email_settings() {
	if( jQuery("#woocommerce_wf_shipping_ups_auto_email_label").val() == null ) {
		jQuery(".ph_ups_email_label_settings").closest('tr').hide();
	}
	else{
		jQuery(".ph_ups_email_label_settings").closest('tr').show();
	}
}