<?php
namespace restructr\Tests\Mock {
    class TestCollectionIterator extends \restructr\CollectionIterator {
        function __construct(array $data = []) {
            $this->{self::$DOMAIN_PROPERTY} = $data;
        }
    }
}