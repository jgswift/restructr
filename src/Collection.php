<?php
namespace restructr {
    abstract class Collection implements Interfaces\Collection, \ArrayAccess, \IteratorAggregate {
        use Traits\ArrayAggregate, Traits\Collection, Traits\ArrayAccess;
        
        /**
         * @see \restructr\Entity::$DOMAIN_PROPERTY
         */
        public static $DOMAIN_PROPERTY = 'items';
        
        /**
         * @see \restructr\Entity::$data
         */
        protected $items = [];
    }
}