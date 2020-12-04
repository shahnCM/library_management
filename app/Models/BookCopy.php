<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;

class BookCopy extends Model
{
    use HasFactory;

    protected $table = 'book_copy';
    protected $guarded = [];

    public function book()
    {
        return $this->belongsTo('App\Models\Book', 'book_id');
    }

    public function addedBy()
    {
        return $this->belongsTo('App\Models\User', 'added_by');
    }

    public function loanedBy()
    {
        return $this->belongsToMany('App\Models\User')->using('App\Models\BookUser', 'user_id');
    }

}
