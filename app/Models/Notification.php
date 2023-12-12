<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notification'; 

    protected $fillable = [
        'title', 'clubId', 'userId', 'created_at'
    ];
    
    public function club()
    {
        return $this->belongsTo(Club::class, 'clubId', 'clubId');
    }
    
}
