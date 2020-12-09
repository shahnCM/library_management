<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'authors';
    protected $guarded = [];

    public function books()
    {
        return $this->belongsToMany('App\Models\Book')->using('App\Models\AuthorBook');
    }
}
