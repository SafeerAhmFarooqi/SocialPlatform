<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopCategories extends Model
{
    use HasFactory;

    protected $table="shop_categories";

    protected $fillable = [
        'name',
        'status',
    ];

    public function subCategory()
    {
        return $this->hasMany(ShopSubCategories::class, 'category_id');
    }

}
