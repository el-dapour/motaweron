<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected array $guarded = ['id'];

    public function serves()
    {
        return $this->hasMany('App\Serve');
    }
}
