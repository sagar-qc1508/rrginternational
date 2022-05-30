@extends('layouts.dashboard')
@section('content')
<!-- page header -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">Payslip / Salary Slip</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page content -->
<div class="page-content-wrapper mt--45">
    <div class="card card-body">
        <div class="row">
            <div class="col-md-3">
                <a href="{{ route('backoffice.payslip.add') }}" class="btn btn-primary waves-effect waves-light" data-effect="wave">
                    <i class="bx bx-plus"></i>
                    Create Payslip
                </a>
            </div><!-- end col-->
            <div class="col-md-9">
                <form method="GET" action="#" class="mt-4 mt-md-0 float-md-right form-inline">
                    <div class="search-box mr-2">
                        <div class="position-relative">
                            <input type="text" class="form-control form-control-sml" placeholder="Search..." name="s" value="<?php echo (!empty($_REQUEST['s'])) ? $_REQUEST['s'] : '' ?>" />
                            <?php if (isset($_REQUEST['search']) || isset($_REQUEST['s'])) { ?>
                                <a href="{{ route('backoffice.payslip') }}" name="search" class="icon"><i class="fa fa-times"></i></a>
                            <?php } else { ?>
                                <button type="submit" name="search" class="icon"><i class="fa fa-search"></i></button>
                            <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- end row -->
    </div>
    <div class="card card-body">
        <?php if ($payslips->count() > 0) { ?>
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>@sortablelink('month','Month')</th>
                            <th>@sortablelink('year','Year')</th>
                            <th>@sortablelink('username','User Name')</th>
                            <th>@sortablelink('paid_days','Paid Days')</th>
                            <th>@sortablelink('lop_days','Lop Days')</th>
                            <th>@sortablelink('total_payment','Total Payment')</th>
                            <th>@sortablelink('total_deduction','Total Deduction')</th>
                            <th>@sortablelink('netpay','Netpay')</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($payslips as $key => $payslip) { ?>
                            <tr>
                                <td><?php echo $payslips->firstItem() + $key; ?></td>
                                <td><?php echo $payslip->month; ?></td>
                                <td><?php echo $payslip->year; ?></td>
                                <td><?php echo $payslip->username; ?></td>
                                <td><?php echo $payslip->paid_days; ?></td>
                                <td><?php echo $payslip->lop_days; ?></td>
                                <td><?php echo $payslip->total_payment; ?></td>
                                <td><?php echo $payslip->total_deduction; ?></td>
                                <td><?php echo $payslip->netpay; ?></td>
                                <td>
                                <a class="edit-detail" href="{{ route('backoffice.payslip.view',$payslip->payslip_id) }}">View</a><a class="edit-detail" href="{{ route('backoffice.payslip.edit',$payslip->payslip_id) }}">Edit</a><a href="{{ route('backoffice.payslip.delete',$payslip->payslip_id) }}" class="del-color-red delete" data-module-name="Payslip" data-name-value="{{ $payslip->username.' - '.$payslip->month.'/'.$payslip->year }}">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            {!! $payslips->appends(\Request::except('page'))->render() !!}
        <?php } else { ?>
            <div class="no-record text-center">
                <img src="{{ asset('assets/img/no-record.png') }}" class="img-responsive norecordimg" />
                <h4>No record found</h4>
            </div>
        <?php } ?>
    </div>
</div>
@stop