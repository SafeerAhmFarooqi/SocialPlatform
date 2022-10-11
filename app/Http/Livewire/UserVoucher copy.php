<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\UseVoucher;
use App\Models\Location;
use App\Models\ShopCategories;
use App\Models\ShopSubCategories;
use App\Models\Voucher;

class UserVoucher extends Component
{
    public $selectCity;
    public $selectCategory;
    public $selectSubCategory;

    public function render()
    {
        $category=ShopCategories::all();
        $location=Location::all();
        $sub_category=ShopSubCategories::where('shop_category_id',$this->selectCategory)->get();

        $vouchers=Voucher::with('shop')
        ->when($this->selectCity, function($query) {
            return $query->where('location', $this->selectCity);
        })
        ->when($this->selectCategory, function($query) {
            return $query->where('shop_category', $this->selectCategory);
        })
        ->when($this->selectSubCategory, function($query) {
            return $query->where('sub_category', $this->selectSubCategory);
        })
        ->get();

        return view('livewire.user-voucher',[
            'vouchers'=>$vouchers,
            'category'=>$category,
            'location'=>$location,
            'sub_category'=>$sub_category,
        ]);
    }
}
