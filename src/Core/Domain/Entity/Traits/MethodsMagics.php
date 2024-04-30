<?php

namespace Core\Domain\Entity\Traits;

use Exception;

trait MethodsMagics
{
    public function __get($name)
    {
        if(isset($this->{$name}))
            return $this->{$name};
        
        $className = get_class($this);
        throw new Exception("Property {$name} not found in {$className}");
    }
}