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
                    <h3 class="mb-1 font-weight-bold">New User</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content-wrapper mt--45">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <form class="form-horizontal" method="post" action="{{ route('backoffice.users.add') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">First Name: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="first_name" class="form-control form-control-sm" placeholder="First Name" value="{{ $requestdata->first_name ?? '' }}">
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Last Name: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="last_name" class="form-control form-control-sm" placeholder="Last Name" value="{{ $requestdata->last_name ?? '' }}">
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Email: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="email" class="form-control form-control-sm" placeholder="Email" value="{{ $requestdata->email ?? '' }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Phone Number: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="phone_number" class="form-control form-control-sm" placeholder="Phone Number" value="{{ $requestdata->phone_number ?? '' }}">
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Address: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="address" class="form-control form-control-sm" placeholder="Address" value="{{ $requestdata->address ?? '' }}">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">State: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="state" class="form-control form-control-sm" placeholder="State" value="{{ $requestdata->state ?? '' }}">
                            @error('state')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">City: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="city" class="form-control form-control-sm" placeholder="City" value="{{ $requestdata->city ?? '' }}">
                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Zipcode/Postalcode: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="zipcode" class="form-control form-control-sm" placeholder="Zipcode/Postalcode" value="{{ $requestdata->zipcode ?? '' }}">
                            @error('zipcode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Country: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <select class="form-control form-control-sm" name="country">
                                <option value="">Select Country</option>
                                <?php foreach ($countries as $country) { ?>
                                    <option value="<?php echo $country->country_name ?>" <?php echo ((!empty($requestdata->country)) && $requestdata->country == $country->country_name) ? 'selected' : '' ?>><?php echo $country->country_name ?></option>
                                <?php } ?>
                            </select>
                            @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Office: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <select class="form-control form-control-sm" name="office">
                                <option value="">Select Office</option>
                                <option value="UK" <?php echo (!empty($requestdata->office) && $requestdata->office == 'UK') ? 'selected' : '' ?>>UK</option>
                            </select>
                            @error('office')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Branch: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <select class="form-control form-control-sm" name="branch">
                                <option value="">Select Branch</option>
                                <option value="Baroda" <?php echo (!empty($requestdata->branch) && $requestdata->branch == 'Baroda') ? 'selected' : '' ?>>Baroda</option>
                                <option value="Ahmedabad" <?php echo (!empty($requestdata->branch) && $requestdata->branch == 'Ahmedabad') ? 'selected' : '' ?>>Ahmedabad</option>
                                <option value="Punjab" <?php echo (!empty($requestdata->branch) && $requestdata->branch == 'Punjab') ? 'selected' : '' ?>>Punjab</option>
                            </select>
                            @error('branch')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Designation: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="designation" class="form-control form-control-sm" placeholder="Designation" value="{{ $requestdata->designation ?? '' }}">
                            @error('designation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Start Date: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="start_date" class="form-control form-control-sm datepicker" placeholder="Start Date" value="{{ $requestdata->start_date ?? '' }}">
                            @error('start_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">End Date: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="end_date" class="form-control form-control-sm datepicker" placeholder="End Date" value="{{ $requestdata->end_date ?? '' }}">
                            @error('end_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Password: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="password" class="form-control form-control-sm" placeholder="Password" value="{{ $requestdata->password ?? '' }}">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Profile Pic:</label>
                        <div class="col-sm-9">
                            <input type="file" name="profile" class="form-control form-control-sm">
                            @error('profile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">User Permissions: </label>
                        <div class="col-sm-9">
                            <?php
                            $privileges = DB::table('privileges')->get();
                            foreach ($privileges as $i => $privilege) { ?>
                                <div class="checkbox checkbox-primary mb-2">
                                    <input id="checkbox{{ $i }}" type="checkbox" name="permissions[]" <?php echo ((!empty($requestdata->permissions)) && in_array($privilege->privilege_id, $requestdata->permissions)) ? 'checked' : '' ?> value="<?php echo $privilege->privilege_id; ?>" />
                                    <label for="checkbox{{ $i }}">
                                        <?php echo $privilege->label; ?>
                                    </label>
                                </div>
                            <?php }
                            ?>
                            @error('permissions')
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
    </div>
</div>
@stop