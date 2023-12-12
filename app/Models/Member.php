<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members'; 

    protected $fillable = [
        'clubId', 'userId', 'status',
    ];

    public function club()
    {
        return $this->belongsTo(Club::class, 'clubId', 'clubId');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'userId');
    }
}
