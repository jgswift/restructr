<?php
namespace restructr\Traits {
    trait ArrayIterator {
        protected $position = 0;
        
        public function current() {
            $index = array_keys($this->{self::$DOMAIN_PROPERTY})[$this->position];
            return $this->{self::$DOMAIN_PROPERTY}[$index];
        }
        
        public function key() {
            return array_keys($this->{self::$DOMAIN_PROPERTY})[$this->position];
        }
        
        public function next() {
            ++$this->position;
        }
        
        public function rewind() {
            $this->position = 0;
        }
        
        public function valid() {
            return isset(array_keys($this->{self::$DOMAIN_PROPERTY})[$this->position]);
        }
    }
}