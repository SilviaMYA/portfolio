<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReadOnlyNav
{
    //
    protected $items_array = [];

    public function all(){
        return $this->items_array;
    }

    public function get( $id ){
        return $this->items_array[$id];
    }
}
