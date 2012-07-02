<?php
// This is for the gateway display
add_action('action_hook_espresso_display_offsite_payment_header', 'espresso_display_offsite_payment_header');
add_action('action_hook_espresso_display_offsite_payment_footer', 'espresso_display_offsite_payment_footer');
require_once($path . "/payfast_vars.php");


// This is for the transaction processing
require_once($path . "/payfast_ipn.php");
if (!empty($_REQUEST['type']) && $_REQUEST['type'] == 'payfast') 
{
	add_filter('filter_hook_espresso_transactions_get_attendee_id', 'espresso_transactions_payfast_get_attendee_id');
	add_filter('filter_hook_espresso_transactions_get_payment_data', 'espresso_process_payfast');
}