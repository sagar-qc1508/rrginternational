<?php

namespace App\Http\Controllers;

use App\Models\Documents AS Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class DocumentsController extends Controller
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

        $documents = Document::join('users', 'documents.student_id', '=', 'users.id')->orderBy('document_id', 'ASC');
        if (!empty($_REQUEST['s'])) {
            $s = str_replace(" ", "%", trim($_REQUEST['s']));
            # $documents->where(function ($query) use ($s) {
               # $query->where('fullname', 'LIKE', "%$s%")
               #     ->orWhere('document_type', 'LIKE', "%$s%");
            # });
        }
        if (!empty($_REQUEST['sort']) && $_REQUEST['direction']) {
            $documents->orderBy($_GET['sort'], $_GET['direction']);
        } else {
            $documents->orderBy('document_id', 'DESC');
        }
        $documents = $documents->select('users.fullname as student_name','documents.*')->paginate(15);

        $students = User::where('status', '1')->where('type', 'student')->get();
        return view('backoffice.documents.index', ['documents' => $documents, 'students' => $students]);
    }
    public function store(Request $request)
    {
        $validateArray = array(
            'student_id' => 'required',
            'document_type' => 'required',
            'file' => 'required'
        );
        if ($request->document_type == 'Others') {
            $validateArray['other_documenttype'] = 'required';
        }
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $document = new Document();
            $document->student_id = $request->student_id;
            $document->document_type = $request->document_type;
            if ($request->hasFile('file')) {
                $image_name = $request->file('file')->getClientOriginalName();
                $filename = pathinfo($image_name, PATHINFO_FILENAME);
                $image_ext = $request->file('file')->getClientOriginalExtension();
                $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                $path =  $request->file('file')->storeAs('public/documents', $fileNameToStore);
                $document->file = $fileNameToStore;
            }
            $document->created_at = date('Y-m-d H:i:s');
            $document->created_by = auth()->user()->user_id;
            $document->save();
            return \Redirect::route('backoffice.documents')->with('success', 'Document Created');
        }
    }
    public function delete($id = NULL)
    {
        $document = Document::where('document_id', $id)->delete();
        return back()->with('success', 'Document Deleted!');
    }


     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admindocuments()
    {
        $documents = Document::join('users', 'documents.student_id', '=', 'users.id')->where('documents.created_by', '<>', auth()->user()->id)->where('documents.student_id', auth()->user()->id)->orderBy('document_id', 'ASC');
        if (!empty($_REQUEST['s'])) {
            $s = str_replace(" ", "%", trim($_REQUEST['s']));
            $documents->where(function ($query) use ($s) {
                $query->where('fullname', 'LIKE', "%$s%")
                    ->orWhere('document_type', 'LIKE', "%$s%");
            });
        }
        if (!empty($_REQUEST['sort']) && $_REQUEST['direction']) {
            $documents->orderBy($_GET['sort'], $_GET['direction']);
        } else {
            $documents->orderBy('document_id', 'DESC');
        }
        $documents = $documents->select('users.fullname as student_name', 'documents.*')->paginate(15);

        $students = User::where('status', '1')->where('type', 'student')->get();
        return view('backoffice.documents.admindocuments', ['documents' => $documents, 'students' => $students]);
    }
}
