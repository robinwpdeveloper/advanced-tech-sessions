<?php 

namespace ATSessionDay2\FactoryMethod\Abstracts;

use ATSessionDay2\FactoryMethod\Interfaces\IGreetable;

/**
 * Base Greeting Class
 * 
 * All greeting class must extend this base class
 * @since 1.0.0
 */
abstract class BaseGreeting implements IGreetable{

    /**
     * line break tag
     * 
     * @since 1.0.0
     */
    const BR_TAG = PHP_EOL;
    
    /**
     * customer nationality
     *
     * helps to show different message as per customer nationality or type.
     * @var string
     * @since 1.0.0
     */
    public $customerType;

    /**
     * Base greeting constructor
     *
     * @param string $customerType
     * @since 1.0.0
     */
    public function __construct(string $customerType)
    {
        $this->customerType = ucwords($customerType);
    }

    /**
     * Greeting message
     *
     * @since 1.0.0
     */
    public function sayHello()
    {
        echo "Hello $this->customerType user!" . self::BR_TAG;
    }

    /**
     * Greeting description
     *
     * @since 1.0.0
     */
    abstract public function message();
}