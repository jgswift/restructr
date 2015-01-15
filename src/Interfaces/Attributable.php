<?php
namespace restructr\Interfaces {
    interface Attributable extends \ArrayAccess {
        public function getAttributes();
    }
}