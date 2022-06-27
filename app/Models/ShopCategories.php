<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopCategories extends Model
{
    use HasFactory;

    protected $table="shop_categories";

    protected $fillable = [
        'category',
    ];

    public function subCategory()
    {
        return $this->hasMany(ShopSubCategories::class, 'shop_category_id');
    }

}
