<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UseVoucher extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="use_vouchers";

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'user_id',
        'voucher_id',
        'shop_id',
    ];

    public function shop()
    {
        return $this->hasOne(User::class, 'id');
    }

    public function voucher()
    {
        return $this->belongsTo(Voucher::class, 'voucher_id');
    }
    
}