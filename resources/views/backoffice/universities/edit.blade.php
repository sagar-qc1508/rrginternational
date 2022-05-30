@extends('layouts.dashboard')
@section('content')
<?php
$university->available_levels = (!empty($university->available_levels)) ? explode(',', $university->available_levels) : array();
$university->programs = (!empty($university->programs)) ? explode(',', $university->programs) : array();
$university->intakes = (!empty($university->intakes)) ? explode(',', $university->intakes) : array();
$requestdata = (!empty(old())) ? (object)old() : $university;

?>
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">Update University</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content-wrapper mt--45">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <form class="form-horizontal" method="post" action="{{ route('backoffice.universities.update',$university->university_id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">University Name: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="university_name" class="form-control form-control-sm" placeholder="University Name" value="{{ $requestdata->university_name ?? '' }}">
                            @error('university_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">University Image: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control form-control-sm">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <img src="{{ asset('storage/universities/'.$university->image) }}" onerror="src='{{ asset("assets/img/placeholder.png") }}'" style="max-width:40px;object-fit:contain" />
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
                        <label class="col-sm-3 control-label">Country: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <select class="form-control form-control-sm" name="country_id">
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
                        <label class="col-sm-3 control-label">Campus: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="campus" class="form-control form-control-sm" placeholder="Campus" value="{{ $requestdata->campus ?? '' }}">
                            @error('campus')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Description: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <textarea class="form-control form-control-sm editor" name="description">{{ $requestdata->description ?? '' }}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Programs: </label>
                        <div class="col-sm-9">
                            <select class="form-control form-control-sm selectpicker" name="programs[]" multiple="" data-toggle="select2">
                                <?php foreach ($programs as $program) { ?>
                                    <option value="<?php echo $program ?>" <?php echo ((!empty($requestdata->programs)) && in_array($program, $requestdata->programs)) ? 'selected' : '' ?>><?php echo $program ?></option>
                                <?php } ?>
                            </select>
                            @error('programs')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Part/Full Time: </label>
                        <div class="col-sm-9">
                            <select class="form-control form-control-sm" name="available_type">
                                <option value="Part Time" <?php echo ((!empty($requestdata->available_type)) && $requestdata->available_type == 'Part Time') ? 'selected' : '' ?>>Part Time</option>
                                <option value="Full Time" <?php echo ((!empty($requestdata->available_type)) && $requestdata->available_type == 'Full Time') ? 'selected' : '' ?>>Full Time</option>
                            </select>
                            @error('available_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Intakes: </label>
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
                        <label class="col-sm-3 control-label">Available Levels: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <div class="row pl-3">
                                <?php
                                $levels = array('English course', 'Undergraduate Top-up Level 6', 'Master Degree Courses', 'Pre-sessional', 'Pre-Master', 'DBA', 'Undergraduate Degree', 'Postgraduate Diploma', 'PhD or Research');
                                foreach ($levels as $key => $level) { ?>
                                    <div class="col-md-3">
                                        <div class="checkbox checkbox-primary mb-2">
                                            <input id="Levels{{ $key }}" type="checkbox" name="available_levels[]" <?php echo ((!empty($requestdata->available_levels)) && in_array($level, $requestdata->available_levels)) ? 'checked' : '' ?> value="<?php echo $level; ?>" />
                                            <label for="Levels{{ $key }}"><?php echo $level; ?></label>
                                        </div>
                                    </div>
                                <?php }
                                ?>
                            </div>
                            @error('available_levels')
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