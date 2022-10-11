<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Voucher extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="vouchers";

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'shop_id',
        'title',
        'code',
        'image_path',
        'discount',
    ];

    protected static function booted()
    {
        static::creating(function ($voucher) {
            $voucher->shop_id = Auth::user()->id;
        });
    }

    public function shop()
    {
        return $this->belongsTo(User::class, 'shop_id');
    }

    public function isUsed()
    {
        
        if (UseVoucher::where('user_id',Auth::user()->id)->where('voucher_id',$this->id)->first()) {
            return true;
        } else {
            return false;
        }
        
    }

}
