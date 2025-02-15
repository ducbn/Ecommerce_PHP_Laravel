<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $fillable = ['id', 'del_flag', 'username', 'password', 'is_male', 'birthday', 'email', 'phone',
    'picture', 'access_level', 'modified_by', 'created_at', 'updated_at'];

    protected $hidden = [
        'password'
    ];
}