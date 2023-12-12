<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $table = 'posts'; 

    protected $fillable = [
        'title', 'image', 'clubId',
    ];
    public function club()
    {
        return $this->belongsTo(Club::class, 'clubId', 'clubId');
    }
}
