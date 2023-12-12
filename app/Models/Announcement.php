<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $table = 'announcement'; 

    protected $fillable = [
        'title', 'clubId', 'description',
    ];

    public function club()
    {
        return $this->belongsTo(Club::class, 'clubId', 'clubId');
    }
};
