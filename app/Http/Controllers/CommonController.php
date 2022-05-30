<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Auth;
use DB;
use Mail;


class CommonController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function disclaimer()
    {
        return view('frontend.disclaimer');
    } 
    
    
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function privacy_policy()
    {
        return view('frontend.privacy_policy');
    } 
  
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function terms_conditions()
    {
        return view('frontend.terms_conditions');
    } 
  
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function accreditation_affiliation()
    {
        return view('frontend.accreditation_affiliation');
    } 
    
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about_agents()
    {
        return view('frontend.about_agents');
    } 
    
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about_institutes()
    {
        return view('frontend.about_institutes');
    } 
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about_students()
    {
        return view('frontend.about_students');
    } 
    
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact_us()
    {
        return view('frontend.contact_us');
    } 
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function career()
    {
        return view('frontend.career');
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function find_courses()
    {
        return view('frontend.find_courses');
    } 
    
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function our_team()
    {
        return view('frontend.our_team');
    } 
    
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function study_uk()
    {
        return view('frontend.study_uk');
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function study_canada()
    {
        return view('frontend.study_canada');
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function study_us()
    {
        return view('frontend.study_us');
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function study_australia()
    {
        return view('frontend.study_australia');
    } 


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function courses()
    {
        return view('frontend.courses');
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function universities()
    {
        return view('frontend.universities');
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function news()
    {
        return view('frontend.news');
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function events()
    {
        return view('frontend.events');
    } 
   
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function courses_details($slug)
    {
        return view('frontend.courses_details');
    } 
   
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function universities_details($slug)
    {
        return view('frontend.universities_details');
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function student_verify($token = null)
    {

       # echo $token; exit;
        if($token == null) {

    		session()->flash('message', 'Invalid Login attempt');

    		return redirect()->route('login');

    	}

        
        $user = User::where('email_verification_token',$token)->first();

    //    DB::enableQueryLog();

// and then you can get query log

    // dd(DB::getQueryLog());
    // exit;

       if($user == null ){

       	session()->flash('error', 'Invalid Login attempt');

        return redirect()->route('login');

       }

       $user->update([
        
        'status' => 1,
        'email_verified_at' => Carbon::now(),
        'email_verification_token' => ''

       ]);
       
       	session()->flash('message', 'Your account is activated, you can log in now');

        return redirect()->route('login');
        
        # return view('frontend.student_verify');
    } 

     
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */

    public function contact_us_post(Request $request)
    {

        $userid = (Auth::check())?Auth->userid():0;

       #  $data = [$request->all('name'), $request->all('email'), $request->all('phone'), $request->all('subject'), $request->all('message'), $userid];
       
      # echo $request->get('name','default_value');
       
       $data =  [
         'name'   => $request->get('name','default_value'),
         'email'   => $request->get('email','default_value'),
         'mobilenumber'   => $request->get('phone','default_value'),
         'subject'   => $request->get('subject','default_value'),
         'message'   => $request->get('message','default_value'),
         'userid'   => $userid,
        ];
        

        $datamail =  array(
            'name'   => $request->get('name','default_value'),
            'email'   => $request->get('email','default_value'),
            'mobilenumber'   => $request->get('phone','default_value'),
            'subject'   => $request->get('subject','default_value'),
            'msg'   => $request->get('message','default_value'),
            'userid'   => $userid,
        );
       
        $contact = DB::table('contactus')->insert($data);
        
        if($contact){
            Mail::send('emails/contactus-user', $datamail, function($message)  use ($datamail) {
                $message->to($datamail['email'], 'RRG International')->subject
                   ('Thank you for inquiry!');
                $message->from('noreply@rrginternational.com','RRG International');
             });


             Mail::send('emails/contactus-admin', $datamail, function($message)  use ($datamail) {
                $message->to('sagar@qafieconsultancy.com', 'RRG International')->subject
                   ('New inquiry from Get in Touch!');
                $message->from('noreply@rrginternational.com','RRG International');
             });
             
      
             session()->flash('message', 'Thank you for your inquiry. We will get back to you soon...');
             
             return redirect()->route('contact-us');

        }else{

        }
    }


     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function test_route()
    {
        
        return view('emails.contactus-user');        

    }
}
