<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable=[
        'level',
        'start',
        'end',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
