<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShopCategories extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="shop_categories";

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'status',
    ];

    public function subCategory()
    {
        return $this->hasMany(ShopSubCategories::class, 'category_id');
    }

}
