<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'title', 'details', 'status', 'uploadby', 'roleby', 'created_at', 'updated_at',
    ];
}
