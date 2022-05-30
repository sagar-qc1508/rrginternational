<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use App\Models\Country;
use App\Models\User;

class BackofficeStudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        \App::setLocale('en');
       # $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $students = Student::join('countries', 'students.country_id', '=', 'countries.country_id');
        if (!empty($_REQUEST['s'])) {
            $s = str_replace(" ", "%", trim($_REQUEST['s']));
            $students->where(function ($query) use ($s) {
                $query->where('first_name', 'LIKE', "%$s%")
                    ->orWhere('last_name', 'LIKE', "%$s%")
                    ->orWhere('ref_id', 'LIKE', $s)
                    ->orWhere('email', 'LIKE', "%$s%")
                    ->orWhere('phone_number', 'LIKE', "%$s%")
                    ->orWhere('country_name', 'LIKE', "%$s%");
            });
        }
        if (!empty($_REQUEST['sort']) && $_REQUEST['direction']) {
            $students->orderBy($_GET['sort'], $_GET['direction']);
        } else {
            $students->orderBy('student_id', 'DESC');
        }
        $students = $students->select('students.*', 'countries.country_name as country_name')->selectRaw('CONCAT(first_name," ",last_name) as student_name')->paginate(15);
        return view('backoffice.students.index', ['students' => $students]);
    }

    public function add()
    {
        $countries = Country::orderBy('country_name', 'ASC')->get();
        return view('backoffice.students.add', ['countries' => $countries]);
    }

    public function store(Request $request)
    {

        $validateArray = array(
            'first_name' => 'required|min:3|max:25',
            'last_name' => 'required|min:3|max:25',
            'email' => 'required|email|max:25|unique:users,email',
            'phone_number' => 'required',
            'parents_phone_number' => 'required|min:10|max:10',
            'address' => 'required|max:50',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'country_id' => 'required',
            'password' => 'required|min:6',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $user = new User();
            $user->fullname = $request->first_name . ' ' . $request->last_name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->type = 'student';
            if ($request->hasFile('profile')) {
                $image_name = $request->file('profile')->getClientOriginalName();
                $filename = pathinfo($image_name, PATHINFO_FILENAME);
                $image_ext = $request->file('profile')->getClientOriginalExtension();
                $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                $path =  $request->file('profile')->storeAs('public/studentprofile', $fileNameToStore);
                $user->profile = $fileNameToStore;
            }
            $user->status = '1';
            $user->created_at = date('Y-m-d H:i:s');
            $user->save();
            $user_id = $user->user_id;

            $username   = $request->first_name . $request->last_name;
            $count = Student::where('username', $username)->count();
            if ($count > 0) {
                $username = $username . $count;
            }

            $student = new Student();
            $student->user_id = $user_id;
            $student->first_name = $request->first_name;
            $student->last_name = $request->last_name;
            $student->email = $request->email;
            $student->phone_number = $request->phone_number;
            $student->parents_phone_number = $request->parents_phone_number;
            $student->address = $request->address;
            $student->city = $request->city;
            $student->state = $request->state;
            $student->zipcode = $request->zipcode;
            $student->country_id = $request->country_id;
            $student->username = $username;
            $student->password = $request->password;
            $student->profile = (!empty($user->profile)) ? $user->profile : '';
            $student->created_at = date('Y-m-d H:i:s');
            $student->updated_at = date('Y-m-d H:i:s');
            $student->save();

            Student::where('student_id', $student->student_id)
                ->update(['ref_id' => 'RRG' . sprintf('%05d', $student->student_id)]);

            return \Redirect::route('backoffice.students')->with('success', 'Student Created');
        }
    }

    public function edit($id = NULL)
    {
        $student = Student::where('student_id', $id)->first();
        $countries = Country::orderBy('country_name', 'ASC')->get();
        return view('backoffice.students.edit', ['countries' => $countries, 'student' => $student]);
    }

    public function update($id = NULL, Request $request)
    {
        $student = Student::where('student_id', $id)->first();
        $country = Country::where('country_id', '=', $id)->first();
        $validateArray = array(
            'first_name' => 'required|min:3|max:25',
            'last_name' => 'required|min:3|max:25',
            'email' => 'required|email|max:25|unique:users,email,NULL,user_id,user_id,!' . $student->user_id,
            'phone_number' => 'required',
            'parents_phone_number' => 'required|min:10|max:10',
            'address' => 'required|max:50',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'country_id' => 'required',
            'password' => 'required|min:6',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $user = User::where('id', $student->user_id)->first();
            $user->fullname = $request->first_name . ' ' . $request->last_name;
            $user->email = $request->email;
            $user->password = ($student->password != $request->password) ? Hash::make($request->password) : $user->password;
            if ($request->hasFile('profile')) {
                $image_name = $request->file('profile')->getClientOriginalName();
                $filename = pathinfo($image_name, PATHINFO_FILENAME);
                $image_ext = $request->file('profile')->getClientOriginalExtension();
                $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                $path =  $request->file('profile')->storeAs('public/studentprofile', $fileNameToStore);
                $user->profile = $fileNameToStore;
            }
            $user->save();
            $student->first_name = $request->first_name;
            $student->last_name = $request->last_name;
            $student->email = $request->email;
            $student->phone_number = $request->phone_number;
            $student->parents_phone_number = $request->parents_phone_number;
            $student->address = $request->address;
            $student->city = $request->city;
            $student->state = $request->state;
            $student->zipcode = $request->zipcode;
            $student->country_id = $request->country_id;
            $student->country_id = $request->country_id;
            $student->password = $request->password;
            $student->updated_at = date('Y-m-d H:i:s');
            $student->save();
            return \Redirect::route('backoffice.students')->with('success', 'Student updated!');
        }
    }
    public function delete($id = NULL)
    {
        $student = Student::where('student_id', $id)->first();
        $user_id = $student->user_id;
        $student = Student::where('student_id', $id)->delete();
        $user = User::where('id', $user_id)->delete();
        return back()->with('success', 'Student Deleted!');
    }
}
