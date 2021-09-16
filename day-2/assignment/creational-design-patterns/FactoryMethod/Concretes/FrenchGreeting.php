<?php

namespace ATSessionDay2\FactoryMethod\Concretes;

use ATSessionDay2\FactoryMethod\Abstracts\BaseGreeting;

/**
 * French Greeting Class
 * 
 * @since 1.0.0
 */
class FrenchGreeting extends BaseGreeting {
    
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
        echo "Bonjour, $this->customerType utilisateur!" . parent::BR_TAG;
        $this->message();
        $this->specialMessage();   
    }

    /**
     * French greeting description
     *
     * @since 1.0.0
     */
    public function message()
    {
        echo "Bonne journée!" . parent::BR_TAG;
    }

    /**
     * French greeting special message
     *
     * @since 1.0.0
     */
    public function specialMessage(){
        //You are lucky to have Eiffel Tower.
        echo "Tu as de la chance d'avoir la Tour Eiffel." . parent::BR_TAG;
    }
}