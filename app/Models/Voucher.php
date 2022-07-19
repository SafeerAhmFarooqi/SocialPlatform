<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $table="vouchers";

    protected $fillable = [
        'title',
        'code',
        'image_path',
        'discount',
        'shop_id',
        'location',
        'shop_category',
        'sub_category',
        'voucher_status',
    ];

    public function shop()
    {
        return $this->belongsTo(User::class, 'shop_id');
    }

}
