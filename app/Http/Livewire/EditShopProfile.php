<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Countries;
use App\Models\City;
use App\Models\ShopCategories;
use App\Models\ShopSubCategories;

class EditShopProfile extends Component
{
    public $selectedCountry='';
    public $selectedLogo='';
    public $selectedLogoRemove='';
    public $selectedFirstName='';
    public $selectedLastName='';
    public $selectedCity='';
    public $selectedCategory='';
    public $selectedSubCategory='';
    public $selectedAddress='';
    public $selectedPhone1='';
    public $selectedPhone2='';
    public $selectedBanner='';
    public $selectedBannerRemove='';

    public function render()
    {
        return view('livewire.edit-shop-profile',[
            'countries' => Countries::where('status',true)->get(),
            'cities' => City::where('status',true)->where('country_id',$this->selectedCountry)->get(),
            'categories' => ShopCategories::all(),
            'subCategories' => ShopSubCategories::where('category_id',$this->selectedCategory)->get(),
        ]);
    }
}
