<?php

namespace App\Http\Controllers;

use Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.agentlogin');
    }
     
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function agentRegister()
    {
        return view('auth.agentregister');
    }
   
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function agentForgotPassword()
    {
        return view('auth.agentpasswords.email');
    }

    

    public function agentLogin(Request $request)
    {   
        $input = $request->all();
     
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
     
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {

            return redirect()->route('agent.dashboard');
            //'superadmin', 'admin', 'staff', 'agent', 'student', 'university'
            // if (auth()->user()->type == 'superadmin') {
            //     return redirect()->route('home');
            // }else if (auth()->user()->type == 'admin') {
            //     return redirect()->route('home');
            // }else if (auth()->user()->type == 'staff') {
            //     return redirect()->route('home');
            // }else if (auth()->user()->type == 'agent') {
            //     return redirect()->route('home');
            // }else if (auth()->user()->type == 'university') {
            //     return redirect()->route('home');
            // }else{
            //     return redirect()->route('home');
            // }
        }else{
            session()->flash('error', 'Email and password mismatch!');
            return redirect()->route('agent.login');
                # ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function agentDashboard()
    {

        if(Auth::check()){
            return redirect()->route('agent.dashboard');
        }else{
            return redirect()->route('/login');
        }
      //  return view('backoffice.dashboard.dashboard');
    } 
}
