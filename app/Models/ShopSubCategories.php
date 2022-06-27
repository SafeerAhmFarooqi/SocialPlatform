<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopSubCategories extends Model
{
    use HasFactory;

    protected $table="shop_sub_categories";

    protected $fillable = [
        'shop_category_id',
        'sub_category',
    ];
}
