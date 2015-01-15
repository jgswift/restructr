<?php
namespace restructr\Tests\Mock {
    class TestEntityRecursiveIterator extends \restructr\Entity implements \restructr\Interfaces\RecursiveIterator {
        use \restructr\Traits\RecursiveIterator;
    }
}