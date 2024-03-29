<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    protected $fillable = [
        'user_id', 'course_id', 'has_passed'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
