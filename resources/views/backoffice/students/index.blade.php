@extends('layouts.dashboard')
@section('content')
<!-- page header -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">Students</h3>
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
                <a href="{{ route('backoffice.students.add') }}" class="btn btn-primary waves-effect waves-light" data-effect="wave">
                    <i class="bx bx-plus"></i>
                    Add Student
                </a>
            </div><!-- end col-->
            <div class="col-md-9">
                <form method="GET" action="#" class="mt-4 mt-md-0 float-md-right form-inline">
                    <div class="search-box mr-2">
                        <div class="position-relative">
                            <input type="text" class="form-control form-control-sml" placeholder="Search..." name="s" value="<?php echo (!empty($_REQUEST['s'])) ? $_REQUEST['s'] : '' ?>" />
                            <?php if (isset($_REQUEST['search'])) { ?>
                                <a href="{{ route('backoffice.students') }}" name="search" class="icon"><i class="fa fa-times"></i></a>
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
        <?php if ($students->count() > 0) { ?>
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>@sortablelink('ref_id','Ref.ID')</th>
                            <th>@sortablelink('student_name','Student Name')</th>
                            <th>@sortablelink('email','Email')</th>
                            <th>@sortablelink('phone_number','Phone Number')</th>
                            <th>@sortablelink('city','City')</th>
                            <th>@sortablelink('state','State')</th>
                            <th>@sortablelink('country_name','Country')</th>
                            <th>Profile Pic</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($students as $key => $student) { ?>
                            <tr>
                                <td><?php echo $students->firstItem() + $key; ?></td>
                                <td><?php echo $student->ref_id; ?></td>
                                <td><?php echo $student->first_name . ' ' . $student->last_name; ?></td>
                                <td><?php echo $student->email; ?></td>
                                <td><?php echo $student->phone_number; ?></td>
                                <td><?php echo $student->city; ?></td>
                                <td><?php echo $student->state; ?></td>
                                <td><?php echo $student->country_name; ?></td>
                                <td><img src="{{ asset('storage/studentprofile/'.$student->profile) }}" onerror="src='{{ asset("assets/img/user.png") }}'" style="max-width:40px;object-fit:contain" /></td>
                                <td>
                                    <a class="edit-detail" href="{{ route('backoffice.students.edit',$student->student_id) }}">Edit</a><a href="{{ route('backoffice.students.delete',$student->student_id) }}" class="del-color-red delete" data-module-name="Student" data-name-value="{{ $student->first_name.' '.$student->last_name }}">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            {!! $students->appends(\Request::except('page'))->render() !!}
        <?php } else { ?>
            <div class="no-record text-center">
                <img src="{{ asset('assets/img/no-record.png') }}" class="img-responsive norecordimg" />
                <h4>No record found</h4>
            </div>
        <?php } ?>
    </div>
</div>
@stop