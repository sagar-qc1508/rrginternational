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
                    <h3 class="mb-1 font-weight-bold">Employement Contract</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page content -->
<div class="page-content-wrapper mt--45">
    <div class="card card-body">
        <div class="row">
            <div class="offset-md-3 col-md-9">
                <form method="GET" action="#" class="mt-4 mt-md-0 float-md-right form-inline">
                    <div class="search-box mr-2">
                        <div class="position-relative">
                            <input type="text" class="form-control form-control-sml" placeholder="Search..." name="s" value="<?php echo (!empty($_REQUEST['s'])) ? $_REQUEST['s'] : '' ?>" />
                            <?php if (isset($_REQUEST['search'])) { ?>
                                <a href="{{ route('backoffice.departments') }}" name="search" class="icon"><i class="fa fa-times"></i></a>
                            <?php } else { ?>
                                <button type="submit" name="search" class="icon"><i class="fa fa-search"></i></button>
                            <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- end row -->
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card card-body">
                <form class="form-horizontal" method="post" action="{{ route('backoffice.postemploymentcontract') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 control-label mb-2">User: <i class="text-danger">*</i></label>
                        <div class="col-sm-12">
                            <select class="form-control" name="user_id">
                                <option value="">--Select--</option>
                                <?php foreach ($users as $user) { ?>
                                    <option value="<?php echo $user->user_id ?>" <?php echo ((!empty($requestdata->user_id)) && $requestdata->user_id == $user->user_id) ? 'selected' : '' ?>><?php echo $user->fullname; ?></option>
                                <?php } ?>
                            </select>
                            @error('user_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 control-label mb-2">Contract: <i class="text-danger">*</i></label>
                        <div class="col-sm-12">
                            <input type="file" class="form-control" name="file" />
                            @error('file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-body">
                <?php if ($contracts->count() > 0) { ?>
                    <div class="table-responsive">
                        <table class="table table-bordered  table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>@sortablelink('username','User Name')</th>
                                    <th>File</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($contracts as $key => $contract) {
                                ?>
                                    <tr>
                                        <td><?php echo $contracts->firstItem() + $key; ?></td>
                                        <td><?php echo $contract->fullname; ?></td>
                                        <td><a class="edit-detail" href="{{ asset('storage/contracts/'.$contract->file) }}">Download</a></td>
                                        <td><?php echo date('d-m-Y h:i A', strtotime($contract->created_at)); ?></td>
                                        <td>
                                            <a href="{{ route('backoffice.deletecontract',$contract->contract_id) }}" class="del-color-red delete" data-module-name="Contract" data-name-value="{{ $contract->fullname }}">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    {!! $contracts->appends(\Request::except('page'))->render() !!}
                <?php } else { ?>
                    <div class="no-record text-center">
                        <img src="{{ asset('assets/img/no-record.png') }}" class="img-responsive norecordimg" />
                        <h4>No record found</h4>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
@stop