<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\Applicationguidance;

class ApplicationguidanceController extends Controller
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
        $guidances = Applicationguidance::orderBy('id', 'DESC');
        if (!empty($_REQUEST['sort']) && $_REQUEST['direction']) {
            $guidances->orderBy($_GET['sort'], $_GET['direction']);
        } else {
            $guidances->orderBy('id', 'DESC');
        }
        $guidances = $guidances->paginate(15);
        return view('backoffice.application_guidance.index', ['guidances' => $guidances]);
    }


    public function store(Request $request)
    {
        $validateArray = array(
            'title' => 'required',
            'detail' => 'required',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $guidance = new Applicationguidance();
            $guidance->title = $request->title;
            $guidance->detail = $request->detail;
            $guidance->save();
            return \Redirect::route('backoffice.application_guidance')->with('success', 'Guidance Created');
        }
    }

    public function edit($id = NULL)
    {
        $guidance = Applicationguidance::where('id', $id)->first();
        return view('backoffice.application_guidance.edit', ['guidance' => $guidance]);
    }

    public function update($id = NULL, Request $request)
    {
        $guidance = Applicationguidance::where('id', $id)->first();
        $validateArray = array(
            'title' => 'required',
            'detail' => 'required',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $guidance->title = $request->title;
            $guidance->detail = $request->detail;
            $guidance->save();
            return \Redirect::route('backoffice.application_guidance')->with('success', 'Guidance updated!');
        }
    }
    public function delete($id = NULL)
    {
        $guidance = Applicationguidance::where('id', $id)->delete();
        return back()->with('success', 'Guidance Deleted!');
    }
}
