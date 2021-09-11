<?php 

/**
 * @package Advanced Tech Sessions
 * @subpackage Day 1
 * 
 * Expected output: https://d.pr/i/bDcFvU 
 * Author: A. H. M. Nazmul Hasan Monshi
 * Email: robin.wpdeveloper@gmail.com 
 * Github: https://github.com/robinwpdeveloper 
 * 
 * @version 1.0.0
 */

/**
 * Include autoloader
 * 
 * @since 1.0.0
 */

use ATSessionDay1\Classes\BankPaymentGateway;
use ATSessionDay1\Classes\PayOrder;

require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * Bank Payment Gateway 
 * 
 * It takes $currency and $discount
 * @since 1.0.0
 */
$paymentGateway = new BankPaymentGateway('eur', 30);

/**
 * Credit Card Payment Gateway
 * 
 * It takes $currency, $discount and $fee
 * @since 1.0.0 
 */
// $paymentGateway = new CreditPaymentGateway('usd', 20 , 15);


/**
 * Pay any order 
 * 
 * It takes $paymentGateway instance and $amount to be charged
 * @since 1.0.0
 */
$payOrder = new PayOrder($paymentGateway, 50);


/**
 * Output the payment details after a successful payment
 * 
 * It just print out the payment details array
 * @since 1.0.0
 */
echo "<pre>";
print_r($payOrder->handle());