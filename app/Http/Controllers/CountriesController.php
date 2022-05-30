<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\Country;

class CountriesController extends Controller
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
        $countries = Country::orderBy('country_name', 'ASC');
        if (!empty($_REQUEST['s'])) {
            $s = str_replace(" ", "%", trim($_REQUEST['s']));
            $countries->where(function ($query) use ($s) {
                $query->where('country_name', 'LIKE', "%$s%")
                    ->orWhere('country_code', 'LIKE', $s)
                    ->orWhere('currency_name', 'LIKE', "%$s%")
                    ->orWhere('currency_symbol', 'LIKE', "%$s%");
            });
        }
        if (!empty($_REQUEST['sort']) && $_REQUEST['direction']) {
            $countries->orderBy($_GET['sort'], $_GET['direction']);
        } else {
            $countries->orderBy('country_id', 'DESC');
        }
        $countries = $countries->paginate(15);
        return view('backoffice.countries.index', ['countries' => $countries]);
    }

    public function add()
    {
        return view('backoffice.countries.add');
    }

    public function store(Request $request)
    {
        $validateArray = array(
            'country_name' => 'required|max:50|unique:countries,country_name',
            'country_code' => 'required|unique:countries,country_code',
            'currency_name' => 'sometimes|nullable|regex:/^[a-zA-Z]+$/u',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $country = new Country();
            $country->country_name = $request->country_name;
            $country->country_code = $request->country_code;
            $country->currency_name = $request->currency_name;
            $country->currency_symbol = $request->currency_symbol;
            $country->save();
            return \Redirect::route('backoffice.countries')->with('success', 'Country Created');
        }
    }

    public function edit($id = NULL)
    {
        $country = Country::where('country_id', $id)->first();
        return view('backoffice.countries.edit', ['country' => $country]);
    }

    public function update($id = NULL, Request $request)
    {
        $country = Country::where('country_id', '=', $id)->first();
        $validateArray = array(
            'country_name' => 'required|max:50|unique:countries,country_name,NULL,country_id,country_id,!'.$country->country_id,
            'country_code' => 'required|max:50|unique:countries,country_code,NULL,country_id,country_id,!'.$country->country_id,
            'currency_name' => 'sometimes|nullable|regex:/^[a-zA-Z]+$/u',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $country->country_name = $request->country_name;
            $country->country_code = $request->country_code;
            $country->currency_name = $request->currency_name;
            $country->currency_symbol = $request->currency_symbol;
            $country->save();
            return \Redirect::route('backoffice.countries')->with('success', 'Country updated!');
        }
    }
    public function delete($id = NULL)
    {
        $country = Country::where('country_id', $id)->delete();
        return back()->with('success', 'Country Deleted!');
    }
}
