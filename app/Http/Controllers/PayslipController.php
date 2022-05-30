<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\Payslip;
use App\Models\User;

class PayslipController extends Controller
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

    public function index()
    {
        $payslips = Payslip::join('users', 'payslips.user_id', '=', 'users.id')->select('payslips.*', 'users.fullname as username');
        if (!empty($_REQUEST['s'])) {
            $s = str_replace(" ", "%", trim($_REQUEST['s']));
            $payslips->where(function ($query) use ($s) {
                $query->where('fullname', 'LIKE', "%$s%")
                    ->orWhere('month', 'LIKE', $s)
                    ->orWhere('year', 'LIKE', $s);
            });
        }
        if (!empty($_REQUEST['sort']) && $_REQUEST['direction']) {
            $payslips->orderBy($_GET['sort'], $_GET['direction']);
        } else {
            $payslips->orderBy('payslip_id', 'DESC');
        }
        $payslips = $payslips->paginate('20');
        return view('backoffice.payslips.index', ['payslips' => $payslips]);
    }
    public function add()
    {
        $users = User::where('status', '1')->where('type', 'staff')->orderby('name', 'ASC')->get();
        return view('backoffice.payslips.add', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $validateArray = array(
            'user_id' => 'required',
            'month' => 'required',
            'year' => 'required',
            'paid_days' => 'required|numeric',
            'lop_days' => 'required|numeric',
            'basic_salary' => 'required|numeric',
            'ot_hours' => 'sometimes|nullable|numeric',
            'ot_rate' => 'sometimes|nullable|numeric',
            'ot_payment' => 'sometimes|nullable|numeric',
            'salary_advance' => 'sometimes|nullable|numeric',
            'other_deduction' => 'sometimes|nullable|numeric',
            'total_payment' => 'required|numeric',
            'total_deduction' => 'required|numeric',
            'netpay' => 'required|numeric',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $payslip = new Payslip();
            $payslip->user_id = $request->user_id;
            $payslip->month = $request->month;
            $payslip->year = $request->year;
            $payslip->paid_days = $request->paid_days;
            $payslip->lop_days = $request->lop_days;
            $payslip->basic_salary = $request->basic_salary;
            $payslip->ot_hours = $request->ot_hours;
            $payslip->ot_rate = $request->ot_rate;
            $payslip->ot_payment = $request->ot_payment;
            $payslip->salary_advance = $request->salary_advance;
            $payslip->other_deduction = $request->other_deduction;
            $payslip->total_payment = $request->total_payment;
            $payslip->total_deduction = $request->total_deduction;
            $payslip->netpay = $request->netpay;
            $payslip->created_at = date('Y-m-d H:i:s');
            $payslip->updated_at = date('Y-m-d H:i:s');
            $payslip->save();
            return \Redirect::route('backoffice.payslip')->with('success', 'Payslip Created');
        }
    }

    public function edit($id = NULL)
    {
        $users = User::where('status', '1')->where('type', 'staff')->orderby('fullname', 'ASC')->get();
        $payslip = Payslip::join('users', 'payslips.user_id', '=', 'users.user_id')->where('payslip_id', $id)->select('payslips.*', 'users.*')->first();
        return view('backoffice.payslips.edit', ['payslip' => $payslip, 'users' => $users]);
    }

    public function update($id = NULL, Request $request)
    {
        $payslip = Payslip::where('payslip_id', $id)->first();
        $validateArray = array(
            'user_id' => 'required',
            'month' => 'required',
            'year' => 'required',
            'paid_days' => 'required|numeric',
            'lop_days' => 'required|numeric',
            'basic_salary' => 'required|numeric',
            'ot_hours' => 'sometimes|nullable|numeric',
            'ot_rate' => 'sometimes|nullable|numeric',
            'ot_payment' => 'sometimes|nullable|numeric',
            'salary_advance' => 'sometimes|nullable|numeric',
            'other_deduction' => 'sometimes|nullable|numeric',
            'total_payment' => 'required|numeric',
            'total_deduction' => 'required|numeric',
            'netpay' => 'required|numeric',
        );
        $validator = Validator::make($request->all(), $validateArray);
        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator->errors())->withInput();
        } else {
            $payslip->user_id = $request->user_id;
            $payslip->month = $request->month;
            $payslip->year = $request->year;
            $payslip->paid_days = $request->paid_days;
            $payslip->lop_days = $request->lop_days;
            $payslip->basic_salary = $request->basic_salary;
            $payslip->ot_hours = $request->ot_hours;
            $payslip->ot_rate = $request->ot_rate;
            $payslip->ot_payment = $request->ot_payment;
            $payslip->salary_advance = $request->salary_advance;
            $payslip->other_deduction = $request->other_deduction;
            $payslip->total_payment = $request->total_payment;
            $payslip->total_deduction = $request->total_deduction;
            $payslip->netpay = $request->netpay;
            $payslip->updated_at = date('Y-m-d H:i:s');
            $payslip->save();
            return \Redirect::route('backoffice.payslip')->with('success', 'Payslip Created');
        }
    }


    public function view($id = NULL)
    {
        $payslip = Payslip::join('users', 'payslips.user_id', '=', 'users.user_id')->where('payslip_id', $id)->select('payslips.*', 'users.*')->first();
        return view('backoffice.payslips.view', ['payslip' => $payslip]);
    }
    public function delete($id = NULL)
    {
        Payslip::where('payslip_id', $id)->delete();
        return \Redirect::route('backoffice.payslip')->with('success', 'Payslip deleted successfully!');
    }
}
