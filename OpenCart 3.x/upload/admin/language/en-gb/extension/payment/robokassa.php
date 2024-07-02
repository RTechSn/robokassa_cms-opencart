<?php
// Heading
$_['heading_title']   	 	= 'Robokassa';

// Text 
$_['text_payment']      	= 'Payment';
$_['text_success']       	= 'Robokassa payment module settings saved successfully!';
$_['text_robokassa'] 		= '<a target="_blank" href="https://robokassa.ru/"><img src="/admin/view/image/payment/robokassa.png" alt="robokassa" style="max-width:140px" /></a>';
$_['text_edit']      	    = 'Robokassa module settings';
$_['text_enabled']          = 'Enabled';
$_['text_disabled']         = 'Disabled';
$_['text_yes']           	= 'Yes';
$_['text_no']            	= 'No';
$_['text_kz']           	= 'Kazachstan';
$_['text_ru']            	= 'Russia';

// Entry
$_['entry_merch_login']     = 'Shop ID';
$_['entry_password1']    	= 'Password 1';
$_['entry_password2']    	= 'Password 2';
$_['entry_test_password1']  = 'Test password 1';
$_['entry_test_password2']  = 'Test password 2';
$_['entry_test']         	= 'Test mode';
$_['entry_tax_type']        = 'Tax type';
$_['entry_tax']         	= 'Tax';
$_['entry_payment_method']  = 'Payment method';
$_['entry_payment_object']  = 'Payment object';
$_['entry_fiscal']         	= '<a href="https://fiscal.robokassa.ru/" target="_blank">Fiscalization</a>';
$_['entry_result_url']     	= 'Result URL';
$_['entry_success_url']     = 'Success URL';
$_['entry_fail_url']      	= 'Fail URL';
$_['entry_order_status'] 	= 'Payed order status';
$_['entry_geo_zone']     	= 'Geo zone';
$_['entry_status']       	= 'Status';
$_['entry_sort_order']   	= 'Sort order';
$_['entry_country']   		= 'Shop country';
$_['entry_iframe']   		= 'Enable iframe';
$_['entry_languages_map']   = 'Payment page UI language';
$_['entry_podeli']   		= 'Payment with Podeli';
$_['entry_hold']   	        = 'Delayed payments';

// Help
$_['help_iframe']         	= 'If you enable iframe, payment options will be limited to Credit card, Apple Pay, Samsung Pay and Qiwi. IncCurrLabel works with some limitations';
$_['help_fiscal']         	= 'Fiscal cheque mode - Cloud cash register, regular cash register, Robocheque.';
$_['help_test']         	=   'Testing mode. You can find the logfile here: storage/logs/robo.log';
$_['help_podeli']           = 'Enables RobokassaXPodeli payment method. It allows users to split payments to multilpe parts. Available for orders with total sum between 300 and 3000';
$_['help_hold']             = 'Contact Robokassa support to enable this feature. Warning: this feature is available for credit card payment only';

// Error
$_['error_permission']   	=  'Error: you have no permission for this module!';
$_['error_merch_login']     = 'You must enter username!';
$_['error_password1']    	= 'You must enter password 1!';
$_['error_password2']    	= 'You must enter password 2!';
?>
