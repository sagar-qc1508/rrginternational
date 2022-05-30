<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Event;
use App\Models\User;
use App\Models\Brochure;

class BrochuresController extends Controller
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
        $brochures = Brochure::select('brochures.*');
        if (!empty($_REQUEST['s'])) {
            $s = str_replace(" ", "%", trim($_REQUEST['s']));
            $brochures->where(function ($query) use ($s) {
                $query->where('brochure_name', 'LIKE', "%$s%");
            });
        }
        if (!empty($_REQUEST['sort']) && $_REQUEST['direction']) {
            $brochures->orderBy($_GET['sort'], $_GET['direction']);
        } else {
            $brochures->orderBy('brochure_id', 'DESC');
        }

        $brochures = $brochures->paginate(15);
        return view('backoffice.brochures.index', ['brochures' => $brochures]);
    }

    public function add()
    {
        return view('backoffice.brochures.add');
    }

    public function store(Request $request)
    {

        $validateArray = array(
            'brochure_name' => 'required',
            'upload_file' => 'required',
            
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $brochure = new Brochure();
            $brochure->brochure_name = $request->brochure_name;
            if ($request->hasFile('upload_file')) {
                $image_name = $request->file('upload_file')->getClientOriginalName();
                $filename = pathinfo($image_name, PATHINFO_FILENAME);
                $image_ext = $request->file('upload_file')->getClientOriginalExtension();
                $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                $path =  $request->file('upload_file')->storeAs('public/brochures', $fileNameToStore);
                $brochure->upload_file = $fileNameToStore;
            }
            $brochure->save();
            return \Redirect::route('backoffice.brochures')->with('success', 'Brochure Created');
        }
    }

    public function edit($id = NULL)
    {
        $brochure = Brochure::where('brochure_id', $id)->first();
        return view('backoffice.brochures.edit', ['brochure' => $brochure]);
    }

    public function update($id = NULL, Request $request)
    {
        $brochure = Brochure::where('brochure_id', $id)->first();
        $validateArray = array(
            'brochure_name' => 'required',
            'upload_file' => 'required',
            
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $brochure->brochure_name = $request->brochure_name;
            if ($request->hasFile('upload_file')) {
                $image_name = $request->file('upload_file')->getClientOriginalName();
                $filename = pathinfo($image_name, PATHINFO_FILENAME);
                $image_ext = $request->file('upload_file')->getClientOriginalExtension();
                $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                $path =  $request->file('upload_file')->storeAs('public/brochures', $fileNameToStore);
                $brochure->upload_file = $fileNameToStore;
            }
            $brochure->save();
            return \Redirect::route('backoffice.brochures')->with('success', 'Brochure updated!');
        }
    }
    public function delete($id = NULL)
    {
        $brochure = Brochure::where('brochure_id', $id)->delete();
        return back()->with('success', 'Brochure Deleted!');
    }
}
