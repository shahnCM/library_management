<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $guarded = [];

    public function publication()
    {
        return $this->hasOne('App\Models\Publication', 'publication_id');
    }

    public function authors()
    {
        return $this->belongsToMany('App\Models\Author')->using('App\Models\AuthorBook');
    }

    public function genres()
    {
        return $this->belongsToMany('App\Models\Genre')->using('App\Models\BookGenre');
    }

    public function copies()
    {
        return $this->hasMany('App\Models\BookCopy', 'book_id');
    }

    


}
