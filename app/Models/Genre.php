<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'genres';
    protected $guarded = [];

    public function books()
    {
        return $this->belongsToMany('App\Models\Book')->using('App\Models\BookGenre');
    }
}
