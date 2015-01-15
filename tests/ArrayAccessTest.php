<?php
namespace restructr\Tests {
    class ArrayAccessTest extends restructrTestCase {
        function testArrayAccess() {
            $value = new Mock\TestValueArray('test');
            $this->assertEquals('test',$value['someval']);
            $this->assertEquals('test',(string)$value['someval']);
        }
        
        /**
         * @expectedException \LogicException
         */
        function testAccessInvalid() {
            $value = new Mock\TestValueArray('test');
            $value['someval'] = 'invalid';
        }
        
        /**
         * @expectedException \LogicException
         */
        function testInvalidUnset() {
            $value = new Mock\TestValueArray('someval');
            unset($value['someval']);
        }
    }
}