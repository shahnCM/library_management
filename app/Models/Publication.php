<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'publications';
    protected $guarded = [];

    public function book()
    {
        return $this->belongsTo('App\Models\Book', 'publication_id');
    }
}
