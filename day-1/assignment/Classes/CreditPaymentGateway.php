<?php

namespace ATSessionDay1\Classes;

use ATSessionDay1\Abstracts\BasePaymentGateway;
use ATSessionDay1\Contracts\FeeableContract;
use ATSessionDay1\Contracts\PaymentGatewayContract;

/**
 * Credit Payment Gateway
 * 
 * @since 1.0.0 
 */
class CreditPaymentGateway extends BasePaymentGateway implements PaymentGatewayContract, FeeableContract
{
    /**
     * Payment Fee
     * @var int 
     * @since 1.0.0
     */
    private $fee;

    /**
     * Construct the credit payment gateway
     *
     * @param string $currency
     * @since 1.0.0
     */
    public function __construct($currency = 'usd', $discount = 0, $fee = 0)
    {
        parent::__construct($currency, $discount);
        
        $this->setFee($fee);
    }

    /**
     * Set fee for the payment
     *
     * This method converts $fee into cents
     * @param int $fee
     * @return void
     * @since 1.0.0
     */
    public function setFee($fee)
    {
        $this->fee = $fee * 100;
    }

    /**
     * Send notification on successful payment
     *
     * @return void
     * @since 1.0.0
     */
    public function sendNotification()
    {
        return 'Payment successfully completed via credit card!';
    }

    /**
     * Charge the payment
     *
     * @param int $amount
     * @return array
     * @since 1.0.0
     */
    public function charge($amount)
    {
        return [
            'amount' => ($amount + $this->fee - $this->discount)/100,
            'amount_in_cents' => $amount + $this->fee - $this->discount,
            'actual_amount' => $amount,
            'discount' => $this->discount,
            'fee' => $this->fee,
            'confirmation_number' => rand(),
            'currency' => $this->currency,
        ];
    }
}
