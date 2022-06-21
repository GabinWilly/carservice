<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Notifications\Test3;
use App\Notifications\Test;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'ville'=> ['required', 'string', 'max:18'],
            'Contact'=>['required', 'string', 'max:9'],
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
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'ville' =>$data['ville'],
            'Contact' =>$data['Contact'],
        ]);

        if (request()->hasFile('avatar')) {
            $destination_patch = 'public/images/';
            $avatar = request()->file('avatar')->getClientOriginalName();
            request()->file('avatar')->storeAs($destination_patch, $avatar);
            $user->update(['avatar' => $avatar]);
        }

        $role = Role::select('id')->where('name', 'Utilisateur')->first();
        $user->roles()->attach($role);

        $userAll = User::all();
        
        $post=['title' => ' demons '];
        
        foreach($userAll as $userAlls){
            $userAlls->notify(new Test3($user,$post));
        }
        
        return $user;
    }
}
