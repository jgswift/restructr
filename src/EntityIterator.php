<?php
namespace restructr {
    abstract class EntityIterator implements Interfaces\Entity, \Iterator {
        use Traits\ArrayIterator, Traits\Entity;
        
        /**
         * @see \restructr\Entity::$DOMAIN_PROPERTY
         */
        public static $DOMAIN_PROPERTY = 'data';
        
        /**
         * @see \restructr\Entity::$data
         */
        protected $data = [];
        
        /**
         * @see \restructr\Entity::__construct
         */
        public function __construct(array $data = []) {
            call_user_func_array([$this,'initialize'], [$data]);
        }
    }
}