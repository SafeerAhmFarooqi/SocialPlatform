<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShopSubCategories extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="shop_sub_categories";

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'category_id',
        'name',
        'status',
    ];
}
