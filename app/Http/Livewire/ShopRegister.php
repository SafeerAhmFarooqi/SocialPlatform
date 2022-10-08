<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\ShopCategories;
use App\Models\ShopSubCategories;
use App\Models\Countries;
use App\Models\City;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class ShopRegister extends Component
{
    public $selectedCategory;
    public $selectedSubCategory;
    public $selectedCountry;
    public $selectedCity;
    public $shopName;
    public $email;
    public $password;
    public $address;
    public $phone;

    protected $validationAttributes = [
        'email' => 'Email',
        'selectedCategory' => 'Category',
            'selectedSubCategory' => 'Sub Category',
            'selectedCountry' => 'Country',
            'selectedCity' => 'City',
            'shopName' => 'Shop Name',
            'password' => 'Password',
            'address' => 'Address',
            'phone' => 'Phone Number',
    ];

    protected $messages = [
        'required' => ':attribute Required',        
        'email.email' => 'The Email Address format is not valid.',
    ];

    protected function rules()
    {
        return [
            'selectedCategory' => 'required',
            'selectedSubCategory' => 'required',
            'selectedCountry' => 'required',
            'selectedCity' => 'required',
            'shopName' => 'required|min:6',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Password::min(8),Password::defaults()],
            'address' => 'required',
            'phone' => 'required',
        ];
    }

    public function submit()
    {
        $this->validate();

        $user = User::create([
            'shopname' => $this->shopName,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'address' => $this->address,
            'shop_category_id' => $this->selectedCategory,
            'shop_sub_category_id' => $this->selectedSubCategory,
            'city_id' => $this->selectedCity,
            'country_id' => $this->selectedCountry,
            'phone' => $this->phone,
        ]);

        $user->assignRole('Shop');

        if(Auth::check())
        {
            Auth::logout();
        }

        event(new Registered($user)); 

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function updatedselectedCategory()
    {
        $this->selectedSubCategory='';
    }
    
    public function render()
    {
        return view('livewire.shop-register',[
            'shopCategories'=>ShopCategories::all(),
            'shopSubCategories'=>ShopSubCategories::where('category_id',$this->selectedCategory)->get(),
            'countries'=>Countries::where('status',true)->get(),
            'cities'=>City::where('country_id',$this->selectedCountry)->get(),
        ]);
    }
}
