<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Traits\AdminMustApprove;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, AdminMustApprove;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'shopname',
        'shop_sub_category',
        'shop_category',
        'password',
        'pdf_password',
        'dob',
        'city',
        'country_id',
        'user_address',
        'shop_address',
        'phone',
        'about',
        'longitude',
        'latitude',
        'profile_pic_path',
        'pdf_file_path',
        'options',
        'user_status',
        'shop_status',
        'location',
        'about_me',
        'email_verified_at',
    ];

    protected $dates = ['dob'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setOptionsAttribute($value)
    {
        $this->attributes['options'] = json_encode($value);
    }

    public function getOptionsAttribute($value)
    {
        return $this->attributes['options'] = json_decode(json_encode($value));
    }
}
