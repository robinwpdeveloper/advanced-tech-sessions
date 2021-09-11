<?php

namespace ATSessionDay1\Contracts;

/**
 * Feeable Contract
 * 
 * Set fee before any payment occurs
 * @since 1.0.0
 */
interface FeeableContract
{
    /**
     * Set fee
     *
     * @return void
     * @since 1.0.0
     */
    public function setFee($fee);
}
