<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'userid',
        'message',
        'user'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


}
