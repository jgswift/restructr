<?php
namespace restructr\Tests\Mock {
    class TestValueArray extends \restructr\ValueArray {
        public function __construct($someval) {
            $this->data['someval'] = $someval;
        }
        
        public function __toString() {
            return $this->data['someval'];
        }
    }
}