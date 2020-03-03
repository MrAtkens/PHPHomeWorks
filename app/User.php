<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'password', 'superadmin'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'superadmin' => 'boolean'
    ];

    public $rules = [
        'username' => 'required|unique:users',
        'password' => 'required|confirmed'
    ];

    public function setPasswordAttribute($password){
        $this->attributes['password'] = Hash::make($password);
    }
}
