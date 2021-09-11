<?php

namespace ATSessionDay1\Classes;

use ATSessionDay1\Contracts\HandleContract;
use ATSessionDay1\Contracts\PaymentGatewayContract;

/**
 * Pay Order
 * 
 * Do all order payment related stuffs
 * @since 1.0.0 
 */
class PayOrder implements HandleContract
{

    /**
     * Payment Gateway Contract isntance
     *
     * @var PaymentGatewayContract
     * @since 1.0.0
     */
    private $paymentGatewayContract;

    /**
     * Amount to be charged
     *
     * @var int
     */
    private $amount;

    /**
     * Class Constructor
     * 
     * $amount is converted into cents here
     * @param PaymentGatewayContract $paymentGatewayContract
     * @param int $amount
     * 
     * @since 1.0.0
     */
    public function __construct(PaymentGatewayContract $paymentGatewayContract, $amount = 0)
    {
        $this->paymentGatewayContract = $paymentGatewayContract;
        $this->amount = $amount * 100;    
    }

    /**
     * Handle all order paymetn related stuffs
     * 
     * Return all details in an array
     * @return void
     * @since 1.0.0
     */
    public function handle(){
        
        $data['chargeDetails'] = $this->paymentGatewayContract->charge($this->amount);
        $data['notification'] = $this->paymentGatewayContract->sendNotification(); //not error; called from parent class

        return $data;
    }
}
