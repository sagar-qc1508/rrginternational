<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\Attendance;
use App\Models\User;

class AttendanceController extends Controller
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
        $attendance = Attendance::join('users', 'attendance.user_id', '=', 'users.id')->orderby('created_at', 'DESC')->select('attendance.*', 'users.fullname as username');
        if (!empty($_REQUEST['user_id'])) {
            $attendance->where('attendance.user_id', 'LIKE', $_REQUEST['user_id']);
        }
        if (!empty($_REQUEST['from_date'])) {
            $attendance->whereDate('in_time', '>=', date('Y-m-d',strtotime($_REQUEST['from_date'])));
        }
        if (!empty($_REQUEST['to_date'])) {
            $attendance->whereDate('out_time', '<=', date('Y-m-d',strtotime($_REQUEST['to_date'])));
        }
        if (!empty($_REQUEST['sort']) && $_REQUEST['direction']) {
            $attendance->orderBy($_GET['sort'], $_GET['direction']);
        } else {
            $attendance->orderBy('id', 'DESC');
        }
        $attendance = $attendance->paginate('20');
        return view('backoffice.attendance.index', ['attendance' => $attendance]);
    }
}
