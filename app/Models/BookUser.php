<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\Pivot;

class BookUser extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'book_user';
    protected $guarded = [];

    public function bookCopy()
    {
        return $this->belongsTo('App\Models\BookCopy', 'book_copy_id');
    }

    public function loanRequest()
    {
        return $this->belongsTo('App\Models\LoanRequest', 'loan_request_id');
    }

    public function returnRequest()
    {
        return $this->belongsTo('App\Models\ReturnRequest', 'return_request_id');
}
}
