<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class KategoriArtikel extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    protected $table = 'category_artikel';

    public function artikel() {
        return $this->hasMany(Artikel::class);
    }

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->isoFormat('DD, MMMM Y');
    }
}
