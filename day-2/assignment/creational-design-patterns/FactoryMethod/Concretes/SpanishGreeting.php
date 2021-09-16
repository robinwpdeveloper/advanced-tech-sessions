<?php

namespace ATSessionDay2\FactoryMethod\Concretes;

use ATSessionDay2\FactoryMethod\Abstracts\BaseGreeting;

/**
 * Spanish Greeting Class
 * 
 * @since 1.0.0
 */
class SpanishGreeting extends BaseGreeting {
    
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
     * French greeting message
     *
     * @since 1.0.0
     */
    public function sayHello()
    {
        echo "Hola, $this->customerType usuario!" . parent::BR_TAG;
        $this->message();
        $this->specialMessageSpanish();   
    }

    /**
     * Spanish greeting description
     *
     * @since 1.0.0
     */
    public function message()
    {
        echo "Que tenga un lindo día!" . parent::BR_TAG;
    }

    /**
     * Spanish greeting special message
     *
     * @since 1.0.0
     */
    public function specialMessageSpanish(){
        //Rome is such a wonderful city.
        echo "Roma es una ciudad tan maravillosa." . parent::BR_TAG;
    }
}