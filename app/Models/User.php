<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    const ROLE_LIBRARIAN = 'librarian';
    const ROLE_GENERAL_USER = 'general_user';

    const BANNED_FLAG_UP = 1;
    const BANNED_FLAG_DOWN = 0;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isLibrarian()
    {
        return $this->role === self::ROLE_LIBRARIAN;
    }

    public function Role()
    {
        if($this->role === self::ROLE_LIBRARIAN)
        {
            return self::ROLE_LIBRARIAN;
        }
        elseif($this->role === self::ROLE_GENERAL_USER)
        {
            return self::ROLE_GENERAL_USER;
        }
    }
    
    public function loanRequests()
    {
        return $this->hasMany('App\Models\LoanRequest', 'user_id');
    }

    public function returnRequests()
    {
        return $this->hasMany('App\Models\returnRequest', 'user_id');
    }

    public function responded_returnRequests()
    {
        return $this->isLibrarian() ? $this->hasMany('App\Models\ReturnRequest', 'status_changed_by') : null;
    }    

    public function responded_loanRequests()
    {
        return $this->isLibrarian() ? $this->hasMany('App\Models\LoanRequest', 'status_changed_by') : null;
    }   
    
    public function lendBooks() // Actually Lend copies of a Book
    {
        return $this->belongsToMany('App\Models\BookCopy')->using('App\Models\BookUser', 'book_copy_id');
    }
}
