<?php
namespace restructr\Traits {
    trait ObjectImmutable {
        use ObjectAccess {
            ObjectAccess::__set as private _set;
            ObjectAccess::__unset as private _unset;
        }
        
        final public function __set($offset, $value) {
            throw new \LogicException(sprintf('Writing %s to an immutable object is invalid',$offset));
        }
        
        final public function __unset($offset) {
            throw new \LogicException(sprintf('Writing %s to an immutable object is invalid',$offset));
        }
    }
}