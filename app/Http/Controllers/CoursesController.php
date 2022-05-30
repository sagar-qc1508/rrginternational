<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\University;
use App\Models\Course;
use App\Models\Country;

class CoursesController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        \App::setLocale('en');
      #  $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::join('universities', 'courses.university_id', '=', 'universities.university_id')->join('countries', 'courses.country_id', '=', 'countries.country_id')->select('universities.university_name as university_name', 'courses.*','countries.country_name as country_name')->selectRaw('CONCAT(course_duration_year," Year ",course_duration_month," Month") as course_duration,CONCAT(course_fee_currency," ",course_fee_amount) as course_fee');
        if (!empty($_REQUEST['s'])) {
            $s = str_replace(" ", "%", trim($_REQUEST['s']));
            $courses->where(function ($query) use ($s) {
                $query->where('university_name', 'LIKE', "%$s%")
                    ->orWhere('course_name', 'LIKE', "%$s%")
                    ->orWhere('program_name', 'LIKE', "%$s%")
                    ->orWhere('study_mode', 'LIKE', "%$s%");
            });
        }
        if (!empty($_REQUEST['sort']) && $_REQUEST['direction']) {
            $courses->orderBy($_GET['sort'], $_GET['direction']);
        } else {
            $courses->orderBy('course_id', 'DESC');
        }
        $courses = $courses->paginate(15);
        return view('backoffice.courses.index', ['courses' => $courses]);
    }

    public function add()
    {
        $universities = University::orderBy('university_name', 'ASC')->get();
        $countries = Country::orderBy('country_name', 'ASC')->get();
        return view('backoffice.courses.add', ['universities' => $universities, 'countries' => $countries]);
    }

    public function store(Request $request)
    {
        $validateArray = array(
            'course_name' => 'required|max:50',
            'university_id' => 'required',
            'program_name' => 'required|min:3',
            'description' => 'required',
            'course_duration_year' => 'required|numeric',
            'course_duration_month' => 'required|numeric',
            'course_fee_currency' => 'required',
            'course_fee_amount' => 'required|numeric',
            'address' => 'required',
            'country_id' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $course = new Course();
            $course->course_name = $request->course_name;
            if ($request->hasFile('image')) {
                $image_name = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($image_name, PATHINFO_FILENAME);
                $image_ext = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                $path =  $request->file('image')->storeAs('public/universities', $fileNameToStore);
                $course->image = $fileNameToStore;
            }
            $course->university_id = $request->university_id;
            $course->program_name = $request->program_name;
            $course->intakes = (!empty($request->intakes)) ?  implode(',', $request->intakes) : '';
            $course->description = $request->description;
            $course->course_duration_year = $request->course_duration_year;
            $course->course_duration_month = $request->course_duration_month;
            $course->course_fee_currency = $request->course_fee_currency;
            $course->course_fee_amount = $request->course_fee_amount;
            $course->study_mode = (!empty($request->study_mode)) ?  implode(',', $request->study_mode) : '';
            $course->address = $request->address;
            $course->country_id = $request->country_id;
            $course->city = $request->city;
            $course->zipcode = $request->zipcode;
            $course->created_at = date('Y-m-d H:i:s');
            $course->updated_at = date('Y-m-d H:i:s');
            $course->save();
            return \Redirect::route('backoffice.courses')->with('success', 'Course Created');
        }
    }

    public function edit($id = NULL)
    {
        $universities = University::orderBy('university_name', 'ASC')->get();
        $countries = Country::orderBy('country_name', 'ASC')->get();
        $course = Course::where('course_id', $id)->first();
        return view('backoffice.courses.edit', ['course' => $course, 'universities' => $universities, 'countries' => $countries]);
    }

    public function update($id = NULL, Request $request)
    {
        $course = Course::where('course_id', $id)->first();
        $validateArray = array(
            'course_name' => 'required|max:50',
            'university_id' => 'required',
            'program_name' => 'required|min:3',
            'description' => 'required',
            'course_duration_year' => 'required|numeric',
            'course_duration_month' => 'required|numeric',
            'course_fee_currency' => 'required',
            'course_fee_amount' => 'required|numeric',
            'address' => 'required',
            'country_id' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $course->course_name = $request->course_name;
            if ($request->hasFile('image')) {
                $image_name = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($image_name, PATHINFO_FILENAME);
                $image_ext = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                $path =  $request->file('image')->storeAs('public/universities', $fileNameToStore);
                $course->image = $fileNameToStore;
            }
            $course->university_id = $request->university_id;
            $course->program_name = $request->program_name;
            $course->intakes = (!empty($request->intakes)) ?  implode(',', $request->intakes) : '';
            $course->description = $request->description;
            $course->course_duration_year = $request->course_duration_year;
            $course->course_duration_month = $request->course_duration_month;
            $course->course_fee_currency = $request->course_fee_currency;
            $course->course_fee_amount = $request->course_fee_amount;
            $course->study_mode = (!empty($request->study_mode)) ?  implode(',', $request->study_mode) : '';
            $course->address = $request->address;
            $course->country_id = $request->country_id;
            $course->city = $request->city;
            $course->zipcode = $request->zipcode;
            $course->created_at = date('Y-m-d H:i:s');
            $course->updated_at = date('Y-m-d H:i:s');
            $course->save();
            return \Redirect::route('backoffice.courses')->with('success', 'Course updated');
        }
    }
    public function delete($id = NULL)
    {
        $course = Course::where('course_id', $id)->delete();
        return back()->with('success', 'Course Deleted');
    }
}
