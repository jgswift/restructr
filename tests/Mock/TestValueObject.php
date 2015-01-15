<?php
namespace restructr\Tests\Mock {
    class TestValueObject extends \restructr\ValueObject {
        public function __construct($someval) {
            $this->data['someval'] = $someval;
        }
    }
}