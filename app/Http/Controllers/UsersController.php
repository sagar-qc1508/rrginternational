<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Country;
use App\Models\Staff;
use App\Models\Contract;
use App\Models\Emergencycontact;

class UsersController extends Controller
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
        $users = Staff::selectRaw('CONCAT(first_name," ",last_name) as user_name');
        if (!empty($_REQUEST['s'])) {
            $s = str_replace(" ", "%", trim($_REQUEST['s']));
            $users->where(function ($query) use ($s) {
                $query->where('first_name', 'LIKE', "%$s%")
                    ->orWhere('last_name', 'LIKE', "%$s%")
                    ->orWhere('office', 'LIKE', "%$s%")
                    ->orWhere('branch', 'LIKE', "%$s%")
                    ->orWhere('designation', 'LIKE', "%$s%")
                    ->orWhere('email', 'LIKE', "%$s%")
                    ->orWhere('phone_number', 'LIKE', "%$s%")
                    ->orWhere('city', 'LIKE', "%$s%")
                    ->orWhere('state', 'LIKE', "%$s%")
                    ->orWhere('country', 'LIKE', "%$s%")
                    ->orWhere('username', 'LIKE', "%$s%");
            });
        }
        if (!empty($_REQUEST['sort']) && $_REQUEST['direction']) {
            $users->orderBy($_GET['sort'], $_GET['direction']);
        } else {
            $users->orderBy('id', 'DESC');
        }
        $users = $users->select('staff.*')->paginate(15);
        return view('backoffice.users.index', ['users' => $users]);
    }

    public function add()
    {
        $countries = Country::orderBy('country_name', 'ASC')->get();
        return view('backoffice.users.add', ['countries' => $countries]);
    }

    public function store(Request $request)
    {

        $validateArray = array(
            'first_name' => 'required|min:3|max:25',
            'last_name' => 'required|min:3|max:25',
            'email' => 'required|email|max:25|unique:users,email',
            'phone_number' => 'required|min:10|max:10',
            'address' => 'required|max:50',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required|numeric|min:5',
            'country' => 'required',
            'office' => 'required',
            'branch' => 'required',
            'designation' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'password' => 'required|min:6',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $user = new User();
            $user->name = $request->first_name . ' ' . $request->last_name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->type = 'staff';
            if ($request->hasFile('profile')) {
                $image_name = $request->file('profile')->getClientOriginalName();
                $filename = pathinfo($image_name, PATHINFO_FILENAME);
                $image_ext = $request->file('profile')->getClientOriginalExtension();
                $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                $path =  $request->file('profile')->storeAs('public/adminprofile', $fileNameToStore);
                $user->profile = $fileNameToStore;
            }
            $user->status = '1';
            $user->created_at = date('Y-m-d H:i:s');
            $user->save();
            $user_id = $user->id;

            $username   = $request->first_name . $request->last_name;
            $count = Staff::where('username', $username)->count();
            if ($count > 0) {
                $username = $username . $count;
            }

            $staff = new Staff();
            $staff->user_id = $user_id;
            $staff->first_name = $request->first_name;
            $staff->last_name = $request->last_name;
            $staff->email = $request->email;
            $staff->phone_number = $request->phone_number;
            $staff->address = $request->address;
            $staff->city = $request->city;
            $staff->state = $request->state;
            $staff->zipcode = $request->zipcode;
            $staff->country = $request->country;
            $staff->branch = $request->branch;
            $staff->office = $request->office;
            $staff->designation = $request->designation;
            $staff->start_date = date('Y-m-d', strtotime($request->start_date));
            $staff->end_date = date('Y-m-d', strtotime($request->end_date));
            $staff->username = $username;
            $staff->password = $request->password;
            $staff->profile = (!empty($user->profile)) ? $user->profile : '';
            $staff->created_at = date('Y-m-d H:i:s');
            $staff->updated_at = date('Y-m-d H:i:s');
            $staff->permissions = (!empty($request->permissions)) ? implode(',', $request->permissions) : '';
            $staff->save();

            return \Redirect::route('backoffice.users')->with('success', 'User Created');
        }
    }

    public function edit($id = NULL)
    {
        $user = User::where('id', $id)->first();
        $staff = Staff::where('user_id', $id)->first();
        $countries = Country::orderBy('country_name', 'ASC')->get();
        return view('backoffice.users.edit', ['countries' => $countries, 'user' => $user, 'staff' => $staff]);
    }

    public function update($id = NULL, Request $request)
    {
        $staff = Staff::where('user_id', $id)->first();
        $validateArray = array(
            'first_name' => 'required|min:3|max:25',
            'last_name' => 'required|min:3|max:25',
            'email' => 'required|email|max:25|unique:users,email,NULL,user_id,user_id,!' . $staff->id,
            'phone_number' => 'required|min:10|max:10',
            'address' => 'required|max:50',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required|numeric|min:5',
            'country' => 'required',
            'office' => 'required',
            'branch' => 'required',
            'designation' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'password' => 'required|min:6',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $user = User::where('id', $staff->user_id)->first();
            $user->name = $request->first_name . ' ' . $request->last_name;
            $user->email = $request->email;
            $user->password = ($user->password != $request->password) ? Hash::make($request->password) : $user->password;
            if ($request->hasFile('profile')) {
                $image_name = $request->file('profile')->getClientOriginalName();
                $filename = pathinfo($image_name, PATHINFO_FILENAME);
                $image_ext = $request->file('profile')->getClientOriginalExtension();
                $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                $path =  $request->file('profile')->storeAs('public/adminprofile', $fileNameToStore);
                $user->profile = $fileNameToStore;
            }
            $user->save();

            $staff->first_name = $request->first_name;
            $staff->last_name = $request->last_name;
            $staff->email = $request->email;
            $staff->phone_number = $request->phone_number;
            $staff->address = $request->address;
            $staff->city = $request->city;
            $staff->state = $request->state;
            $staff->zipcode = $request->zipcode;
            $staff->country = $request->country;
            $staff->branch = $request->branch;
            $staff->office = $request->office;
            $staff->designation = $request->designation;
            $staff->start_date = date('Y-m-d', strtotime($request->start_date));
            $staff->end_date = date('Y-m-d', strtotime($request->end_date));
            $staff->updated_at = date('Y-m-d H:i:s');
            $staff->permissions = (!empty($request->permissions)) ? implode(',', $request->permissions) : '';
            $staff->save();

            return \Redirect::route('backoffice.users')->with('success', 'User updated!');
        }
    }
    public function delete($id = NULL)
    {
        $user = User::where('id', $id)->first();
        $user_id = $user->id;
        $user = User::where('id', $id)->delete();
        $staff = Staff::where('user_id', $user_id)->delete();
        return back()->with('success', 'User Deleted!');
    }

    public function employmentcontract()
    {
        $users = User::where('status', '1')->where('type', 'staff')->orderby('name', 'ASC')->get();
        $contracts = Contract::join('users', 'contracts.user_id', '=', 'users.id')->orderby('contracts.created_at', 'DESC')->paginate(15);
        return view('backoffice.users.employmentcontract', ['users' => $users, 'contracts' => $contracts]);
    }

    public function postemploymentcontract(Request $request)
    {
        $validateArray = array(
            'user_id' => 'required',
            'file' => 'required'
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $contract = Contract::where('user_id', $request->user_id)->first();
            if (empty($contract)) {
                $contract = new Contract();
            }
            $contract->user_id = $request->user_id;
            if ($request->hasFile('file')) {
                $image_name = $request->file('file')->getClientOriginalName();
                $filename = pathinfo($image_name, PATHINFO_FILENAME);
                $image_ext = $request->file('file')->getClientOriginalExtension();
                $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                $path =  $request->file('file')->storeAs('public/contracts', $fileNameToStore);
                $contract->file = $fileNameToStore;
            }
            $contract->created_at = date('Y-m-d H:i:s');
            $contract->save();
            return back()->with('success', 'Contract Created!');
        }
    }
    public function deletecontract($id = NULL)
    {
        Contract::where('contract_id', $id)->delete();
        return back()->with('success', 'Contract Deleted!');
    }

    public function emergencydetails()
    {
        $users = User::where('status', '1')->where('type', 'staff')->orderby('name', 'ASC')->get();
        $emergencydetails = Emergencycontact::join('users', 'emergencycontacts.user_id', '=', 'users.id')->orderby('emergencycontacts.created_at', 'DESC')->paginate(15);
        return view('backoffice.users.emergencydetails', ['users' => $users, 'contacts' => $emergencydetails]);
    }

    public function postemergencydetail(Request $request)
    {
        $validateArray = array(
            'user_id' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'sometimes|nullable|email',
            'phone_number' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $emergency = Emergencycontact::where('user_id', $request->user_id)->first();
            if (empty($emergency)) {
                $emergency = new Emergencycontact();
            }
            $emergency->user_id = $request->user_id;
            $emergency->firstname = $request->firstname;
            $emergency->lastname = $request->lastname;
            $emergency->email = $request->email;
            $emergency->phone_number = $request->phone_number;
            $emergency->address = $request->address;
            $emergency->city = $request->city;
            $emergency->state = $request->state;
            $emergency->country = $request->country;
            $emergency->created_at = date('Y-m-d H:i:s');
            $emergency->save();
            return back()->with('success', 'Emergencycontact Created!');
        }
    }
    public function deleteemergencycontact($id = NULL)
    {
        Emergencycontact::where('contact_id', $id)->delete();
        return back()->with('success', 'Emergency Contact Deleted!');
    }
}
