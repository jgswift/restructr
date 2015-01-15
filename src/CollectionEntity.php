<?php
namespace restructr {
    abstract class CollectionEntity extends Entity implements Interfaces\Collection {
        use Traits\CollectionEntity;
        
        /**
         * Collection class name defined on a per class basis
         * @var string 
         */
        public static $COLLECTION_CLASS;
    }
}
