<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnRequest extends Model
{
    use HasFactory;

    protected $guarded = [];

    const STATUS_PENDING = 'pending';
    const STATUS_APPROVED = 'approved';
    const DEFAULT_STATUS = self::STATUS_PENDING;

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function approvedBy()
    {
        return (App\Models\User::isLibrarian()) ? $this->belongsTo('App\Models\User', 'status_changed_by') : null;
    }    

}
