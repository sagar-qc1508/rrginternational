<?php

namespace App\Http\Controllers;

use App\Models\Supporttickets AS Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\Departments;
use App\Models\User;
use DB;

class SupportticketsController extends Controller
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

    public function index()
    {
        $tickets = Ticket::join('departments', 'tickets.department', '=', 'departments.department_id')->join('users', 'tickets.student_id', '=', 'users.user_id')->join('students', 'tickets.student_id', '=', 'students.user_id')->select('tickets.*', 'departments.department_name as department', 'users.fullname as student_name', 'users.email as email', 'students.phone_number as phone_number')->orderBy('ticket_id', 'DESC')->paginate(15);
        return view('backoffice.tickets.index', ['tickets' => $tickets]);
    }
    public function create()
    {
        $departments = Department::where('parent', '0')->orderBy('department_name', 'ASC')->get();
        $students = User::where('type', 'student')->orderBy('fullname', 'ASC')->get();
        return view('backoffice.tickets.add', ['departments' => $departments, 'students' => $students]);
    }
    public function store(Request $request)
    {
        $validateArray = array(
            'student_id' => 'required',
            'subject' => 'required',
            'priority' => 'required',
            'department' => 'required',
            'detail' => 'required'
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $ticket = new Ticket();
            $ticket->student_id = $request->student_id;
            $ticket->department = $request->department;
            $ticket->subject = $request->subject;
            $ticket->detail = $request->detail;
            $ticket->priority = $request->priority;
            $ticket->status = 'Open';
            if ($request->hasFile('attachment')) {
                $image_name = $request->file('attachment')->getClientOriginalName();
                $filename = pathinfo($image_name, PATHINFO_FILENAME);
                $image_ext = $request->file('attachment')->getClientOriginalExtension();
                $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                $path =  $request->file('attachment')->storeAs('public/tickets', $fileNameToStore);
                $ticket->attachment = $fileNameToStore;
            }
            $ticket->created_at = date('Y-m-d H:i:s');
            $ticket->updated_at = date('Y-m-d H:i:s');
            $ticket->save();
            $ticket_id = $ticket->ticket_id;
            DB::table('tickets')
                ->where('ticket_id', $ticket_id)
                ->update(['ticket_no' => sprintf('%03d', $ticket_id)]);
            return \Redirect::route('backoffice.supporttickets');
        }
    }
    public function view($id = NULL)
    {
        $ticket = Ticket::join('departments', 'tickets.department', '=', 'departments.department_id')->where('ticket_id', $id)->join('users', 'tickets.student_id', '=', 'users.id')->join('students', 'tickets.student_id', '=', 'students.user_id')->select('tickets.*', 'departments.department_name as department', 'users.fullname as student_name', 'users.email as email', 'students.phone_number as phone_number')->orderBy('ticket_id', 'DESC')->first();
        return view('backoffice.tickets.view', ['ticket' => $ticket]);
    }
    public function reply(Request $request)
    {
        $validateArray = array(
            'reply' => 'required'
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            if ($request->hasFile('attachment')) {
                $image_name = $request->file('attachment')->getClientOriginalName();
                $filename = pathinfo($image_name, PATHINFO_FILENAME);
                $image_ext = $request->file('attachment')->getClientOriginalExtension();
                $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                $path =  $request->file('attachment')->storeAs('public/tickets', $fileNameToStore);
            } else {
                $fileNameToStore = '';
            }
            DB::table('ticketreplies')->insert([
                'ticket_id' => $request->ticket_id,
                'user_id' => auth()->user()->user_id,
                'detail' => $request->reply,
                'attachment' => $fileNameToStore,
                'created_at' => date('Y-m-d H:i:s'),
            ]);
            return back();
        }
    }
    public function closeticket($id = NULL)
    {
        Ticket::where('ticket_id', $id)->update(['status' => 'Closed']);
        return \Redirect::route('backoffice.supporttickets')->with('success', 'Ticket closed successfully!');
    }
}
