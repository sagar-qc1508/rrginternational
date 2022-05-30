@extends('layouts.dashboard')
@section('content')
<!-- page header -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">Users</h3>
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
                <a href="{{ route('backoffice.users.add') }}" class="btn btn-primary waves-effect waves-light" data-effect="wave">
                    <i class="bx bx-plus"></i>
                    Add User
                </a>
            </div><!-- end col-->
            <div class="col-md-9">
                <form method="GET" action="#" class="mt-4 mt-md-0 float-md-right form-inline">
                    <div class="search-box mr-2">
                        <div class="position-relative">
                            <input type="text" class="form-control form-control-sml" placeholder="Search..." name="s" value="<?php echo (!empty($_REQUEST['s'])) ? $_REQUEST['s'] : '' ?>" />
                            <?php if (isset($_REQUEST['search']) || isset($_REQUEST['s'])) { ?>
                                <a href="{{ route('backoffice.users') }}" name="search" class="icon"><i class="fa fa-times"></i></a>
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
        <?php if ($users->count() > 0) { ?>
            <div class="table-responsive">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>@sortablelink('username','User Name')</th>
                            <th>@sortablelink('username','User Full Name')</th>
                            <th>@sortablelink('email','Email')</th>
                            <th>@sortablelink('phone_number','Phone Number')</th>
                            <th>@sortablelink('office','Office')</th>
                            <th>@sortablelink('branch','Branch')</th>
                            <th>@sortablelink('designation','Designation')</th>
                            <th>@sortablelink('city','City')</th>
                            <th>@sortablelink('state','State')</th>
                            <th>@sortablelink('country_name','Country')</th>
                            <th>Profile Pic</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $key => $user) { ?>
                            <tr>
                                <td><?php echo $users->firstItem() + $key; ?></td>
                                <td><?php echo $user->username; ?></td>
                                <td><?php echo $user->first_name . ' ' . $user->last_name; ?></td>
                                <td><?php echo $user->email; ?></td>
                                <td><?php echo $user->phone_number; ?></td>
                                <td><?php echo $user->office; ?></td>
                                <td><?php echo $user->branch; ?></td>
                                <td><?php echo $user->designation; ?></td>
                                <td><?php echo $user->city; ?></td>
                                <td><?php echo $user->state; ?></td>
                                <td><?php echo $user->country; ?></td>
                                <td><img src="{{ asset('storage/adminprofile/'.$user->profile) }}" onerror="src='{{ asset("assets/img/user.png") }}'" style="max-width:40px;object-fit:contain" /></td>
                                <td>
                                    <a class="edit-detail" href="{{ route('backoffice.users.edit',$user->user_id) }}">Edit</a><a href="{{ route('backoffice.users.delete',$user->user_id) }}" class="del-color-red delete" data-module-name="Student" data-name-value="{{ $user->first_name.' '.$user->last_name }}">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            {!! $users->appends(\Request::except('page'))->render() !!}
        <?php } else { ?>
            <div class="no-record text-center">
                <img src="{{ asset('assets/img/no-record.png') }}" class="img-responsive norecordimg" />
                <h4>No record found</h4>
            </div>
        <?php } ?>
    </div>
</div>
@stop