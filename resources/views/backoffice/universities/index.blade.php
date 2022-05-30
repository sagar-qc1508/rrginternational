@extends('layouts.dashboard')
@section('content')
<!-- page header -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">Universities</h3>
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
                <a href="{{ route('backoffice.universities.add') }}" class="btn btn-primary waves-effect waves-light" data-effect="wave">
                    <i class="bx bx-plus"></i>
                    Add University
                </a>
            </div><!-- end col-->
            <div class="col-md-9">
                <form method="GET" action="#" class="mt-4 mt-md-0 float-md-right form-inline">
                    <div class="search-box mr-2">
                        <div class="position-relative">
                            <input type="text" class="form-control form-control-sml" placeholder="Search..." name="s" value="<?php echo (!empty($_REQUEST['s'])) ? $_REQUEST['s'] : '' ?>" />
                            <?php if (isset($_REQUEST['search'])) { ?>
                                <a href="{{ route('backoffice.universities') }}" name="search" class="icon"><i class="fa fa-times"></i></a>
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
        <?php if ($universities->count() > 0) { ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>@sortablelink('university_name','University Name')</th>
                            <th width="30%">Overview</th>
                            <th>@sortablelink('city','City')</th>
                            <th>@sortablelink('country_name','Country')</th>
                            <th>@sortablelink('campus','Campus')</th>
                            <th>@sortablelink('available_type','Part/Full Time')</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($universities as $key => $university) { ?>
                            <tr>
                                <td><?php echo $universities->firstItem() + $key; ?></td>
                                <td><img src="{{ asset('storage/universities/'.$university->image) }}" onerror="src='{{ asset("assets/img/placeholder.png") }}'" style="max-width:40px;object-fit:contain" /></td>
                                <td><?php echo $university->university_name; ?></td>
                                <td><?php echo \Illuminate\Support\Str::limit(strip_tags($university->description), $limit = 50, $end = '...'); ?></td>
                                <td><?php echo $university->city; ?></td>
                                <td><?php echo $university->country_name; ?></td>
                                <td><?php echo $university->campus; ?></td>
                                <td><?php echo $university->available_type; ?></td>
                                <td>
                                    <a class="edit-detail" href="{{ route('backoffice.universities.edit',$university->university_id) }}">Edit</a><a href="{{ route('backoffice.universities.delete',$university->university_id) }}" class="del-color-red delete" data-module-name="University" data-name-value="{{ $university->university_name }}">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            {!! $universities->appends(\Request::except('page'))->render() !!}
        <?php } else { ?>
            <div class="no-record text-center">
                <img src="{{ asset('assets/img/no-record.png') }}" class="img-responsive norecordimg" />
                <h4>No record found</h4>
            </div>
        <?php } ?>
    </div>
</div>
@stop