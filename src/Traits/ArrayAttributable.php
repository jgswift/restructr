<?php
namespace restructr\Traits {
    use restructr\Interfaces\Attributable;
    
    trait ArrayAttributable {
        use ArrayAccess {
            ArrayAccess::offsetSet as private arrayOffsetSet;
        }
        use Entity {
            Entity::initialize as private entityInitialize;
        }

        public function offsetSet($offset,$value) {
            if($this instanceof Attributable) {
                if(!in_array($offset, $this->getAttributes())) {
                    throw new \LogicException(sprintf('Key %s does not exist or is invalid', $offset));
                }
                
                $this->arrayOffsetSet($offset, $value);
            }
        }

        public function initialize(array $data = []) {
            $args = [];
            if($this instanceof Attributable) {
                foreach(array_values($this->getAttributes()) as $key) {
                    if(isset($data[$key])) {
                        $args[$key] = $data[$key];
                    } else {
                        $value = array_shift($data);
                        if(!empty($value)) {
                            $args[$key] = array_shift($data);
                        }
                    }
                }
            } else {
                $args = $data;
            }
            
            call_user_func_array([$this,'entityInitialize'], [$args]);
        }
    }
}