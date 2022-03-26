<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected array $guarded = ['id'];

    protected array $fillable = [
        'name', 'email', 'phone','message',
    ];
}
