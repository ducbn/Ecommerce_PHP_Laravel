<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $table = 'configuration';

    protected $fillable = [
        'id', 'value', 'description', 'type',
        'created_at', 'updated_at'
    ];
}
