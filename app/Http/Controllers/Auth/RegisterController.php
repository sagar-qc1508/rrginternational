<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Mail;

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
   # protected $redirectTo = RouteServiceProvider::HOME;



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
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phonenumber' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            
        ]);
    }


    protected function registered(Request $request, $user)
    {
        $this->guard()->logout($user);
       # Auth::logout($user);
       session()->flash('message', 'Please check your email to activate your account');
       
       return redirect()->route('register');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  * @return \App\Models\User
    protected function create($data)
    {

        # dd($request->all());
        
       $user =  User::create([
            'name' => $data['fullname'],
            'email' => $data['email'],
            'contact_number' => $data['phonenumber'],
            'type' => 'student',
            'password' => Hash::make($data['password']),
            'status' => '0',
            'email_verification_token' => Str::random(32)
        ]);

    #  dd($user->remember_token);

       # \Mail::to($user->email)->send(new VerificationEmail($user));


       $data = array('name'=> $user->name, 'remember_token' => $user->email_verification_token, 'email'=>$user->email);
       Mail::send('emails/registration', $data, function($message)  use ($data) {
          $message->to($data['email'], 'RRG International')->subject
             ('Thank you for registration!');
          $message->from('noreply@rrginternational.com','RRG International');
       });
       

       # session()->flash('message', 'Please check your email to activate your account');
       
       return $user;
    }
}
