<?php
namespace restructr\Interfaces {
    interface RecursiveIterator extends \RecursiveIterator {
        public function isIterable();
    }
}