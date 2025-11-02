<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LazyActivity extends Model
{
    use HasFactory;

    protected $table = 'lazy_activities';

    protected $fillable = [
        'name'
    ];
}
