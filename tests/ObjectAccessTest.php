<?php
namespace restructr\Tests {
    class ObjectAccessTest extends restructrTestCase {
        function testArrayAccess() {
            $value = new Mock\TestValueObject('test');
            $this->assertEquals('test',$value->someval);
        }
        
        /**
         * @expectedException \LogicException
         */
        function testAccessInvalid() {
            $value = new Mock\TestValueObject('test');
            $value->someval = 'invalid';
        }
        
        /**
         * @expectedException \LogicException
         */
        function testInvalidUnset() {
            $value = new Mock\TestValueObject('someval');
            unset($value->someval);
        }
    }
}