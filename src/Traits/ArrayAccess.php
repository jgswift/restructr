<?php
namespace restructr\Traits {
    trait ArrayAccess {
        public function offsetSet($offset, $value) {
            if($offset === null) {
                $offset = count($this->{self::$DOMAIN_PROPERTY});
            }
            
            $this->{self::$DOMAIN_PROPERTY}[$offset] = $value;
        }
        
        public function offsetExists($offset) {
            return isset($this->{self::$DOMAIN_PROPERTY}[$offset]);
        }
        
        public function offsetUnset($offset) {
            unset($this->{self::$DOMAIN_PROPERTY}[$offset]);
        }
        
        public function &offsetGet($offset) {
            if(isset($this->{self::$DOMAIN_PROPERTY}[$offset])) {
                return $this->{self::$DOMAIN_PROPERTY}[$offset];
            }
            
            $null = null;
            return $null;
        }
    }
}