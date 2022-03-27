<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Gallery extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'gallery';
}
