<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events'; 

    protected $fillable = [
        'title', 'clubId', 'startDate', 'endDate', 'status',
    ];
    public function club()
    {
        return $this->belongsTo(Club::class, 'clubId', 'clubId');
    }
}
