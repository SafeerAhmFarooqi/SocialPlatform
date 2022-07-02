<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Carbon\Carbon;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    public function createFF()
    {
        return view('auth.register-ff');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //return "safeer";
        //return $request;

        $request->validate([
            //Validation Rules
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'day' => ['required', 'string', 'max:255'],
            'month' => ['required', 'string', 'max:255'],
            'year' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
        ],[
            //Validation Messages
            'required'=>':attribute Required',
        ],[
            //Validation Attributes
            'firstname' =>'First Name',
            'lastname' =>'Last Name',
            'email' =>'Email',
            'password' =>'Password',
            'day' =>'Day',
            'month' =>'Month',
            'year' =>'Year',
            'city' =>'City',
            'country' =>'Country',
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'dob' => Carbon::parse($request->year.'-'.$request->month.'-'.$request->day)->format('y-m-d'),
            'city' => $request->city,
            'country' => $request->country,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
