<?php

namespace Boolfalse\Larapage\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $fillable = [
        // PRIMARY
        'id', // id

        // ADDITIONAL
        'field', // string
    ];
}
