<?php
namespace restructr\Tests\Mock {
    class TestCollection extends \restructr\Collection implements \restructr\Interfaces\Enumerable {
        use \restructr\Traits\RecursiveSerializer;
        
        public function __construct(array $data = []) {
            $this->items = $data;
        }
        
        public function add(TestEntity $entity) {
            $this[] = $entity;
        }
        
        public function remove(TestEntity $entity) {
            $key = array_search($entity, $this->toArray());
            if(is_int($key)) {
                unset($this[$key]);
            } 
        }
    }
}