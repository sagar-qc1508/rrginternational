<?php
$countries = DB::table('countries')->orderBy('country_name')->get();
$requestdata = (!empty(old())) ? (object)old() : (!empty(session()->get('application_data')) ? session()->get('application_data') : array());
?>
<div class="tab-pane" id="tab3">
    <h4 class="wizard-title">English Language Qualification</h4>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <select class="form-control select2" name="qualification_type">
                    <option value="IELTS" <?php echo (!empty($requestdata->qualification_type) && $requestdata->qualification_type == 'IELTS') ? 'selected' : '' ?>>IELTS</option>
                    <option value="TOEFL" <?php echo (!empty($requestdata->qualification_type) && $requestdata->qualification_type == 'TOEFL') ? 'selected' : '' ?>>TOEFL</option>
                    <option value="GRE" <?php echo (!empty($requestdata->qualification_type) && $requestdata->qualification_type == 'GRE') ? 'selected' : '' ?>>GRE</option>
                    <option value="UKVI " <?php echo (!empty($requestdata->qualification_type) && $requestdata->qualification_type == 'UKVI ') ? 'selected' : '' ?>>UKVI </option>
                </select>
                <label>Type of Qualification  <span class="text-danger">*</span></label>
                @error('qualification_type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <div class="form-group floating-label enable-floating-label show-label">
                    <input type="text" placeholder="Test Report Form Number " class="form-control" name="test_report_form_no" value="<?php echo (!empty($requestdata->test_report_form_no)) ? $requestdata->test_report_form_no : '' ?>">
                    <label>Test Report Form Number <span class="text-danger">*</span></label>
                    @error('test_report_form_no')
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
                    <input type="text" placeholder="Date of Test" class="form-control datepicker" name="date_of_test" value="<?php echo (!empty($requestdata->date_of_test)) ? $requestdata->date_of_test : '' ?>">
                    <label>Date of Test <span class="text-danger">*</span></label>
                    @error('date_of_test')
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
                    <input type="text" placeholder="Listening Score" class="form-control" name="listening_score" value="<?php echo (!empty($requestdata->listening_score)) ? $requestdata->listening_score : '' ?>">
                    <label>Listening Score <span class="text-danger">*</span></label>
                    @error('listening_score')
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
                    <input type="text" placeholder="Speaking Score" class="form-control" name="speaking_score" value="<?php echo (!empty($requestdata->speaking_score)) ? $requestdata->speaking_score : '' ?>">
                    <label>Speaking Score <span class="text-danger">*</span></label>
                    @error('speaking_score')
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
                    <input type="text" placeholder="Reading Score" class="form-control" name="reading_score" value="<?php echo (!empty($requestdata->reading_score)) ? $requestdata->reading_score : '' ?>">
                    <label>Reading Score <span class="text-danger">*</span></label>
                    @error('reading_score')
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
                    <input type="text" placeholder="Writing Score" class="form-control" name="writing_score" value="<?php echo (!empty($requestdata->writing_score)) ? $requestdata->writing_score : '' ?>">
                    <label>Writing Score <span class="text-danger">*</span></label>
                    @error('writing_score')
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
                    <input type="text" placeholder="Overall Score" class="form-control" name="overall_score" value="<?php echo (!empty($requestdata->overall_score)) ? $requestdata->overall_score : '' ?>">
                    <label>Overall Score <span class="text-danger">*</span></label>
                    @error('overall_score')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>