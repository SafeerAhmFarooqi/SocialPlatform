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
        'title',
        'code',
        'image_path',
        'discount',
        'shop_id',
        'location',
        'shop_category',
        'sub_category',
        'email',
    ];

    public function shop()
    {
        return $this->hasOne(User::class, 'id');
    }
    
}
