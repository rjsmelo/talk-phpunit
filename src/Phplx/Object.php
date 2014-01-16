<?php

namespace Phplx;

class Object
{
    public $someKey = "some value";
    public $otherKey = "other thing";

    public function myPreciousJson(){
        return json_encode($this);
    }
}
