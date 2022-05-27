<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quickLink extends Model
{
    use HasFactory;
       protected $fillable = [
        'quick_title',
        'quick_description',
         'url',
        'attachment',
        'user_id'
    ];
}
