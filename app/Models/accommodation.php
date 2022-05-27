<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accommodation extends Model
{
    use HasFactory;
    protected $fillable = [
        'accommodation_name',
        'price',
        'currency',
        'category',
        'national_standard',
        'type',
        'accommodation_descriptions',
        'url',
        'seo',
        'location_id',
        'user_id'
    ];
}
