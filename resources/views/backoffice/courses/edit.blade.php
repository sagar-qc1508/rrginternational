@extends('layouts.dashboard')
@section('content')
<?php
$course->intakes = (!empty($course->intakes)) ? explode(',', $course->intakes) : array();
$course->study_mode = (!empty($course->study_mode)) ? explode(',', $course->study_mode) : array();
$requestdata = (!empty(old())) ? (object)old() : $course;
?>

<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">Update Course</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content-wrapper mt--45">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <form class="form-horizontal" method="post" action="{{ route('backoffice.courses.update',$course->course_id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Course Name: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="course_name" class="form-control" placeholder="Course Name" value="{{ $requestdata->course_name ?? '' }}">
                            @error('course_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 control-label">University: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <select class="form-control" name="university_id">
                                <option value="">Select University</option>
                                <?php foreach ($universities as $university) { ?>
                                    <option value="<?php echo $university->university_id ?>" <?php echo ((!empty($requestdata->university_id)) && $requestdata->university_id == $university->university_id) ? 'selected' : '' ?>><?php echo $university->university_name ?></option>
                                <?php } ?>
                            </select>
                            @error('university_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Program Name: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="program_name" class="form-control" placeholder="Program Name" value="{{ $requestdata->program_name ?? '' }}">
                            @error('program_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Intake: </label>
                        <div class="col-sm-9">
                            <div class="row pl-3">
                                <?php
                                for ($i = 1; $i <= 12; $i++) { ?>
                                    <div class="col-md-3">
                                        <div class="checkbox checkbox-primary mb-2">
                                            <input id="checkbox{{ $i }}" type="checkbox" name="intakes[]" <?php echo ((!empty($requestdata->intakes)) && in_array(date('F', mktime(0, 0, 0, $i, 1)), $requestdata->intakes)) ? 'checked' : '' ?> value="<?php echo date('F', mktime(0, 0, 0, $i, 1)); ?>" />
                                            <label for="checkbox{{ $i }}">
                                                <?php echo date('F', mktime(0, 0, 0, $i, 1)); ?>
                                            </label>
                                        </div>
                                    </div>
                                <?php }
                                ?>
                                @error('intakes')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Description: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <textarea class="form-control editor" name="description">{{ $requestdata->description ?? '' }}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Course Duration: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group flex-nowrap">
                                        <input type="text" class="form-control" placeholder="Year" name="course_duration_year" value="{{ $requestdata->course_duration_year ?? '' }}" />
                                        <span class="input-group-text">Year</span>
                                    </div>
                                    @error('course_duration_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group flex-nowrap">
                                        <input type="text" class="form-control" placeholder="Month" name="course_duration_month" value="{{ $requestdata->course_duration_month ?? '' }}" />
                                        <span class="input-group-text">Month</span>
                                    </div>
                                    @error('course_duration_month')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Course Fee: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control" name="course_fee_currency">
                                        <option value="GBP (£)">GBP (£)</option>
                                        <option value="INR (₹)">INR (₹)</option>
                                        <option value="USD ($)">USD ($)</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Fee Amount" name="course_fee_amount" value="{{ $requestdata->course_fee_amount ?? '' }}" />
                                    @error('course_fee_amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Study Mode: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <div class="row pl-3">
                                <?php
                                $levels = array('All', 'Full Time', 'Part Time', 'Online', 'Distance Learning');
                                foreach ($levels as $key=> $level) { ?>
                                    <div class="col-md-3">
                                        <div class="checkbox checkbox-primary mb-2">
                                            <input id="Mode{{$key}}" type="checkbox" name="study_mode[]" <?php echo ((!empty($requestdata->study_mode)) && in_array($level, $requestdata->study_mode)) ? 'checked' : '' ?> value="<?php echo $level; ?>" />
                                            <label for="Mode{{$key}}">
                                                <?php echo $level; ?>
                                            </label>
                                        </div>
                                    </div>
                                <?php }
                                ?>
                            </div>
                            @error('study_mode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Address: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $requestdata->address ?? '' }}">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Country: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <select class="form-control" name="country_id">
                                <option value="">Select Country</option>
                                <?php foreach ($countries as $country) { ?>
                                    <option value="<?php echo $country->country_id ?>" <?php echo ((!empty($requestdata->country_id)) && $requestdata->country_id == $country->country_id) ? 'selected' : '' ?>><?php echo $country->country_name ?></option>
                                <?php } ?>
                            </select>
                            @error('country_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">City: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="city" class="form-control" placeholder="City" value="{{ $requestdata->city ?? '' }}">
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
                            <input type="text" name="zipcode" class="form-control" placeholder="Zipcode/Postalcode" value="{{ $requestdata->zipcode ?? '' }}">
                            @error('zipcode')
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