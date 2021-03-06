<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    const USER_ROLE = 'USER_ROLE';
    const ADMIN_ROLE = 'ADMIN_ROLE';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','email','password','user_role','verified','first_name','last_name',
        'address_1','address_2','emirates_national_id','phone','city'
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

    public function notificationsCount(){
       return $this->notifications()->count();
    }

    public function isAdmin(){
        return $this->user_role == User::ADMIN_ROLE;
    }
}
