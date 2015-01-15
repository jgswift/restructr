<?php
namespace restructr\Traits {
    trait ArrayImmutable {
        use ArrayAccess {
            ArrayAccess::offsetSet as private _offsetSet;
            ArrayAccess::offsetUnset as private _offsetUnset;
        }
        
        final public function offsetSet($offset, $value) {
            throw new \LogicException(sprintf('Writing %s to an immutable array is invalid',$offset));
        }
        
        final public function offsetUnset($offset) {
            throw new \LogicException(sprintf('Writing %s to an immutable array is invalid',$offset));
        }
    }
}