<?php

namespace App\Http\Controllers;

use Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backoffice.login');
    }


    public function adminLogin(Request $request)
    {   
        $input = $request->all();
     
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
     
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            //'superadmin', 'admin', 'staff', 'agent', 'student', 'university'
            return redirect()->route('backoffice.dashboard');
        }else{
            return redirect()->route('backoffice.login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }


    public function adminDashboard(){
        $this->middleware('auth');
        return view('backoffice.dashboard.admindashboard');
    }

}
