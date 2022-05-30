<?php

namespace App\Http\Controllers;

use App\Models\Events AS Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class EventsController extends Controller
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
        $events = Event::select('events.*');
        if (!empty($_REQUEST['s'])) {
            $s = str_replace(" ", "%", trim($_REQUEST['s']));
            $events->where(function ($query) use ($s) {
                $query->where('event_title', 'LIKE', "%$s%");
            });
        }
        if (!empty($_REQUEST['sort']) && $_REQUEST['direction']) {
            $events->orderBy($_GET['sort'], $_GET['direction']);
        } else {
            $events->orderBy('event_id', 'DESC');
        }
        $events = $events->paginate(15);
        return view('backoffice.events.index', ['events' => $events]);
    }

    public function add()
    {
        return view('backoffice.events.add');
    }

    public function store(Request $request)
    {

        $validateArray = array(
            'event_title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
            'event_date' => 'required',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $event = new Event();
            $event->event_title = $request->event_title;
            if ($request->hasFile('image')) {
                $image_name = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($image_name, PATHINFO_FILENAME);
                $image_ext = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                $path =  $request->file('image')->storeAs('public/events', $fileNameToStore);
                $event->image = $fileNameToStore;
            }
            $event->description=$request->description;
            $event->event_date = date('Y-m-d',strtotime($request->event_date));
            $event->created_at = date('Y-m-d H:i:s');
            $event->updated_at = date('Y-m-d H:i:s');
            $event->save();
            return \Redirect::route('backoffice.events')->with('success', 'Event Created');
        }
    }

    public function edit($id = NULL)
    {
        $event = Event::where('event_id', $id)->first();
        return view('backoffice.events.edit', ['event' => $event]);
    }

    public function update($id = NULL, Request $request)
    {
        $event = Event::where('event_id', $id)->first();
        $validateArray = array(
            'event_title' => 'required',
            'description' => 'required',
            'image' => 'sometimes|nullable|mimes:png,jpg,jpeg',
            'event_date' => 'required',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $event->event_title = $request->event_title;
            if ($request->hasFile('image')) {
                $image_name = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($image_name, PATHINFO_FILENAME);
                $image_ext = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                $path =  $request->file('image')->storeAs('public/events', $fileNameToStore);
                $event->image = $fileNameToStore;
            }
            $event->description=$request->description;
            $event->event_date = date('Y-m-d',strtotime($request->event_date));
            $event->updated_at = date('Y-m-d H:i:s');
            $event->save();
            return \Redirect::route('backoffice.events')->with('success', 'Event updated!');
        }
    }
    public function delete($id = NULL)
    {
        $event = Event::where('event_id', $id)->delete();
        return back()->with('success', 'Event Deleted!');
    }
}
