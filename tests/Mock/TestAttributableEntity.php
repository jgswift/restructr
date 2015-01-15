<?php
namespace restructr\Tests\Mock {
    class TestAttributableEntity extends TestEntity implements \restructr\Interfaces\Attributable {
        use \restructr\Traits\ArrayAttributable;
        
        public function getAttributes() {
            return ['id','text'];
        }
    }
}