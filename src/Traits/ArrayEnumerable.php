<?php
namespace restructr\Traits {
    trait ArrayEnumerable {
        public function &toArray() {
            return $this->{self::$DOMAIN_PROPERTY};
        }
    }
}