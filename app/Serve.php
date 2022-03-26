<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serve extends Model
{
    protected array $guarded = ['id'];

    public function cats()
    {
        return $this->belongsTo(Cat::class, 'cat_id');
    }
}
