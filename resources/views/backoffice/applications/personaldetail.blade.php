<?php
$countries = DB::table('countries')->orderBy('country_name')->get();
$requestdata = (!empty(old())) ? (object)old() : (!empty(session()->get('application_data')) ? session()->get('application_data') : array());
?>
<div class="tab-pane active" id="tab1">
    <h4 class="wizard-title">Personal Details</h4>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <select class="form-control select2" name="title">
                    <option value="">Select Title</option>
                    <option value="Mr." <?php echo (!empty($requestdata->title) && $requestdata->title == 'Mr.') ? 'selected' : '' ?>>Mr.</option>
                    <option value="Ms." <?php echo (!empty($requestdata->title) && $requestdata->title == 'Ms.') ? 'selected' : '' ?>>Ms.</option>
                </select>
                <label>Title <span class="text-danger">*</span></label>
                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <input type="text" placeholder="Enter Forename/Given Name" class="form-control" name="forename" value="<?php echo (!empty($requestdata->forename)) ? $requestdata->forename : '' ?>">
                <label>Forename/Given Name <span class="text-danger">*</span></label>
                @error('forename')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <input type="text" placeholder="Enter Forename 2" class="form-control" name="forename2" value="<?php echo (!empty($requestdata->forename2)) ? $requestdata->forename2 : '' ?>">
                <label>Forename 2 <span class="text-danger">*</span></label>
                @error('forename2')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <input type="text" placeholder="Surname/ Family Name " class="form-control" name="surname" value="<?php echo (!empty($requestdata->surname)) ? $requestdata->surname : '' ?>">
                <label>Surname/ Family Name <span class="text-danger">*</span></label>
                @error('surname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <input type="text" placeholder="Previous Surname/Family Name" class="form-control" name="previous_surname" value="<?php echo (!empty($requestdata->previous_surname)) ? $requestdata->previous_surname : '' ?>">
                <label>Previous Surname/Family Name<span class="text-danger">*</span></label>
                @error('previous_surname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <input type="text" placeholder="Date of Birth " class="form-control datepicker" name="dob" value="<?php echo (!empty($requestdata->dob)) ? $requestdata->dob : '' ?>">
                <label>Date of Birth <span class="text-danger">*</span></label>
                @error('dob')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <select class="form-control select2" name="gender">
                    <option value="">Select Gender</option>
                    <option value="Male" <?php echo (!empty($requestdata->gender) && $requestdata->gender == 'Male') ? 'selected' : '' ?>>Male</option>
                    <option value="Female" <?php echo (!empty($requestdata->gender) && $requestdata->gender == 'Female') ? 'selected' : '' ?>>Female</option>
                </select>
                <label>Gender <span class="text-danger">*</span></label>
                @error('gender')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>
    <h4 class="wizard-title">RESIDENCE AND NATIONALITY</h4>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <select class="form-control select2" name="country_of_birth">
                    <?php foreach ($countries as $country) { ?>
                        <option value="<?php echo $country->country_name; ?>" <?php echo (!empty($requestdata->country_of_birth) && $requestdata->country_of_birth == $country->country_name) ? 'selected' : '' ?>><?php echo $country->country_name ?></option>
                    <?php } ?>
                </select>
                <label>Country of Birth <span class="text-danger">*</span></label>
                @error('country_of_birth')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <select class="form-control select2" name="country_of_nationality">
                    <?php foreach ($countries as $country) { ?>
                        <option value="<?php echo $country->country_name; ?>" <?php echo (!empty($requestdata->country_of_nationality) && $requestdata->country_of_nationality == $country->country_name) ? 'selected' : '' ?>><?php echo $country->country_name ?></option>
                    <?php } ?>
                </select>
                <label>Country of Nationality <span class="text-danger">*</span></label>
                @error('country_of_nationality')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <select class="form-control select2" name="dual_nationality">
                    <?php foreach ($countries as $country) { ?>
                        <option value="<?php echo $country->country_name; ?>" <?php echo (!empty($requestdata->dual_nationality) && $requestdata->dual_nationality == $country->country_name) ? 'selected' : '' ?>><?php echo $country->country_name ?></option>
                    <?php } ?>
                </select>
                <label>Dual Nationality <span class="text-danger">*</span></label>
                @error('dual_nationality')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <select class="form-control select2" name="country_of_residence">
                    <?php foreach ($countries as $country) { ?>
                        <option value="<?php echo $country->country_name; ?>" <?php echo (!empty($requestdata->country_of_residence) && $requestdata->country_of_residence == $country->country_name) ? 'selected' : '' ?>><?php echo $country->country_name ?></option>
                    <?php } ?>
                </select>
                <label>Country of Residence <span class="text-danger">*</span></label>
                @error('country_of_residence')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>
    <h4 class="wizard-title">Other Information </h4>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <input type="text" placeholder="Disablity" class="form-control" name="disability" value="<?php echo (!empty($requestdata->disability)) ? $requestdata->disability : '' ?>">
                <label>Disablity <span class="text-danger">*</span></label>
                @error('disability')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <input type="text" placeholder="Ethnicity" class="form-control" name="ethnicity" value="<?php echo (!empty($requestdata->ethnicity)) ? $requestdata->ethnicity : '' ?>">
                <label>Ethnicity <span class="text-danger">*</span></label>
                @error('ethnicity')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>
    <h4 class="wizard-title">Contact Details</h4>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <input type="text" placeholder="Address Line 1 " class="form-control" name="addressline_1" value="<?php echo (!empty($requestdata->addressline_1)) ? $requestdata->addressline_1 : '' ?>">
                <label>Address Line 1 <span class="text-danger">*</span></label>
                @error('addressline_1')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <input type="text" placeholder="Address Line 2" class="form-control" name="addressline_2" value="<?php echo (!empty($requestdata->addressline_2)) ? $requestdata->addressline_2 : '' ?>">
                <label>Address Line 2 <span class="text-danger">*</span></label>
                @error('addressline_2')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label" >
                <input type="text" placeholder="City" class="form-control" name="city" value="<?php echo (!empty($requestdata->city)) ? $requestdata->city : '' ?>">
                <label>City <span class="text-danger">*</span></label>
                @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label" >
                <input type="text" placeholder="State" class="form-control" name="state" value="<?php echo (!empty($requestdata->state)) ? $requestdata->state : '' ?>">
                <label>State <span class="text-danger">*</span></label>
                @error('state')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <select class="form-control select2" name="country">
                    <?php foreach ($countries as $country) { ?>
                        <option value="<?php echo $country->country_name; ?>" <?php echo (!empty($requestdata->country) && $requestdata->country == $country->country_name) ? 'selected' : '' ?>><?php echo $country->country_name ?></option>
                    <?php } ?>
                </select>
                <label>Country <span class="text-danger">*</span></label>
                @error('country')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <div class="form-group floating-label enable-floating-label show-label">
                    <input type="text" placeholder="Postcode" class="form-control" name="postcode" value="<?php echo (!empty($requestdata->postcode)) ? $requestdata->postcode : '' ?>">
                    <label>Postcode <span class="text-danger">*</span></label>
                    @error('postcode')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <div class="form-group floating-label enable-floating-label show-label">
                    <input type="text" placeholder="Mobile No" class="form-control" name="mobile" value="<?php echo (!empty($requestdata->mobile)) ? $requestdata->mobile : '' ?>">
                    <label>Mobile No <span class="text-danger">*</span></label>
                    @error('mobile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <div class="form-group floating-label enable-floating-label show-label">
                    <input type="text" placeholder="Alternative Mobile No" class="form-control" name="alt_mobile" value="<?php echo (!empty($requestdata->alt_mobile)) ? $requestdata->alt_mobile : '' ?>">
                    <label>Alternative Mobile No <span class="text-danger">*</span></label>
                    @error('alt_mobile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <div class="form-group floating-label enable-floating-label show-label">
                    <input type="text" placeholder="Skype ID" class="form-control" name="skype_id" value="<?php echo (!empty($requestdata->skype_id)) ? $requestdata->skype_id : '' ?>">
                    <label>Skype ID<span class="text-danger">*</span></label>
                    @error('skype_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        
    </div>
</div>