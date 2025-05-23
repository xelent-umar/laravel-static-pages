<?php

namespace XelentUmar\StaticPages\Models\OPD;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glass extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'slug',
        'logo',
        'status',
    ];

}
