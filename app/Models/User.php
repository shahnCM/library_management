<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    const LIBRARIAN_ROLE = 'librarian';
    const GENERAL_USER_ROLE = 'general_user';
    const DEFAULT_ROLE = self::GENERAL_USER_ROLE;

    const BANNED_FLAG_UP = 1;
    const BANNED_FLAG_DOWN = 0;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
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
        return $this->role === self::LIBRARIAN_ROLE;
    }

    public function Role()
    {
        if($this->role === self::LIBRARIAN_ROLE)
        {
            return "Librarian";
        }
        elseif($this->role === self::GENERAL_USER_ROLE)
        {
            return "General User";
        }
    }
    
    public function isBanned()
    {
        return $this->is_banned === self::BANNED_FLAG_UP;
    }
    
    public function loanRequests()
    {
        return $this->hasMany('App\Models\LoanRequest', 'user_id');
    }

    public function returnRequests()
    {
        return $this->hasMany('App\Models\returnRequest', 'user_id');
    }

    public function approved_returnRequests()
    {
        return $this->isLibrarian() ? $this->hasMany('App\Models\ReturnRequest', 'status_changed_by') : null;
    }    

    public function approved_loanRequests()
    {
        return $this->isLibrarian() ? $this->hasMany('App\Models\LoanRequest', 'status_changed_by') : null;
    }    
}
