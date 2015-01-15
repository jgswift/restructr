<?php
namespace restructr\Traits {
    trait ArrayEnumerableAggregate {
        use ArrayEnumerable;
        
        public function getIterator() {
            $iterator = isset(self::$ITERATOR_CLASS) ? self::$ITERATOR_CLASS : 'ArrayIterator';
            return new $iterator($this->toArray());
        }
    }
}