<?php
namespace restructr\Traits {
    trait ArrayAggregate {
        public function getIterator() {
            $iterator = isset(self::$ITERATOR_CLASS) ? self::$ITERATOR_CLASS : 'ArrayIterator';
            return new $iterator($this->{self::$DOMAIN_PROPERTY});
        }
    }
}