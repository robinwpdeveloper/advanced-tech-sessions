<?php 

/**
 * @package Advanced Tech Sessions
 * @subpackage Day 2
 * 
 * This is a console application to show a greeting message as per customer nationality!
 * Expected output: An user input is required to determine english/french/spanish nationality users 
 *                  and show greeting messages accordingly.
 * Author: A. H. M. Nazmul Hasan Monshi
 * Email: robin.wpdeveloper@gmail.com 
 * Github: https://github.com/robinwpdeveloper 
 * 
 * @version 1.0.0
 */

use ATSessionDay2\FactoryMethod\Factories\GreetingFactory;

/**
 * Include autoloader
 * 
 * @since 1.0.0
 */

require_once __DIR__ . '/../../../../vendor/autoload.php';

/**
 * Fetch user input
 *
 * User nationality to show country specific greeting 
 * @return string
 * @since 1.0.0
 */
function getCustomerType() : string {
    $customerType = 'english';
    echo "Help us with your nationality.". PHP_EOL;
    echo "\nenglish\nfrench\nspanish\nother\n";
    // get file descriptor for stdin 
    $fd = fopen('php://stdin', 'r');

    // prepare arguments for stream_select()
    $read = array($fd);
    $write = $except = array();
    $timeout = 15;

    if(stream_select($read, $write, $except, $timeout)) {
        $customerType = fgets($fd);
    }
    $customerType = trim($customerType);
    return $customerType;
}

/**
 * Get customer type
 * 
 * @since 1.0.0
 */
$customerType = getCustomerType();

/**
 * Greeting factory to create greeting object
 * 
 * Consumer/client isn't bother about concrete classes.
 * It only knows the factory class.
 * 
 * @since 1.0.0
 */
$greetingObj = (new GreetingFactory())->create($customerType);

/**
 * Show greeting messages by nationalities (english, french, spanish)
 * 
 * @since 1.0.0
 */
$greetingObj->sayHello();