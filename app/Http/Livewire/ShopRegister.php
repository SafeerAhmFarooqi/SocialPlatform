<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\ShopCategories;
use App\Models\ShopSubCategories;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class ShopRegister extends Component
{
    public $selectedCategory;
    public $selectedSubCategory;
    public $shopName;
    public $email;
    public $password;
    public $address;
    public $city;
    public $phone;

    protected $validationAttributes = [
        'email' => 'Email',
        'selectedCategory' => 'Category',
            'selectedSubCategory' => 'Sub Category',
            'shopName' => 'Shop Name',
            'password' => 'Password',
            'address' => 'Address',
            'city' => 'City',
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
            'shopName' => 'required|min:6',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Password::min(8),Password::defaults()],
            'address' => 'required',
            'city' => 'required',
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
            'shop_category' => $this->selectedCategory,
            'shop_sub_category' => $this->selectedSubCategory,
            'city' => $this->city,
            'phone' => $this->phone,
        ]);

        event(new Registered($user));
    
        $user->assignRole('Shop');

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
            'shopSubCategories'=>ShopSubCategories::where('shop_category_id',$this->selectedCategory)->get(),
        ]);
    }
}
