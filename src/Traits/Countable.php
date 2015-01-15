<?php
namespace restructr\Traits {
    trait Countable {
        public function count() {
            return count($this->{self::$DOMAIN_PROPERTY});
        }
    }
}