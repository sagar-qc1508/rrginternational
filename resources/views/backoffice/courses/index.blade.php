@extends('layouts.dashboard')
@section('content')

<!-- page header -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">Courses</h3>
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
                <a href="{{ route('backoffice.courses.add') }}" class="btn btn-primary waves-effect waves-light" data-effect="wave">
                    <i class="bx bx-plus"></i>
                    Add Course
                </a>
            </div><!-- end col-->
            <div class="col-md-9">
                <form method="GET" action="#" class="mt-4 mt-md-0 float-md-right form-inline">
                    <div class="search-box mr-2">
                        <div class="position-relative">
                            <input type="text" class="form-control form-control-sml" placeholder="Search..." name="s" value="<?php echo (!empty($_REQUEST['s'])) ? $_REQUEST['s'] : '' ?>" />
                            <?php if (isset($_REQUEST['search'])) { ?>
                                <a href="{{ route('backoffice.courses') }}" name="search" class="icon"><i class="fa fa-times"></i></a>
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
        <?php if ($courses->count() > 0) { ?>
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>@sortablelink('course_name','Course Name')</th>
                            <th>@sortablelink('university_name','University')</th>
                            <th>@sortablelink('course_duration','Course Duration')</th>
                            <th>@sortablelink('course_fee','Course Fee')</th>
                            <th>@sortablelink('intakes','Intake')</th>
                            <th>@sortablelink('study_mode','Study Mode')</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($courses as $key => $course) { ?>
                            <tr>
                                <td><?php echo $courses->firstItem() + $key; ?></td>
                                <td><?php echo $course->course_name; ?></td>
                                <td><?php echo $course->university_name; ?></td>
                                <td><?php echo $course->course_duration; ?></td>
                                <td><?php echo $course->course_fee; ?></td>
                                <td><?php echo $course->intakes; ?></td>
                                <td><?php echo $course->study_mode; ?></td>
                                <td>
                                    <a class="edit-detail" href="{{ route('backoffice.courses.edit',$course->course_id) }}">Edit</a><a href="{{ route('backoffice.courses.delete',$course->course_id) }}" class="del-color-red delete" data-module-name="Course" data-name-value="{{ $course->course_name }}">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            {!! $courses->appends(\Request::except('page'))->render() !!}
        <?php } else { ?>
            <div class="no-record text-center">
                <img src="{{ asset('assets/img/no-record.png') }}" class="img-responsive norecordimg" />
                <h4>No record found</h4>
            </div>
        <?php } ?>
    </div>
</div>
@stop