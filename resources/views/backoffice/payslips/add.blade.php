@extends('layouts.dashboard')
@section('content')
<?php
$requestdata = (!empty(old())) ? (object)old() : array();
?>
<!-- page header -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">New Payslip</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content-wrapper mt--45">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card card-body">
                <form class="form-horizontal" method="post" action="{{ route('backoffice.payslip.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="slipheader border p-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group floating-label enable-floating-label show-label">
                                    <select class="form-control" name="month">
                                        <?php
                                        for ($i = 1; $i <= 12; $i++) { ?>
                                            <option <?php echo (!empty($requestdata->month) && $requestdata->month == date('F', mktime(0, 0, 0, $i, 1))) ? 'selected' : '' ?> value="<?php echo date('F', mktime(0, 0, 0, $i, 1)); ?>"><?php echo date('F', mktime(0, 0, 0, $i, 1)); ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                    <label>Month <span class="text-danger">*</span></label>
                                    @error('month')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group floating-label enable-floating-label show-label">
                                    <input type="text" placeholder="Year" class="form-control" name="year" value="{{ @$requestdata->year ?? '' }}">
                                    <label>Year <span class="text-danger">*</span></label>
                                    @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group floating-label enable-floating-label show-label">
                                    <select class="form-control" name="user_id">
                                        <?php
                                        foreach ($users as $user) { ?>
                                            <option <?php echo (!empty($requestdata->user_id) && $requestdata->user_id == $user->user_id) ? 'selected' : '' ?> value="<?php echo $user->user_id; ?>"><?php echo $user->fullname; ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                    <label>User <span class="text-danger">*</span></label>
                                    @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group floating-label enable-floating-label show-label">
                                    <input type="text" placeholder="Paid Days" class="form-control" name="paid_days" value="{{ @$requestdata->paid_days ?? '' }}">
                                    <label>Paid Days <span class="text-danger">*</span></label>
                                    @error('paid_days')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group floating-label enable-floating-label show-label">
                                    <input type="text" placeholder="Paid Days" class="form-control" name="lop_days" value="{{ @$requestdata->lop_days ?? '' }}">
                                    <label>LOP Days</label>
                                    @error('lop_days')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slipbody border p-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-3" style="background: #bdc2c3;padding: 8px;margin-bottom: 28px !important;margin-top: 13px;color: #000;border-radius: 3px;">Earnings</h6>
                                <div class="form-group floating-label enable-floating-label show-label">
                                    <input type="text" placeholder="Basic" class="form-control basic_salary" name="basic_salary" value="{{ @$requestdata->basic_salary ?? '' }}">
                                    <label>Basic <span class="text-danger">*</span></label>
                                    @error('basic_salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group floating-label enable-floating-label show-label">
                                    <input type="text" placeholder="OT Hours" class="form-control ot_hours" name="ot_hours" value="{{ @$requestdata->ot_hours ?? '' }}">
                                    <label>OT Hours </label>
                                    @error('ot_hours')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group floating-label enable-floating-label show-label">
                                    <input type="text" placeholder="OT Rate" class="form-control ot_rate" name="ot_rate" value="{{ @$requestdata->ot_rate ?? '' }}">
                                    <label>OT Rate </label>
                                    @error('ot_rate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group floating-label enable-floating-label show-label">
                                    <input type="text" placeholder="OT Payment" class="form-control ot_payment" name="ot_payment" readonly value="{{ @$requestdata->ot_payment ?? '' }}">
                                    <label>OT Payment</label>
                                    @error('ot_payment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6 class="mb-3" style="background: #bdc2c3;padding: 8px;margin-bottom: 28px !important;margin-top: 13px;color: #000;border-radius: 3px;">Deduction</h6>
                                <div class="form-group floating-label enable-floating-label show-label">
                                    <input type="text" placeholder="Salary Advance" class="form-control salary_advance" name="salary_advance" value="{{ @$requestdata->salary_advance ?? '0' }}">
                                    <label>Salary Advance</label>
                                    @error('salary_advance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group floating-label enable-floating-label show-label">
                                    <input type="text" placeholder="Other Deduction" class="form-control other_deduction" name="other_deduction" value="{{ @$requestdata->other_deduction ?? '0' }}">
                                    <label>Other Deduction</label>
                                    @error('other_deduction')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slipfooter border p-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group floating-label enable-floating-label show-label">
                                    <input type="text" placeholder="Total Payment" class="form-control total_payment" name="total_payment" readonly value="{{ @$requestdata->total_payment ?? '0' }}">
                                    <label>Total Payment <span class="text-danger">*</span></label>
                                    @error('total_payment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group floating-label enable-floating-label show-label">
                                    <input type="text" placeholder="Total Deduction" class="form-control total_deduction" name="total_deduction" readonly value="{{ @$requestdata->total_deduction ?? '0' }}">
                                    <label>Total Deduction</label>
                                    @error('total_deduction')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group floating-label enable-floating-label show-label">
                                    <input type="text" placeholder="Total Deduction" class="form-control netpay" name="netpay" readonly value="{{ @$requestdata->netpay ?? '' }}">
                                    <label>Net Pay <span class="text-danger">*</span></label>
                                    @error('netpay')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
@section('script')
<script>
    function calc() {
        var basic_salary = ($('.basic_salary').val() != '') ? $('.basic_salary').val() : '0';
        var ot_hours = ($('.ot_hours').val() != '') ? $('.ot_hours').val() : '0';
        var ot_rate = ($('.ot_rate').val() != '') ? $('.ot_rate').val() : '0';
        var ot_payment = parseFloat(ot_hours) * parseFloat(ot_rate);
        var salary_advance = ($('.salary_advance').val() != '') ? $('.salary_advance').val() : '0';
        var other_deduction = ($('.other_deduction').val() != '') ? $('.other_deduction').val() : '0';
        var total_payment = parseFloat(basic_salary) + parseFloat(ot_payment);
        var total_deduction = parseFloat(salary_advance) + parseFloat(other_deduction);
        var netpay = parseFloat(total_payment) - parseFloat(total_deduction);
        $('.netpay').val(netpay);
        $('.total_payment').val(total_payment);
        $('.total_deduction').val(total_deduction);
        $('.ot_payment').val(ot_payment);
    }

    $(document).on('change', '.basic_salary,.ot_hours,.ot_rate,.salary_advance,.other_deduction', function() {
        calc();
    });
</script>
@stop