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
                    <h3 class="mb-1 font-weight-bold">Emergency Contact Info</h3>
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
                                <a href="{{ route('backoffice.emergencydetails') }}" name="search" class="icon"><i class="fa fa-times"></i></a>
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
                <form class="form-horizontal" method="post" action="{{ route('backoffice.postemergencydetail') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group floating-label enable-floating-label show-label">
                        <label>User: <i class="text-danger">*</i></label>
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
                    <div class="form-group floating-label enable-floating-label show-label">
                        <label>First Name: <i class="text-danger">*</i></label>
                        <input type="text" class="form-control" name="firstname" value="{{ @$requestdata->firstname ?? '' }}" />
                        @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group floating-label enable-floating-label show-label">
                        <label>Last Name: <i class="text-danger">*</i></label>
                        <input type="text" class="form-control" name="lastname" value="{{ @$requestdata->lastname ?? '' }}" />
                        @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group floating-label enable-floating-label show-label">
                        <label>Email: </label>
                        <input type="text" class="form-control" name="email" value="{{ @$requestdata->email ?? '' }}" />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group floating-label enable-floating-label show-label">
                        <label>Phone Number: </label>
                        <input type="text" class="form-control" name="phone_number" value="{{ @$requestdata->phone_number ?? '' }}" />
                        @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group floating-label enable-floating-label show-label">
                        <label>Address: </label>
                        <input type="text" class="form-control" name="address" value="{{ @$requestdata->address ?? '' }}" />
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group floating-label enable-floating-label show-label">
                        <label>City: </label>
                        <input type="text" class="form-control" name="city" value="{{ @$requestdata->city ?? '' }}" />
                        @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group floating-label enable-floating-label show-label">
                        <label>State: </label>
                        <input type="text" class="form-control" name="state" value="{{ @$requestdata->state ?? '' }}" />
                        @error('state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group floating-label enable-floating-label show-label">
                        <label>Country: </label>
                        <input type="text" class="form-control" name="country" value="{{ @$requestdata->country ?? '' }}" />
                        @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group floating-label enable-floating-label show-label">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-body">
                <?php if ($contacts->count() > 0) { ?>
                    <div class="table-responsive">
                        <table class="table table-bordered  table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>@sortablelink('username','User Name')</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Country</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($contacts as $key => $contact) {
                                ?>
                                    <tr>
                                        <td><?php echo $contacts->firstItem() + $key; ?></td>
                                        <td><?php echo $contact->fullname; ?></td>
                                        <td><?php echo $contact->firstname; ?></td>
                                        <td><?php echo $contact->lastname; ?></td>
                                        <td><?php echo $contact->email; ?></td>
                                        <td><?php echo $contact->phone_number; ?></td>
                                        <td><?php echo $contact->address; ?></td>
                                        <td><?php echo $contact->city; ?></td>
                                        <td><?php echo $contact->state; ?></td>
                                        <td><?php echo $contact->country; ?></td>
                                        <td>
                                            <a href="{{ route('backoffice.deleteemergencycontact',$contact->contact_id) }}" class="del-color-red delete" data-module-name="EmergencyContact" data-name-value="{{ $contact->fullname }}">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    {!! $contacts->appends(\Request::except('page'))->render() !!}
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