<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AccountSetting extends Model
{
    use HasFactory;

    protected $table="account_settings";

    protected $fillable = [
        'user_id',
        'user_dob',
        'user_address',
        'user_phone',
        'user_about',
    ];

    protected static function booted()
    {
        static::creating(function ($setting) {
            $setting->user_id = Auth::user()->id;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    
}
