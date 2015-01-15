<?php
namespace restructr\Traits {
    trait RecursiveIterator {
        use ArrayIterator;
        
        /**
         * @see \RecursiveIterator::getChildren
         */
        public function getChildren() {
            return $this->current();
        }
        
        /**
         * @see \RecursiveIterator::hasChildren
         */
        public function hasChildren() {
            return $this->isIterable() ? true : false;
        }
        
        /**
         * Checks if the current value is RecursiveIterator
         * @return type
         */
        public function isIterable() {
            $current = $this->current();
            return $current instanceof \RecursiveIterator ?
                   true : false;
        }
    }
}