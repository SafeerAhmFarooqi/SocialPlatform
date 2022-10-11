<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voucher extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="vouchers";

    protected $dates = ['deleted_at'];

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
