<?php
namespace restructr\Tests {
    class CollectionEntityTest extends restructrTestCase {
        function testInitializeAccess() {
            $data = [
                'foo' => 'bar'
            ];
            
            $collection = new Mock\TestCollectionEntity($data);
            $this->assertEquals('bar', $collection['foo']);
        }
        
        function testArrayConversion() {
            $data = [
                'foo' => 'bar',
                'items' => [
                    'bar' => 'baz'
                ]
            ];
            
            $collection = new Mock\TestCollectionEntity($data);
            
            $this->assertEquals($data, $collection->toArray());
        }
    }
}