<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Countries;
use App\Models\City;
use App\Models\ShopCategories;
use App\Models\ShopSubCategories;
use Illuminate\Support\Facades\Auth;

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

    public function mount()
    {
        $this->selectedCountry=Auth::user()->country_id;
        $this->selectedLogo=(Auth::user()->logo?Auth::user()->logo->path : '');
        $this->selectedFirstName=Auth::user()->firstname;
        $this->selectedLastName=Auth::user()->lastname;
        $this->selectedCity=Auth::user()->city_id;
        $this->selectedCategory=Auth::user()->shop_category_id;
        $this->selectedSubCategory=Auth::user()->shop_sub_category_id;
        $this->selectedAddress=Auth::user()->shop_address;
        $this->selectedPhone1=Auth::user()->phone;
        $this->selectedPhone2=Auth::user()->phone2;
        $this->selectedBanner=(Auth::user()->banner?Auth::user()->banner->path : '');
    }

    public function render()
    {
        $this->selectedCountry=$this->selectedCountry!=''&&$this->selectedCountry!=Auth::user()->country->country?$this->selectedCountry :Auth::user()->country->country;
        $this->selectedFirstName=$this->selectedFirstName!=''&&$this->selectedFirstName!=Auth::user()->firstname?$this->selectedFirstName : Auth::user()->firstname;
        $this->selectedLastName=$this->selectedLastName!=''&&$this->selectedLastName!=Auth::user()->lastname?$this->selectedLastName : Auth::user()->lastname;
        $this->selectedCity=$this->selectedCity!=''&&$this->selectedCity!=Auth::user()->city->id?$this->selectedCity : Auth::user()->city->id;
        $this->selectedCategory=$this->selectedCategory!=''&&$this->selectedCategory!=Auth::user()->category->id?$this->selectedCategory : Auth::user()->category->id;
        $this->selectedSubCategory=$this->selectedSubCategory!=''&&$this->selectedSubCategory!=Auth::user()->subCategory->id?$this->selectedSubCategory : Auth::user()->subCategory->id;
        $this->selectedAddress=$this->selectedAddress!=''&&$this->selectedAddress!=Auth::user()->address?$this->selectedAddress : Auth::user()->address;
        $this->selectedPhone1=$this->selectedPhone1!=''&&$this->selectedPhone1!=Auth::user()->phone?$this->selectedPhone1 : Auth::user()->phone;
        $this->selectedPhone2=$this->selectedPhone2!=''&&$this->selectedPhone2!=Auth::user()->phone2?$this->selectedPhone2 : Auth::user()->phone2;
        return view('livewire.edit-shop-profile',[
            'countries' => Countries::where('status',true)->get(),
            'cities' => City::where('status',true)->where('country_id',$this->selectedCountry)->get(),
            'categories' => ShopCategories::all(),
            'subCategories' => ShopSubCategories::where('category_id',$this->selectedCategory)->get(),
        ]);
    }
}
