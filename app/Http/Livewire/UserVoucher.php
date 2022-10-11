<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\UseVoucher;
use App\Models\Location;
use App\Models\ShopCategories;
use App\Models\ShopSubCategories;
use App\Models\Voucher;
use App\Models\City;
use App\Models\Countries;
use Illuminate\Support\Facades\Auth;

class UserVoucher extends Component
{
    public $selectedCity;
    public $selectedCountry;
    public $selectedCategory;
    public $selectedSubCategory;

    public function render()
    {
        $unusedVouchers=Voucher::
        when($this->selectedCountry, function($query) {
            return $query->whereRelation('shop', 'country_id', $this->selectedCountry);
        })
        ->when($this->selectedCity, function($query) {
            return $query->whereRelation('shop', 'city_id', $this->selectedCity);
        })
        ->when($this->selectedCategory, function($query) {
            return $query->whereRelation('shop', 'shop_category_id', $this->selectedCategory);
        })
        ->when($this->selectedSubCategory, function($query) {
            return $query->whereRelation('shop', 'shop_sub_category_id', $this->selectedSubCategory);
        })
        ->get();

        $usedVouchers=UseVoucher::where('user_id',Auth::user()->id)->get();

        return view('livewire.user-voucher',[
            'unusedVouchers'=>$unusedVouchers,
            'usedVouchers'=>$usedVouchers,
            'categories' => ShopCategories::all(),
            'subCategories' => ShopSubCategories::where('category_id',$this->selectedCategory)->get(),
            'cities' => City::where('country_id',$this->selectedCountry)->get(),
            'countries' => Countries::where('status',true)->get(), 
        ]);
    }
}
