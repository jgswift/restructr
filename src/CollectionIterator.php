<?php
namespace restructr {
    abstract class CollectionIterator implements Interfaces\Collection, \Iterator {
        use Traits\ArrayIterator, Traits\Collection;
        
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