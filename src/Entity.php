<?php
namespace restructr {
    abstract class Entity implements Interfaces\Entity, Interfaces\Enumerable, \ArrayAccess {
        use Traits\ArrayEnumerableAggregate, Traits\Entity, Traits\ArrayAccess;
        
        /**
         * Store entity data property field name defined on a per class basis
         * @var string 
         */
        public static $DOMAIN_PROPERTY = 'data';
        
        /**
         * Local entity domain data storage property
         * @var array 
         */
        protected $data = [];
        
        /**
         * Default Entity constructor
         * Pass-thru initialization data
         * @todo Convert to variadic - 5.6
         * @param array $data
         */
        public function __construct(array $data = []) {
            call_user_func_array([$this,'initialize'], [$data]);
        }
    }
}