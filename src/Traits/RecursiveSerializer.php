<?php
namespace restructr\Traits {
    use restructr\Interfaces\Enumerable;
    
    trait RecursiveSerializer {
        public function &toArray() {
            $data = [];
            
            foreach($this->{self::$DOMAIN_PROPERTY} as $key => $value) {
                $data[$key] = $value instanceof Enumerable
                            ? $value->toArray()
                            : $value;
            }
            
            return $data;
        }
    }
}