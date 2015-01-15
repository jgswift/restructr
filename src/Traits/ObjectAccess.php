<?php
namespace restructr\Traits {
    trait ObjectAccess {
        use ArrayAccess {
            ArrayAccess::offsetSet as __set;
            ArrayAccess::offsetExists as __isset;
            ArrayAccess::offsetUnset as __unset;
            ArrayAccess::offsetGet as __get;
        }
    }
}

