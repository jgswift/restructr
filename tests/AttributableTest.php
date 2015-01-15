<?php
namespace restructr\Tests {
    class AttributableTest extends restructrTestCase {
        function testAttributable() {
            $entity = new Mock\TestAttributableEntity();
            
            $entity['id'] = 1;
            $entity['text'] = 'test';
            
            $this->assertEquals([
                'id' => 1,
                'text' => 'test'
            ], $entity->toArray());
        }
        
        /**
         * @expectedException \LogicException
         */
        function testInvalidAttribute() {
            $entity = new Mock\TestAttributableEntity();
            
            $entity['none'] = 'none';
        }
        
        function testInvalidInitialize() {
            $entity = new Mock\TestAttributableEntity([
                'id' => 1,
                'text' => 'something',
                'none' => 'invalid'
            ]);
            
            $this->assertNotEmpty($entity['id']);
            $this->assertNotEmpty($entity['text']);
            $this->assertNull($entity['none']);
        }
    }
}