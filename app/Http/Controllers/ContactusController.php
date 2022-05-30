<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;
use App\Models\User;

class ContactusController extends Controller
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
        $contacts = Contact::join('users', 'contacts.student_id', '=', 'users.id')->join('students', 'contacts.student_id', '=', 'students.user_id')->orderby('created_at', 'DESC')->select('contacts.*', 'users.fullname as student_name', 'users.email as email', 'students.phone_number as phone_number');
        if (!empty($_REQUEST['s'])) {
            $s = str_replace(" ", "%", trim($_REQUEST['s']));
            $contacts->where(function ($query) use ($s) {
                $query->where('fullname', 'LIKE', "%$s%")
                    ->orWhere('email', 'LIKE', "%$s%")
                    ->orWhere('phone_number', 'LIKE', $s)
                    ->orWhere('subject', 'LIKE', $s)
                    ->orWhere('message', 'LIKE', $s);
            });
        }
        if (!empty($_REQUEST['sort']) && $_REQUEST['direction']) {
            $contacts->orderBy($_GET['sort'], $_GET['direction']);
        } else {
            $contacts->orderBy('contact_id', 'DESC');
        }
        $contacts = $contacts->paginate('20');
        return view('backoffice.contactus.index', ['contacts' => $contacts]);
    }
    public function view($id = NULL)
    {
        $contact = Contact::join('users', 'contacts.student_id', '=', 'users.id')->join('students', 'contacts.student_id', '=', 'students.user_id')->orderby('created_at', 'DESC')->select('contacts.*', 'users.fullname as student_name', 'users.email as email', 'students.phone_number as phone_number')->where('contact_id', $id)->first();
        return view('backoffice.contactus.view', ['contact' => $contact]);
    }
    public function delete($id = NULL)
    {
        Contact::where('contact_id', $id)->delete();
        return \Redirect::route('backoffice.contactus')->with('success', 'Message has been sent! Our staff will contact you soon!');
    }
}
