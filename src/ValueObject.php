<?php
namespace restructr {
    abstract class ValueObject implements Interfaces\ValueObject {
        use Traits\ObjectImmutable;
        
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