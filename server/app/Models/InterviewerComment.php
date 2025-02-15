<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InterviewerComment extends Model
{
    protected $table = 'interviewer_comment';

    protected $fillable = [
        'id', 'del_flag', 'interviewer_id', 'comment', 'rating',
        'created_at', 'updated_at'
    ];
}
