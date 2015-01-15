<?php
namespace restructr\Traits {
    use restructr\Interfaces\Attributable;
    
    trait ObjectAttributable {
        use ObjectAccess {
            ObjectAccess::__set as private objectSet;
        }
        use Entity {
            Entity::initialize as private entityInitialize;
        }
        
        abstract public function getAttributes();
        
        public function __set($offset,$value) {
            if($this instanceof Attributable) {
                if(!in_array($offset, $this->getAttributes())) {
                    throw new \LogicException(sprintf('Property %s does not exist or is invalid', $offset));
                }
                
                $this->objectSet($offset, $value);
            }
        }
        
        public function initialize() {
            $data = func_get_args();
            if($this instanceof Attributable) {
                $data = array_combine(array_values($this->getAttributes()), $data);
            }
            
            call_user_func_array([$this,'entityInitialize'], $data);
        }
    }
}