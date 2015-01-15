<?php
namespace restructr\Traits {
    trait Entity {
        public function initialize(array $data = []) {
            return $this->{self::$DOMAIN_PROPERTY} = $data;
        }
    }
}