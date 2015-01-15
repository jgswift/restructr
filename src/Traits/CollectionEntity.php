<?php
namespace restructr\Traits {
    use restructr\Interfaces\Enumerable;
    
    trait CollectionEntity {
        use Countable;
        
        /**
         * Local collection storage
         * @var restructr\Interfaces\Collection
         */
        protected $collection;
        
        /**
         * Initializes entity and collection by extracting collection data from
         * entity data
         * @param array $data
         * @throws Exception Errors out if collection_class fails to autoload
         */
        public function initialize(array $data = array()) {
            if(!class_exists(static::$COLLECTION_CLASS)) {
                throw new Exception('Collection entity class ("'.static::$COLLECTION_CLASS.'") was not found or does not exist")');
            }
            
            $collectionClass = static::$COLLECTION_CLASS;
            $collectionDomainProperty = $collectionClass::$DOMAIN_PROPERTY;
            
            $items = [];
            if(isset($data[$collectionDomainProperty])) {
                $items = $data[$collectionDomainProperty];
                unset($data[$collectionDomainProperty]);
            }
            
            $this->collection = new static::$COLLECTION_CLASS($items);
            
            parent::initialize($data);
        }
        
        /**
         * Retrieves entity data and reinserts collection data
         * @return array
         */
        public function &toArray() {
            $collectionClass = static::$COLLECTION_CLASS;
            $collectionDomainProperty = $collectionClass::$DOMAIN_PROPERTY;
            
            $data = parent::toArray();
            
            if($this->collection instanceof Enumerable) {
                $data[$collectionDomainProperty] = $this->collection->toArray();
            }
            
            return $data;
        }
    }
}