<?php

namespace ATSessionDay1\Contracts;

/**
 * Payment Gateway Contract
 * 
 * Charge a payment
 * @since 1.0.0
 */
interface PaymentGatewayContract
{
    /**
     * Accept an amount and charge
     * 
     * return an array with charge details
     * @return array
     * @since 1.0.0
     */
    public function charge($amount);
}
