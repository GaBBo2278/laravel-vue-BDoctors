<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = 
    [
        'author',
        'email',
        'message',
        'doctor_id'
    ];

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }
}
