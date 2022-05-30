<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\Applications AS Application;
use Session;
use DB;

class ApplicationsController extends Controller
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
        $applications = Application::orderBy('application_id', 'DESC');
        if (!empty($_REQUEST['sort']) && $_REQUEST['direction']) {
            $applications->orderBy($_GET['sort'], $_GET['direction']);
        } else {
            $applications->orderBy('application_id', 'DESC');
        }
        $applications = $applications->select('applications.*')
            ->selectRaw('CONCAT(addressline_1," ",addressline_2) as address')
            ->selectRaw('CONCAT(title," ",forename," ",forename2," ",surname," ",surname) as name')
            ->paginate(15);
        return view('backoffice.applications.index', ['applications' => $applications]);
    }

    public function add()
    {

        return view('backoffice.applications.add');
    }

    public function store(Request $request)
    {
        if ($request->step == '1') {
            $validateArray = array(
                'title' => 'required',
                'forename' => 'required',
                'forename2' => 'required',
                'surname' => 'required',
                'previous_surname' => 'required',
                'dob' => 'required',
                'gender' => 'required',
                'country_of_birth' => 'required',
                'country_of_nationality' => 'required',
                'dual_nationality' => 'required',
                'country_of_residence' => 'required',
                'disability' => 'required',
                'ethnicity' => 'required',
                'addressline_1' => 'required',
                'addressline_2' => 'required',
                'city' => 'required',
                'state' => 'required',
                'country' => 'required',
                'postcode' => 'required',
                'mobile' => 'required',
                'alt_mobile' => 'required',
                'skype_id' => 'required',
            );
        }
        if ($request->step == '2') {
            $validateArray = array(
                'institution.*' => 'required',
                'qualification.*' => 'required',
                'subject.*' => 'required',
                'start_date.*' => 'required',
                'end_date.*' => 'required',
            );
        }
        if ($request->step == '3') {
            $validateArray = array(
                'qualification_type' => 'required',
                'test_report_form_no' => 'required',
                'date_of_test' => 'required',
                'listening_score' => 'required',
                'speaking_score' => 'required',
                'reading_score' => 'required',
                'writing_score' => 'required',
                'overall_score' => 'required'
            );
        }
        if ($request->step == '4') {
            $validateArray = array(
                'reference_file_name.*' => 'required',
            );
            $files = count($request->reference_file_name) - 1;
            foreach (range(0, $files) as $index) {
                $validateArray['reference_file.' . $index] = 'mimes:png,jpeg,jpg,gif|max:2048';
            }
        }
        if ($request->step == '5') {
            $validateArray = array(
                'personal_statement' => 'mimes:png,jpeg,jpg,gif|max:2048',
            );
        }
        if ($request->step == '6') {
            $validateArray = array(
                'passport_number' => 'required',
                'date_of_issue' => 'required',
                'date_of_expiry' => 'required',
                'country_of_issue' => 'required',
                'place_of_birth' => 'required',
                'require_uk_visa' => 'required',
                'have_current_passport' => 'required',
                'have_living_in_uk' => 'required',
                'have_uk_visa' => 'required',
            );
            if (!empty($request->have_uk_visa) && $request->have_uk_visa == 'Yes') {
                $validateArray['visa_number'] = 'required';
                $validateArray['visa_start_date'] = 'required';
                $validateArray['visa_end_date'] = 'required';
                $validateArray['visa_file'] = 'required';
            }
        }
        if ($request->step == '7') {
            $validateArray = array(
                'source_of_funding' => 'required',
            );
        }
        if ($request->step == '8') {
            $validateArray = array(
                'keen_full_name' => 'required',
                'keen_address' => 'required',
                'keen_phone' => 'required',
                'keen_mobile' => 'required',
                'keen_relation' => 'required',
            );
        }
        if ($request->step == '9') {
            $validateArray = array(
                'certificate_name.*' => 'required',
            );
            $files = count($request->certificate_name) - 1;
            foreach (range(0, $files) as $index) {
                $validateArray['certificate_file.' . $index] = 'mimes:png,jpeg,jpg,gif|max:2048';
            }
        }
        if ($request->step == '10') {
            $validateArray = array(
                'data_protection' => 'required',
            );
        }
        if ($request->step == '11') {
            $validateArray = array(
                'declaration' => 'required',
            );
        }
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            session()->put('nextstep', $request->step);
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            if ($request->step == '1') {
                $application_data = (!empty(session()->get('application_data'))) ? session()->get('application_data') : array();
                session()->put('completedstep', '1');
                session()->put('nextstep', '2');
                session()->put('application_data', (object)array_merge((array)$application_data, $request->all()));
                return back();
            }
            if ($request->step == '2') {
                $application_data = (!empty(session()->get('application_data'))) ? session()->get('application_data') : array();
                session()->put('completedstep', '2');
                session()->put('nextstep', '3');
                session()->put('application_data', (object)array_merge((array)$application_data, $request->all()));
                return back();
            }
            if ($request->step == '3') {
                $application_data = (!empty(session()->get('application_data'))) ? session()->get('application_data') : array();
                session()->put('completedstep', '3');
                session()->put('nextstep', '4');
                session()->put('application_data', (object)array_merge((array)$application_data, $request->all()));
                return back();
            }
            if ($request->step == '4') {
                $requestdata = $request->all();
                unset($requestdata['reference_file']);
                $application_data = (!empty(session()->get('application_data'))) ? (array) session()->get('application_data') : array();
                if ($request->hasfile('reference_file')) {
                    foreach ($request->file('reference_file') as $file) {
                        $image_name = $file->getClientOriginalName();
                        $filename = pathinfo($image_name, PATHINFO_FILENAME);
                        $image_ext = $file->getClientOriginalExtension();
                        $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                        $path =  $file->storeAs('public/applications', $fileNameToStore);
                        $requestdata['reference_file'][] = $fileNameToStore;
                    }
                }
                session()->put('completedstep', '4');
                session()->put('nextstep', '5');
                session()->put('application_data', (object)array_merge((array)$application_data, $requestdata));
                return back();
            }
            if ($request->step == '5') {
                $requestdata = $request->all();
                unset($requestdata['personal_statement']);
                $application_data = (!empty(session()->get('application_data'))) ? (array) session()->get('application_data') : array();
                if ($request->hasfile('personal_statement')) {
                    $image_name = $request->file('personal_statement')->getClientOriginalName();
                    $filename = pathinfo($image_name, PATHINFO_FILENAME);
                    $image_ext = $request->file('personal_statement')->getClientOriginalExtension();
                    $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                    $path =  $request->file('personal_statement')->storeAs('public/applications', $fileNameToStore);
                    $requestdata['personal_statement'] = $fileNameToStore;
                }
                session()->put('completedstep', '5');
                session()->put('nextstep', '6');
                session()->put('application_data', (object)array_merge((array)$application_data, $requestdata));
                return back();
            }

            if ($request->step == '6') {
                $requestdata = $request->all();
                unset($requestdata['visa_file']);
                $application_data = (!empty(session()->get('application_data'))) ? (array) session()->get('application_data') : array();
                if ($request->hasfile('visa_file')) {
                    $image_name = $request->file('visa_file')->getClientOriginalName();
                    $filename = pathinfo($image_name, PATHINFO_FILENAME);
                    $image_ext = $request->file('visa_file')->getClientOriginalExtension();
                    $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                    $path =  $request->file('visa_file')->storeAs('public/applications', $fileNameToStore);
                    $requestdata['visa_file'] = $fileNameToStore;
                }
                session()->put('completedstep', '6');
                session()->put('nextstep', '7');
                session()->put('application_data', (object)array_merge((array)$application_data, $requestdata));
                return back();
            }
            if ($request->step == '7') {
                $application_data = (!empty(session()->get('application_data'))) ? session()->get('application_data') : array();
                session()->put('completedstep', '7');
                session()->put('nextstep', '8');
                session()->put('application_data', (object)array_merge((array)$application_data, $request->all()));
                return back();
            }
            if ($request->step == '8') {
                $application_data = (!empty(session()->get('application_data'))) ? session()->get('application_data') : array();
                session()->put('completedstep', '8');
                session()->put('nextstep', '9');
                session()->put('application_data', (object)array_merge((array)$application_data, $request->all()));
                return back();
            }
            if ($request->step == '9') {
                $requestdata = $request->all();
                unset($requestdata['certificate_file']);
                $application_data = (!empty(session()->get('application_data'))) ? (array) session()->get('application_data') : array();
                if ($request->hasfile('certificate_file')) {
                    foreach ($request->file('certificate_file') as $file) {
                        $image_name = $file->getClientOriginalName();
                        $filename = pathinfo($image_name, PATHINFO_FILENAME);
                        $image_ext = $file->getClientOriginalExtension();
                        $fileNameToStore = $filename . '-' . time() . '.' . $image_ext;
                        $path =  $file->storeAs('public/applications', $fileNameToStore);
                        $requestdata['certificate_file'][] = $fileNameToStore;
                    }
                }
                session()->put('completedstep', '9');
                session()->put('nextstep', '10');
                session()->put('application_data', (object)array_merge((array)$application_data, $requestdata));
                return back();
            }
            if ($request->step == '10') {
                $application_data = (!empty(session()->get('application_data'))) ? session()->get('application_data') : array();
                session()->put('completedstep', '10');
                session()->put('nextstep', '11');
                session()->put('application_data', (object)array_merge((array)$application_data, $request->all()));
                return back();
            }
            if ($request->step == '11') {
                $application_data = (!empty(session()->get('application_data'))) ? session()->get('application_data') : array();
                session()->put('completedstep', '11');
                session()->put('application_data', (object)array_merge((array)$application_data, $request->all()));
                return \Redirect::route('backoffice.applications.preview');
            }
        }
    }

    public function preview()
    {
        return view('backoffice.applications.preview');
    }
    public function saveapplication()
    {

        $application_data = (!empty(session()->get('application_data'))) ? (object)session()->get('application_data') : array();
        $qualification = array(
            'institution' => $application_data->institution,
            'qualification' => $application_data->qualification,
            'subject' => $application_data->subject,
            'start_date' => $application_data->start_date,
            'end_date' => $application_data->end_date,
        );
        $english_qualification = array(
            'qualification_type' => $application_data->qualification_type,
            'test_report_form_no' => $application_data->test_report_form_no,
            'date_of_test' => $application_data->date_of_test,
            'listening_score' => $application_data->listening_score,
            'speaking_score' => $application_data->speaking_score,
            'reading_score' => $application_data->reading_score,
            'writing_score' => $application_data->writing_score,
            'overall_score' => $application_data->overall_score,
        );
        $references = array(
            'reference_file_name' => $application_data->reference_file_name,
            'reference_file' => $application_data->reference_file
        );
        $right_to_study = array(
            'passport_number' => $application_data->passport_number,
            'date_of_issue' => $application_data->date_of_issue,
            'date_of_expiry' => $application_data->date_of_expiry,
            'country_of_issue' => $application_data->country_of_issue,
            'place_of_birth' => $application_data->place_of_birth,
            'require_uk_visa' => $application_data->require_uk_visa,
            'have_current_passport' => $application_data->have_current_passport,
            'have_living_in_uk' => $application_data->have_living_in_uk,
            'have_uk_visa' => $application_data->have_uk_visa,
            'visa_type' => $application_data->visa_type,
            'visa_number' => $application_data->visa_number,
            'visa_start_date' => $application_data->visa_start_date,
            'visa_end_date' => $application_data->visa_end_date,
            'visa_file' => $application_data->visa_file,
        );
        $keen_details = array(
            'keen_full_name' => $application_data->keen_full_name,
            'keen_address' => $application_data->keen_address,
            'keen_phone' => $application_data->keen_phone,
            'keen_mobile' => $application_data->keen_mobile,
            'keen_relation' => $application_data->keen_relation
        );
        $certificates = array(
            'certificate_name' => $application_data->certificate_name,
            'certificate_file' => $application_data->certificate_file
        );
        $application = new Application();
        $application->title = $application_data->title;
        $application->forename = $application_data->forename;
        $application->forename2 = $application_data->forename2;
        $application->surname = $application_data->surname;
        $application->previous_surname = $application_data->previous_surname;
        $application->dob = date('Y-m-d', strtotime($application_data->dob));
        $application->gender = $application_data->gender;
        $application->country_of_birth = $application_data->country_of_birth;
        $application->country_of_nationality = $application_data->country_of_nationality;
        $application->dual_nationality = $application_data->dual_nationality;
        $application->country_of_residence = $application_data->country_of_residence;
        $application->disability = $application_data->disability;
        $application->ethnicity = $application_data->ethnicity;
        $application->addressline_1 = $application_data->addressline_1;
        $application->addressline_2 = $application_data->addressline_2;
        $application->city = $application_data->city;
        $application->state = $application_data->state;
        $application->country = $application_data->country;
        $application->postcode = $application_data->postcode;
        $application->mobile = $application_data->mobile;
        $application->alt_mobile = $application_data->alt_mobile;
        $application->skype_id = $application_data->skype_id;
        $application->qualification = json_encode($qualification);
        $application->english_qualification = json_encode($english_qualification);
        $application->references = json_encode($references);
        $application->personal_statement = $application_data->personal_statement;
        $application->right_to_study = json_encode($right_to_study);
        $application->source_of_funding = $application_data->source_of_funding;
        $application->keen_details = json_encode($keen_details);
        $application->certificates = json_encode($certificates);
        $application->created_at = date('Y-m-d H:i:s');
        $application->updated_at = date('Y-m-d H:i:s');
        $application->created_by = auth()->user()->user_id;
        $application->save();
        Session::forget('application_data');
        Session::forget('completedstep');
        Session::forget('nextstep');
        return \Redirect::route('backoffice.applications')->with('success', 'Application created successfully!');
    }

    public function delete($id = NULL)
    {
        $application = Application::where('application_id', $id)->delete();
        return \Redirect::route('backoffice.applications')->with('success', 'Application deleted successfully!');
    }

    public function view($id = NULL)
    {
        $application = Application::where('application_id', $id)->first();
        return view('backoffice.applications.view', ['application' => $application]);
    }
}
