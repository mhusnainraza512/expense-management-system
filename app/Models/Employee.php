<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'number',
        'email',
        'password',
        'license_no',
        'expiry_date',
        'photo',
        'aadhar_photo',
        'front_license',
        'back_license',
        'wallet_balance'
    ];

    protected $casts = [
        'wallet_balance' => 'double',
    ];

    public function vouchers()
    {
        return $this->hasMany(Voucher::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function vehicle()
    {
        return $this->hasOne(Vehicle::class, 'user_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
