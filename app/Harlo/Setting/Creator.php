<?php namespace Harlo\Setting;

use Validator;
use Setting;

class Creator {
    protected $listener;

    public function __construct($listener)
    {
        $this->listener = $listener;
    }

    public function create($input)
    {
        //
    }
}
