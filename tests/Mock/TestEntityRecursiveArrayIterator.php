<?php
namespace restructr\Tests\Mock {
    class TestEntityRecursiveArrayIterator extends \restructr\Entity implements \restructr\Interfaces\RecursiveIterator {
        use \restructr\Traits\RecursiveArrayIterator;
    }
}