<?php

namespace XelentUmar\StaticPages\Models;

use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    protected $fillable = ['slug', 'title', 'content'];
}
