<?php

namespace ATSessionDay1\Abstracts;

use ATSessionDay1\Contracts\DiscountableContract;

/**
 * Base Payment Gateway
 * 
 * All payment gateway should extend this class
 * @since 1.0.0 
 */
abstract class BasePaymentGateway implements DiscountableContract
{

    /**
     * Payment currency
     *
     * @var string
     * @since 1.0.0
     */
    protected $currency;

    /**
     * Amount to be discounted
     *
     * @var int
     * @since 1.0.0
     */
    protected $discount;


    /**
     * Class constructor
     *
     * @param string $currency
     * @since 1.0.0
     */
    public function __construct($currency, $discount = 0)
    {
        $this->currency = $currency;
        $this->setDiscount($discount);
    }

    /**
     * Set discount of the payment
     *
     * This method converts $discount into cents
     * @param int $discount
     * @return void
     * @since 1.0.0
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount * 100;
    }

    /**
     * Send notification on successful payment
     *
     * @return void
     * @since 1.0.0
     */
    abstract public function sendNotification();
}
