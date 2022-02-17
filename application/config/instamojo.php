<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* instamojo payment API v1 library for CodeIgniter
*
* @license Creative Commons Attribution 3.0 <http://creativecommons.org/licenses/by/3.0/>
* @version 1.0
* @author Rajeev bbqq <https://github.com/rajeevbbqq>
* @copyright Copyright (c) 2018, Rajeev bbqq
*/

/*
|--------------------------------------------------------------------------
| Mode
|--------------------------------------------------------------------------
|
| $config['mojo_mode'] = 'sandbox'; for testing
| $config['mojo_mode'] = 'live'   ; for production
|
*/


$config['mojo_mode']  = 'sandbox' ;


/*
|--------------------------------------------------------------------------
| API_KEY
|--------------------------------------------------------------------------
| API_KEY are different for test and production !
| $config['mojo_apikey'] = '650f7eed3d900273d6fafd635a';
|
*/

$config['mojo_apikey'] = 'test_7f9c132fed56a9b5c8f8791d8bc' ;


/*
|--------------------------------------------------------------------------
| AUTH_TOKEN
|--------------------------------------------------------------------------
| AUTH_TOKEN are different for test and production !
| $config['mojo_token'] = '650f7eed3d900273d6fafd635a';
|
*/


$config['mojo_token']  = 'test_cd372e2ed148bee66b6a0c6d4c1' ;



/*
|--------------------------------------------------------------------------
| API_SALT
|--------------------------------------------------------------------------
| API_SALT are different for test and production !
| $config['mojo_token'] = '650f7eed3d900273d6fafd635a';
|
*/


$config['mojo_salt']  = 'f226d785c8dc4071b8b13d260d91c1b9' ;




/*
|--------------------------------------------------------------------------
| REDIRECT_URL
|--------------------------------------------------------------------------
| Set redirect url !
| $config['mojo_url'] = 'https://github.com/Instamojo/instamojo-php';
|
*/

$config['mojo_url'] = 'http://partner.gemsbihar.org/Payments/status';



/*
|--------------------------------------------------------------------------
| Webhook
|--------------------------------------------------------------------------
| To Get the Payment Detial for the pitucluar payment 
|
*/


$config['mojo_webhook_url'] = 'http://partner.gemsbihar.org/Payments/webhook_detail';



/*
|--------------------------------------------------------------------------
| DATABASE
|--------------------------------------------------------------------------
| Creates a 'mojo' table and store all orders, if set to true
|
*/

$config['mojo_db']  = true ;


/*
|--------------------------------------------------------------------------
| TABE NAME
|--------------------------------------------------------------------------
| Creates table if $config['mojo_db']  = true ;
|
*/

$config['mojo_table']  = 'tbl_payments' ;


/* End of file instamojo.php */
/* Location: ./application/config/instamojo.php */
