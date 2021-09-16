<?php

namespace ATSessionDay2\FactoryMethod\Concretes;

use ATSessionDay2\FactoryMethod\Abstracts\BaseGreeting;

/**
 * English Greeting Class
 * 
 * @since 1.0.0
 */
class EnglishGreeting extends BaseGreeting {

    /**
     * Greeting class constructor
     *
     * @param string $customerType
     * @since 1.0.0
     */
    public function __construct($customerType)
    {
        parent::__construct($customerType);
    }

    /**
     * English greeting message
     *
     * @since 1.0.0
     */
    public function sayHello()
    {
        echo "Hello $this->customerType user!" . parent::BR_TAG;
        $this->message();   
    }

    /**
     * English greeting description
     *
     * @since 1.0.0
     */
    public function message()
    {
        echo "Have a nice day!" . parent::BR_TAG;;
    }
}