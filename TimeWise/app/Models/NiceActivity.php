<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NiceActivity extends Model
{
    use HasFactory;

    protected $table = 'nice_activities';

    protected $fillable = [
        'name',
        'baseQuant',
        'baseUnit'
    ];
}
