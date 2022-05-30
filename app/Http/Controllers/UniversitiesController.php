<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\University;
use App\Models\Course;
use App\Models\Country;

class UniversitiesController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        \App::setLocale('en');
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $universities = University::join('countries', 'universities.country_id', '=', 'countries.country_id');
        if (!empty($_REQUEST['s'])) {
            $s = str_replace(" ", "%", trim($_REQUEST['s']));
            $universities->where(function ($query) use ($s) {
                $query->where('university_name', 'LIKE', "%$s%")
                    ->orWhere('city', 'LIKE', "%$s%")
                    ->orWhere('country_name', 'LIKE', "%$s%")
                    ->orWhere('description', 'LIKE', "%$s%")
                    ->orWhere('available_type', 'LIKE', "%$s%");
            });
        }
        if (!empty($_REQUEST['sort']) && $_REQUEST['direction']) {
            $universities->orderBy($_GET['sort'], $_GET['direction']);
        } else {
            $universities->orderBy('university_id', 'DESC');
        }
        $universities = $universities->paginate(15);
        return view('backoffice.universities.index', ['universities' => $universities]);
    }

    public function add()
    {
        $programs = Course::where('program_name', '<>', '')->groupBy('program_name')->pluck('program_name');
        $countries = Country::orderBy('country_name', 'ASC')->get();
        return view('backoffice.universities.add', ['programs' => $programs, 'countries' => $countries]);
    }

    public function store(Request $request)
    {
        $validateArray = array(
            'university_name' => 'required|max:50',
            'image' => 'required|mimes:png,jpeg,jpg',
            'address'=>'required',
            'country_id' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'campus' => 'required',
            'description' => 'required',
            // 'programs' => 'required',
            // 'intakes' => 'required',
            'available_type' => 'required',
            'available_levels' => 'required',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $university = new University();
            $university->university_name = $request->university_name;
            if ($request->hasFile('image')) {
                $image_name = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($image_name, PATHINFO_FILENAME);
                $image_ext = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                $path =  $request->file('image')->storeAs('public/universities', $fileNameToStore);
                $university->image = $fileNameToStore;
            }
            $university->country_id = $request->country_id;
            $university->city = $request->city;
            $university->address = $request->address;
            $university->zipcode = $request->zipcode;
            $university->campus = $request->campus;
            $university->description = $request->description;
            $university->programs = (!empty($request->programs)) ? implode(',', $request->programs) : '';
            $university->intakes = (!empty($request->intakes)) ?  implode(',', $request->intakes) : '';
            $university->available_type = $request->available_type;
            $university->available_levels = implode(',', $request->available_levels);
            $university->created_at = date('Y-m-d H:i:s');
            $university->updated_at = date('Y-m-d H:i:s');
            $university->save();
            return \Redirect::route('backoffice.universities')->with('success', 'University Created');
        }
    }

    public function edit($id = NULL)
    {
        $programs = Course::where('program_name', '<>', '')->groupBy('program_name')->pluck('program_name');
        $countries = Country::orderBy('country_name', 'ASC')->get();
        $university = University::where('university_id', $id)->first();
        return view('backoffice.universities.edit', ['university' => $university, 'programs' => $programs, 'countries' => $countries]);
    }

    public function update($id = NULL, Request $request)
    {
        $university = University::where('university_id', $id)->first();
        $validateArray = array(
            'university_name' => 'required|max:50',
            'image' => 'sometimes|nullable|mimes:png,jpeg,jpg',
            'address'=>'required',
            'country_id' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'campus' => 'required',
            'description' => 'required',
            // 'programs' => 'required',
            // 'intakes' => 'required',
            'available_type' => 'required',
            'available_levels' => 'required',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $university->university_name = $request->university_name;
            if ($request->hasFile('image')) {
                $image_name = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($image_name, PATHINFO_FILENAME);
                $image_ext = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                $path =  $request->file('image')->storeAs('public/universities', $fileNameToStore);
                $university->image = $fileNameToStore;
            }
            $university->country_id = $request->country_id;
            $university->city = $request->city;
            $university->address = $request->address;
            $university->zipcode = $request->zipcode;
            $university->campus = $request->campus;
            $university->description = $request->description;
            $university->programs = (!empty($request->programs)) ? implode(',', $request->programs) : '';
            $university->intakes = (!empty($request->intakes)) ?  implode(',', $request->intakes) : '';
            $university->available_type = $request->available_type;
            $university->available_levels = implode(',', $request->available_levels);
            $university->updated_at = date('Y-m-d H:i:s');
            $university->save();
            return \Redirect::route('backoffice.universities')->with('success', 'University updated');
        }
    }
    public function delete($id = NULL)
    {
        $university = University::where('university_id', $id)->delete();
        return back()->with('success', 'University Deleted');
    }

}
