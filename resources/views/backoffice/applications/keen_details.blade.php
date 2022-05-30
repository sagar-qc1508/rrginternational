<?php
$countries = DB::table('countries')->orderBy('country_name')->get();
$requestdata = (!empty(old())) ? (object)old() : (!empty(session()->get('application_data')) ? session()->get('application_data') : array());
?>
<div class="tab-pane" id="tab8">
    <h4 class="wizard-title">Next to keen details</h4>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <div class="form-group floating-label enable-floating-label show-label">
                    <input type="text" placeholder="Visa type " class="form-control" name="keen_full_name" value="<?php echo (!empty($requestdata->keen_full_name)) ? $requestdata->keen_full_name : '' ?>">
                    <label>Full Name <span class="text-danger">*</span></label>
                    @error('keen_full_name')
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
                    <input type="text" placeholder="Address" class="form-control" name="keen_address" value="<?php echo (!empty($requestdata->keen_address)) ? $requestdata->keen_address : '' ?>">
                    <label>Address <span class="text-danger">*</span></label>
                    @error('keen_address')
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
                    <input type="text" placeholder="Phone" class="form-control" name="keen_phone" value="<?php echo (!empty($requestdata->keen_phone)) ? $requestdata->keen_phone : '' ?>">
                    <label>Phone <span class="text-danger">*</span></label>
                    @error('keen_phone')
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
                    <input type="text" placeholder="Phone" class="form-control" name="keen_mobile" value="<?php echo (!empty($requestdata->keen_mobile)) ? $requestdata->keen_mobile : '' ?>">
                    <label>Mobile <span class="text-danger">*</span></label>
                    @error('keen_mobile')
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
                    <input type="text" placeholder="Phone" class="form-control" name="keen_relation" value="<?php echo (!empty($requestdata->keen_relation)) ? $requestdata->keen_relation : '' ?>">
                    <label>Relation <span class="text-danger">*</span></label>
                    @error('keen_relation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>