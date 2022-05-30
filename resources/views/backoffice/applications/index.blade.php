@extends('layouts.dashboard')
@section('content')


<!-- page header -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">Applications</h3>
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
                <a href="{{ route('backoffice.applications.add') }}" class="btn btn-primary waves-effect waves-light" data-effect="wave">
                    <i class="bx bx-plus"></i>
                    Add Application
                </a>
            </div><!-- end col-->
            <div class="col-md-9">
                <form method="GET" action="#" class="mt-4 mt-md-0 float-md-right form-inline">
                    <div class="search-box mr-2">
                        <div class="position-relative">
                            <input type="text" class="form-control form-control-sml" placeholder="Search..." name="s" value="<?php echo (!empty($_REQUEST['s'])) ? $_REQUEST['s'] : '' ?>" />
                            <?php if (isset($_REQUEST['search'])) { ?>
                                <a href="{{ route('backoffice.applications') }}" name="search" class="icon"><i class="fa fa-times"></i></a>
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
        <?php if ($applications->count() > 0) { ?>
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>@sortablelink('name','Name')</th>
                            <th>@sortablelink('dob','DOB')</th>
                            <th>@sortablelink('gender','Gender')</th>
                            <th>@sortablelink('address','Address')</th>
                            <th>@sortablelink('city','City')</th>
                            <th>@sortablelink('state','State')</th>
                            <th>@sortablelink('country','Country')</th>
                            <th>@sortablelink('postcode','Postcode')</th>
                            <th>@sortablelink('mobile','Mobile')</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($applications as $key => $application) { ?>
                            <tr>
                                <td><?php echo $applications->firstItem() + $key; ?></td>
                                <td><?php echo $application->name; ?></td>
                                <td><?php echo date('d-m-Y',strtotime($application->dob)); ?></td>
                                <td><?php echo $application->gender; ?></td>
                                <td><?php echo $application->address; ?></td>
                                <td><?php echo $application->city; ?></td>
                                <td><?php echo $application->state; ?></td>
                                <td><?php echo $application->country; ?></td>
                                <td><?php echo $application->postcode; ?></td>
                                <td><?php echo $application->mobile; ?></td>
                                <td>
                                     <a class="edit-detail" href="{{ route('backoffice.applications.view',$application->application_id) }}">View</a>
                                    <a href="{{ route('backoffice.applications.delete',$application->application_id) }}" class="del-color-red delete" data-module-name="Application" data-name-value="Of {{ $application->name }}">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            {!! $applications->appends(\Request::except('page'))->render() !!}
        <?php } else { ?>
            <div class="no-record text-center">
                <img src="{{ asset('assets/img/no-record.png') }}" class="img-responsive norecordimg" />
                <h4>No application found</h4>
            </div>
        <?php } ?>
    </div>
</div>
@stop