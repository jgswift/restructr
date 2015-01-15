<?php
namespace restructr {
    abstract class ValueArray implements Interfaces\ValueObject {
        use Traits\ArrayImmutable;
        
        /**
         * @see \restructr\Entity::$DOMAIN_PROPERTY
         */
        public static $DOMAIN_PROPERTY = 'data';
        
        /**
         * @see \restructr\Entity::$data
         */
        protected $data = [];
    }
}