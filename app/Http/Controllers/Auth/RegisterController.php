<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Type;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $types = Type::all();
        return view('auth.register', compact('types'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'restaurant_name' => ['required', 'string', 'min:3', 'max:50'],
            'vat' => ['required', 'unique:users', 'string', 'min:11', 'max:11'],
            'address' => ['required', 'string', 'unique:users'],
            'zip' => ['required', 'string', 'min:5', 'max:5'],
            'phone' => ['required', 'string', 'between:9,20', 'unique:users'],
            'image' => ['nullable', 'url'],
            'types' => ['required']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'restaurant_name' => $data['restaurant_name'],
        //     'vat' => $data['vat'],
        //     'address' => $data['address'],
        //     'zip' => $data['zip'],
        //     'phone' => $data['phone'],
        //     'image' => $data['image'],
        //     'password' => Hash::make($data['password']),
        // ]);

        $new_user = new User();
        $new_user->fill($data);
        $new_user->password = Hash::make($data['password']);
        $new_user->save();
        $new_user->types()->attach($data['types']);

        return $new_user;
    }
}
