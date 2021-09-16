<?php

namespace ATSessionDay2\FactoryMethod\Factories;

use ATSessionDay2\FactoryMethod\Concretes\EnglishGreeting;
use ATSessionDay2\FactoryMethod\Concretes\FrenchGreeting;
use ATSessionDay2\FactoryMethod\Concretes\SpanishGreeting;

/**
 * Greeting Factory Class
 * 
 * @since 1.0.0
 */
class GreetingFactory{

    /**
     * English user type/slug
     * 
     * Used to determine customer type
     * @since 1.0.0
     */
    private const ENGLISH_USER = 'english';
    
    /**
     * French user type/slug
     * 
     * Used to determine customer type
     * @since 1.0.0
     */
    private const FRENCH_USER = 'french';
    
    /**
     * Spanish user type/slug
     * 
     * Used to determine customer type
     * @since 1.0.0
     */
    private const SPANISH_USER = 'spanish';

    /**
     * Create Greeting object
     * 
     * This method creates an object based on customer type/nationality
     * @var string
     * @return object
     * @since 1.0.0
     */
    public function create($customerType)
    {
        switch ($customerType) {
            case self::ENGLISH_USER :
                return new EnglishGreeting($customerType);
                break;
            
            case self::FRENCH_USER :
                return new FrenchGreeting($customerType);
                break;
            
            case self::SPANISH_USER :
                return new SpanishGreeting($customerType);
                break;

            default :
                return new EnglishGreeting($customerType);
                break;
        }
    }
}