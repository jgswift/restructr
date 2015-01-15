<?php
namespace restructr\Tests\Mock {
    class TestCollectionEntity extends \restructr\CollectionEntity {
        
        public static $COLLECTION_CLASS = 'restructr\Tests\Mock\TestCollection';
        
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