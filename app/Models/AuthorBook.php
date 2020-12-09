<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AuthorBook extends Pivot
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'author_book';
    protected $guarded = [];
}
