<?php
$countries = DB::table('countries')->orderBy('country_name')->get();
?>
<?php
$requestdata = (!empty(old())) ? (object)old() : (!empty(session()->get('application_data')) ? session()->get('application_data') : array());
?>
<div class="tab-pane" id="tab6">
    <h4 class="wizard-title">Right to Study</h4>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <div class="form-group floating-label enable-floating-label show-label">
                    <input type="text" placeholder="Passport Number" class="form-control" name="passport_number" value="<?php echo (!empty($requestdata->passport_number)) ? $requestdata->passport_number : '' ?>">
                    <label>Passport Number <span class="text-danger">*</span></label>
                    @error('passport_number')
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
                    <input type="text" placeholder="Date of Issue" class="form-control datepicker" name="date_of_issue" value="<?php echo (!empty($requestdata->date_of_issue)) ? $requestdata->date_of_issue : '' ?>">
                    <label>Date of Issue <span class="text-danger">*</span></label>
                    @error('date_of_issue')
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
                    <input type="text" placeholder="Date of Expiry" class="form-control datepicker" name="date_of_expiry" value="<?php echo (!empty($requestdata->date_of_expiry)) ? $requestdata->date_of_expiry : '' ?>">
                    <label>Date of Expiry <span class="text-danger">*</span></label>
                    @error('date_of_expiry')
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
                    <input type="text" placeholder="Country of Issue" class="form-control datepicker" name="country_of_issue" value="<?php echo (!empty($requestdata->country_of_issue)) ? $requestdata->country_of_issue : '' ?>">
                    <label>Country of Issue <span class="text-danger">*</span></label>
                    @error('country_of_issue')
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
                    <input type="text" placeholder="Place of Birth" class="form-control datepicker" name="place_of_birth" value="<?php echo (!empty($requestdata->place_of_birth)) ? $requestdata->place_of_birth : '' ?>">
                    <label>Place of Birth <span class="text-danger">*</span></label>
                    @error('place_of_birth')
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
                    <select name="require_uk_visa" class="form-control">
                        <option value="Yes" <?php echo (!empty($requestdata->require_uk_visa) && $requestdata->require_uk_visa == 'Yes') ? 'selected' : '' ?>>Yes</option>
                        <option value="No" <?php echo (!empty($requestdata->require_uk_visa) && $requestdata->require_uk_visa == 'No') ? 'selected' : '' ?>>No</option>
                    </select>
                    <label>Do you require visa to study in UK? <span class="text-danger">*</span></label>
                    @error('require_uk_visa')
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
                    <select name="have_current_passport" class="form-control">
                        <option value="Yes" <?php echo (!empty($requestdata->have_current_passport) && $requestdata->have_current_passport == 'Yes') ? 'selected' : '' ?>>Yes</option>
                        <option value="No" <?php echo (!empty($requestdata->have_current_passport) && $requestdata->have_current_passport == 'No') ? 'selected' : '' ?>>No</option>
                    </select>
                    <label>Do you have a current passport? <span class="text-danger">*</span></label>
                    @error('have_current_passport')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group floating-label enable-floating-label show-label">
                <div class="form-group floating-label enable-floating-label show-label">
                    <select name="have_living_in_uk" class="form-control">
                        <option value="Yes" <?php echo (!empty($requestdata->have_living_in_uk) && $requestdata->have_living_in_uk == 'Yes') ? 'selected' : '' ?>>Yes</option>
                        <option value="No" <?php echo (!empty($requestdata->have_living_in_uk) && $requestdata->have_living_in_uk == 'No') ? 'selected' : '' ?>>No</option>
                    </select>
                    <label>Have you been living in the UK or EU, EEA, Switzerland AND/OR Relevant Overseas Territories for three years prior to the start of your course? <span class="text-danger">*</span></label>
                    @error('have_living_in_uk')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group floating-label enable-floating-label show-label">
                <div class="form-group floating-label enable-floating-label show-label">
                    <select name="have_uk_visa" class="form-control">
                        <option value="Yes" <?php echo (!empty($requestdata->have_uk_visa) && $requestdata->have_uk_visa == 'Yes') ? 'selected' : '' ?>>Yes</option>
                        <option value="No" <?php echo (!empty($requestdata->have_uk_visa) && $requestdata->have_uk_visa == 'No') ? 'selected' : '' ?>>No</option>
                    </select>
                    <label>Have you had any UK visas issued against this passport? <span class="text-danger">*</span></label>
                    @error('have_uk_visa')
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
                    <input type="text" placeholder="Visa type " class="form-control" name="visa_type" value="<?php echo (!empty($requestdata->visa_type)) ? $requestdata->visa_type : '' ?>">
                    <label>Visa type <span class="text-danger">*</span></label>
                    @error('visa_type')
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
                    <input type="text" placeholder="Visa number" class="form-control" name="visa_number" value="<?php echo (!empty($requestdata->visa_number)) ? $requestdata->visa_number : '' ?>">
                    <label>Visa number <span class="text-danger">*</span></label>
                    @error('visa_number')
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
                    <input type="text" placeholder="Start date" class="form-control" name="visa_start_date" value="<?php echo (!empty($requestdata->visa_start_date)) ? $requestdata->visa_start_date : '' ?>">
                    <label>Start date <span class="text-danger">*</span></label>
                    @error('visa_start_date')
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
                    <input type="text" placeholder="End date" class="form-control" name="visa_end_date" value="<?php echo (!empty($requestdata->visa_end_date)) ? $requestdata->visa_end_date : '' ?>">
                    <label>End date <span class="text-danger">*</span></label>
                    @error('visa_end_date')
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
                    <input type="file" class="form-control" name="visa_file">
                    <label>Upload your visa <span class="text-danger">*</span></label>
                    @error('visa_file')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>