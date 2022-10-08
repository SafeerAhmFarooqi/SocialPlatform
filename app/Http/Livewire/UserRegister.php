<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Validation\Rules\Password;
use Livewire\WithFileUploads;
use App\Models\Countries;
use App\Models\City;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use PDF;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserRegister extends Component
{
    use WithFileUploads;

    public $selectedFirstName='';
    public $selectedLastName='';
    public $selectedEmail='';
    public $selectedPassword='';
    public $selectedConfirmPassword='';
    public $selectedDateOfBirth='';
    public $selectedCountry='';
    public $selectedCity='';
    public $selectedAddress='';
    public $selectedDocument='';
    public $selectedCategory=[];

    protected $validationAttributes = [
         'selectedFirstName' => 'First Name',
         'selectedLastName' => 'Last Name',
         'selectedEmail' => 'Email',
         'selectedPassword' => 'Password',
         'selectedConfirmPassword' => 'Confirm Password',
         'selectedDateOfBirth' => 'Date of Birth',
         'selectedCountry' => 'Country',
         'selectedCity' => 'City',
         'selectedAddress' => 'Address',
         'selectedDocument' => 'Document',
         'selectedCategory' => 'Category',
    ];

    protected $messages = [
        'required' => ':attribute Required',        
        'email.email' => 'The Email Address format is not valid.',
    ];

    protected function rules()
    {
        return [
            'selectedFirstName' => ['required', 'string',  'max:100'],
            'selectedLastName' => ['required', 'string',  'max:100'],
            'selectedEmail' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'selectedPassword' => ['required', Password::min(8),Password::defaults()],
            'selectedConfirmPassword' => ['required', 'same:selectedPassword'],
            'selectedDateOfBirth' => ['required', 'date'],
            'selectedCountry' => ['required'],
            'selectedCity' => ['required'],
            'selectedAddress' => ['required', 'string',  'max:100'],
            'selectedDocument' => ['required','max:2048','image','mimes:jpeg,png,jpg,gif,svg,bmp'],
            'selectedCategory' => ['required'],
        ];
    }

    public function submit()
    {
        $this->validate();
        
        $user = User::create([
            'firstname' => $this->selectedFirstName,
            'lastname' => $this->selectedLastName,
            'email' => $this->selectedEmail,
            'password' => Hash::make($this->selectedPassword),
            'dob' => $this->selectedDateOfBirth,
            'country_id' => $this->selectedCountry,
            'city_id' => $this->selectedCity,
            'user_address' => $this->selectedAddress,
        ]);

        $user->assignRole('User');

        foreach ($this->selectedCategory as $key => $value) {
            $key==1? $this->selectedCategory[$key]='Armed Forces' : '';
            $key==2? $this->selectedCategory[$key]='Police' : '';
            $key==3? $this->selectedCategory[$key]='Fire' : '';
            $key==4? $this->selectedCategory[$key]='Paramedic' : '';
            $key==5? $this->selectedCategory[$key]='THW' : '';
        }

        $user->update([
            'options' => $this->selectedCategory,
        ]);

        $image=$this->selectedDocument;
        $image->store('temporary','public');
        $imagePath['path']='temporary/'. $image->hashName();
        $pdf = PDF::loadView('myPDF', $imagePath);
        $pdfPassword=Str::random(11);
        $pdf->setEncryption($pdfPassword);
        Storage::put('ProfileProof/'.$user->id.'/myProof.pdf', $pdf->output());
        Storage::disk('public')->delete($imagePath);

        $user->update([
            'pdf_file_path' => 'ProfileProof/'.$user->id.'/myProof.pdf',
            'pdf_password' => $pdfPassword,
        ]);

        event(new Registered($user)); 

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function render()
    {
        return view('livewire.user-register',[
            'countries'=>Countries::where('status',true)->get(),
            'cities'=>City::where('country_id',$this->selectedCountry)->where('status',true)->get(),
        ]);
    }
}
