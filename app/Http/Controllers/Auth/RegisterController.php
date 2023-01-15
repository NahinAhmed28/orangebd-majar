<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
//            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = 'user' . time() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('assets/uploads/users')) {
                mkdir('assets/uploads/users', 0777, true);
            }
            $image->move('assets/uploads/users', $imageFileName);
            Image::make('assets/uploads/users/'.$imageFileName)->resize(400,400)->save('assets/uploads/user/'.$imageFileName);
        } else {
            $imageFileName = 'default_logo.png';
        }


        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'code' => $data['code'],
            'contact' => $data['contact'],
            'address_en' => $data['address_en'],
            'address_bn' => $data['address_bn'],
            'title_en' => $data['title_en'],
            'title_bn' => $data['title_bn'],
            'center_id' => $data['center_id'],
            'status' => $data['status'],
            'image' => $imageFileName,
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
