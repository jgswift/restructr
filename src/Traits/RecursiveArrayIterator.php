<?php
namespace restructr\Traits {
    trait RecursiveArrayIterator {
        use ArrayIterator;
        
        public function getChildren() {
            $current = $this->current();
            if($current instanceof \RecursiveIterator) {
                return $current;
            }
            
            return new \RecursiveArrayIterator($current);
        }
        
        public function hasChildren() {
            return $this->isIterable() ? true : false;
        }
        
        public function isIterable() {
            $current = $this->current();
            return is_array($current) ||
                   $current instanceof \Traversable ||
                   $current instanceof \ArrayAccess ?
                   true : false;
        }
    }
}