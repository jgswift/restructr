<?php
namespace restructr\Tests {
    class CollectionTest extends restructrTestCase {
        function testEnumerable() {
            $collection = new Mock\TestCollection();
            $collection[] = new Mock\TestEntity([
                'val' => 'foo'
            ]);
            
            $collection[] = new Mock\TestEntity([
                'val' => 'bar'
            ]);
            
            $c = 0;
            
            $val_matches = ['foo','bar'];
            foreach($collection as $entity) {
                $this->assertInstanceOf('restructr\Tests\Mock\TestEntity', $entity);
                $match = array_shift($val_matches);
                $this->assertEquals($match,$entity['val']);
                $c++;
            }
            
            $this->assertEquals(2,$c);
        }
        
        function testCount() {
            $collection = new Mock\TestCollection();
            $collection[] = new Mock\TestEntity([
                'val' => 'foo'
            ]);
            
            $collection[] = new Mock\TestEntity([
                'val' => 'foo'
            ]);
            
            $this->assertEquals(2, count($collection));
        }
        
        function testArrayConvert() {
            $entity = [
                'val' => 'foo'
            ];
            
            $data = [
                $entity
            ];
            
            $collection = new Mock\TestCollection();
            $collection[] = new Mock\TestEntity($entity);
            $this->assertEquals($data, $collection->toArray());
        }
        
        function testCollectionIterator() {
            $data = [
                'something' => [1,2],
                'hello' => [3,4],
            ];
            
            $collection = new Mock\TestCollectionIterator($data);
            
            $matches = [[1,2],[3,4]];
            $c = 0;
            foreach($collection as $item) {
                $match = array_shift($matches);
                
                $this->assertEquals($match, $item);
                $c++;
            }
            
            $this->assertEquals(2,$c);
        }
    }
}