<?php
namespace restructr\Tests {
    class EntityTest extends restructrTestCase {
        function testEntityCreate() {
            $entity = new Mock\TestEntity([
                'somekey' => 1,
                'another' => false
            ]);
            
            $this->assertEquals(1, $entity['somekey']);
            $this->assertFalse($entity['another']);
        }
        
        function testEntityMutate() {
            $entity = new Mock\TestEntity();
            $entity['somekey'] = 1;
            
            $this->assertEquals(1, $entity['somekey']);
        }
        
        function testEntityExists() {
            $entity = new Mock\TestEntity([
                'somekey' => 1
            ]);
            
            $this->assertTrue(isset($entity['somekey']));
            $this->assertFalse(isset($entity['invalid']));
        }
        
        function testEntityDelete() {
            $entity = new Mock\TestEntity([
                'somekey' => 1
            ]);
            
            unset($entity['somekey']);
            
            $this->assertFalse(isset($entity['somekey']));
        }
        
        function testEntityArrayConvert() {
            $data = [
                'somekey' => 1
            ];
            
            $entity = new Mock\TestEntity($data);
            $this->assertEquals($data, $entity->toArray());
        }
        
        function testEntityRecursion() {
            $data = [
                'something' => [1,2],
                'other' => new Mock\TestEntityRecursiveIterator([
                    'hello' => [3,4],
                    'foo' => new Mock\TestEntityRecursiveIterator(['bar'])
                ])
            ];
            
            $entity = new \RecursiveIteratorIterator(new Mock\TestEntityRecursiveIterator($data));
            
            $matches = [[1,2],[3,4],'bar'];
            $c = 0;
            foreach($entity as $item) {
                $match = array_shift($matches);
                
                $this->assertEquals($match, $item);
                $c++;
            }
            
            $this->assertEquals(3,$c);
        }
        
        function testEntityArrayRecursion() {
            $data = [
                'something' => [1,2],
                'other' => new Mock\TestEntityRecursiveArrayIterator([
                    'hello' => [3,4],
                    'foo' => new Mock\TestEntityRecursiveArrayIterator(['bar'])
                ])
            ];
            
            $entity = new \RecursiveIteratorIterator(new Mock\TestEntityRecursiveArrayIterator($data));
            
            $matches = [1,2,3,4,'bar'];
            $c = 0;
            foreach($entity as $item) {
                $match = array_shift($matches);
                
                $this->assertEquals($match, $item);
                $c++;
            }
            
            $this->assertEquals(5,$c);
        }
        
        function testEntityIterator() {
            $data = [
                'something' => [1,2],
                'hello' => [3,4],
            ];
            
            $entity = new Mock\TestEntityIterator($data);
            
            $matches = [[1,2],[3,4]];
            $c = 0;
            foreach($entity as $item) {
                $match = array_shift($matches);
                
                $this->assertEquals($match, $item);
                $c++;
            }
            
            $this->assertEquals(2,$c);
        }
    }
}