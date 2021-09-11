<?php

namespace ATSessionDay1\Classes;

use ATSessionDay1\Abstracts\BasePaymentGateway;
use ATSessionDay1\Contracts\PaymentGatewayContract;

/**
 * Bank Payment Gateway
 * 
 * @since 1.0.0 
 */
class BankPaymentGateway extends BasePaymentGateway implements PaymentGatewayContract
{
    /**
     * Construct the bank payment gateway
     *
     * @param string $currency
     * @since 1.0.0
     */
    public function __construct($currency = 'usd', $discount = 0)
    {
        parent::__construct($currency, $discount);
    }

    /**
     * Send notification on successful payment
     *
     * @return string
     * @since 1.0.0
     */
    public function sendNotification()
    {
        return 'Payment successfully completed via bank!';
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
            'amount' => ($amount - $this->discount)/100,
            'amount_in_cents' => $amount - $this->discount,
            'actual_amount' => $amount,
            'discount' => $this->discount,
            'confirmation_number' => rand(),
            'currency' => $this->currency,
        ];
    }
}
