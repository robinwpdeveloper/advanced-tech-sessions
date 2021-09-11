<?php

namespace ATSessionDay1\Contracts;

/**
 * Discountable Contract
 * 
 * Set discount before any payment occurs
 * @since 1.0.0
 */
interface DiscountableContract
{
    /**
     * Set discount
     *
     * @return void
     * @since 1.0.0
     */
    public function setDiscount($discount);
}
