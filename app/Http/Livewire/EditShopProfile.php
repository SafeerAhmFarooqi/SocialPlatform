<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Countries;
use App\Models\City;
use App\Models\User;
use App\Models\ShopCategories;
use App\Models\ShopSubCategories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditShopProfile extends Component
{
    use WithFileUploads;

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
    public $countryChangedState=false;
    public $categoryChangedState=false;

    public function mount()
    {
        $this->selectedCountry=Auth::user()->country_id;
        $this->selectedFirstName=Auth::user()->firstname;
        $this->selectedLastName=Auth::user()->lastname;
        $this->selectedCity=Auth::user()->city_id;
        $this->selectedCategory=Auth::user()->shop_category_id;
        $this->selectedSubCategory=Auth::user()->shop_sub_category_id;
        $this->selectedAddress=Auth::user()->shop_address;
        $this->selectedPhone1=Auth::user()->phone;
        $this->selectedPhone2=Auth::user()->phone2;
    }

    protected $validationAttributes = [
         'selectedCountry' => 'Country',
         'selectedFirstName' => 'Frist Name',
         'selectedLastName' => 'Last Name',
         'selectedCity' => 'City',
         'selectedCategory' => 'Category',
         'selectedSubCategory' => 'Sub Category',
         'selectedAddress' => 'Address',
         'selectedPhone1' => 'Phone',
         'selectedLogo' => 'Logo',
         'selectedBanner' => 'Banner',
    ];

    protected $messages = [
        'required' => ':attribute is Required',        
    ];

    protected function rules()
    {
        return [
            'selectedCountry' => ['required'],
            'selectedFirstName' => ['required','string'],
            'selectedLastName' => ['required','string'],
            'selectedCity' => ['required'],
            'selectedCategory' => ['required'],
            'selectedSubCategory' => ['required'],
            'selectedAddress' => ['required','string'],
            'selectedPhone1' => ['required','string'],
        ];
    }

    protected function rulesLogo()
    {
        return [
            'selectedLogo' => 'image|mimes:jpeg,png,jpg,gif,svg,bmp|max:2048',
        ];
    }

    protected function rulesBanner()
    {
        return [
            'selectedBanner' => 'image|mimes:jpeg,png,jpg,gif,svg,bmp|max:2048',
        ];
    }
    public function submit()
    {
        $this->validate($this->rules());

        $user=User::find(Auth::user()->id);

        $user->update([
            'country_id' => $this->selectedCountry,
            'firstname' =>  $this->selectedFirstName,
            'lastname' => $this->selectedLastName,
            'city_id' => $this->selectedCity,
            'shop_category_id' => $this->selectedCategory,
            'shop_sub_category_id' => $this->selectedSubCategory,
            'shop_address' => $this->selectedAddress,
            'phone' => $this->selectedPhone1,
            'phone2' => $this->selectedPhone2,
        ]);

        //Session::flash('success', __('Profile Updated Successfully'));   
        
        session()->flash('success', 'Profile Updated Successfully');
 
        return redirect()->to(route('shop.profile.show',[2]));
    }

    public function updateLogo()
    {
        $this->validate($this->rulesLogo());

        $user=User::find(Auth::user()->id);

        if ($this->selectedLogo) {
            if(Auth::user()->logo)
            {
                $oldLogo=Auth::user()->logo;
                Storage::disk('public')->delete($oldLogo);
            }

            $this->selectedLogo->store('shop-logos/'.Auth::user()->id.'/logo','public');
            $filePath = 'shop-logos/'.Auth::user()->id.'/logo'.'/'. $this->selectedLogo->hashName();
            $user->logo = $filePath;
            $user->save();
        }
        
        if ($this->selectedLogoRemove) {
            if(Auth::user()->logo)
            {
                $oldLogo=Auth::user()->logo;
                Storage::disk('public')->delete($oldLogo);
                $user->logo = '';
                $user->save();
            }   
        }

        session()->flash('success', 'Logo Updated Successfully');
 
        return redirect()->to(route('shop.profile.show',[2]));
        
    }

    public function updateBanner()
    {
        $this->validate($this->rulesBanner());

        $user=User::find(Auth::user()->id);

        if ($this->selectedBanner) {
            if(Auth::user()->banner)
            {
                $oldBanner=Auth::user()->banner;
                Storage::disk('public')->delete($oldBanner);
            }

            $this->selectedBanner->store('shop-banners/'.Auth::user()->id.'/banner','public');
            $filePath = 'shop-banners/'.Auth::user()->id.'/banner'.'/'. $this->selectedBanner->hashName();
            $user->banner = $filePath;
            $user->save();
        }
        
        if ($this->selectedBannerRemove) {
            if(Auth::user()->banner)
            {
                $oldBanner=Auth::user()->banner;
                Storage::disk('public')->delete($oldBanner);
                $user->banner = '';
                $user->save();
            }   
        }

        session()->flash('success', 'Banner Updated Successfully');
 
        return redirect()->to(route('shop.profile.show',[2]));
        
    }

    public function countryChanged()
    {
        $this->selectedCountry!=Auth::user()->country_id?$this->selectedCity='' : '';
        $this->countryChangedState=true;
    }

    public function categoryChanged()
    {
        $this->selectedCategory!=Auth::user()->shop_category_id?$this->selectedSubCategory='' : '';
        $this->categoryChangedState=true;
    }

    public function render()
    {  
        $this->selectedFirstName=$this->selectedFirstName!=''&&$this->selectedFirstName!=Auth::user()->firstname?$this->selectedFirstName : Auth::user()->firstname;
        $this->selectedLastName=$this->selectedLastName!=''&&$this->selectedLastName!=Auth::user()->lastname?$this->selectedLastName : Auth::user()->lastname;
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
