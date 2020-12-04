<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BookUser extends Pivot
{
    use HasFactory;

    protected $table = 'book_user';
    protected $guarded = [];

    public function loanRequest()
    {
        return $this->hasOne('App\Models\LoanRequest', 'loan_request_id');
    }

    public function returnRequest()
    {
        return $this->hasOne('App\Models\returnRequest', 'return_request_id');
    }
}
