<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'active',
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

    protected $appends = array('role');

    public function setRoleAttribute()
    {
        return $this->is_admin;
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'is_admin' => 'string',
    //     'active' => 'boolean',
    //     'email_verified_at' => 'datetime',
    // ];

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }

    public function approvedVouchers()
    {
        return $this->hasMany(Employee::class);
    }
}
