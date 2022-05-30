<?php
$countries = DB::table('countries')->orderBy('country_name')->get();
?>
<?php
$requestdata = (!empty(old())) ? (object)old() : (!empty(session()->get('application_data')) ? session()->get('application_data') : array());
?>
<div class="tab-pane" id="tab7">
    <h4 class="wizard-title">Funding</h4>
    <p>How do you intend to pay the fees for your chosen course? Information on fees and funding can be found on our Fees Policy page.</p>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <div class="form-group floating-label enable-floating-label show-label">
                    <select name="source_of_funding" class="form-control">
                        <option value="Self or Family"  <?php echo (!empty($requestdata->source_of_funding) && $requestdata->source_of_funding == 'Self or Family') ? 'selected' : '' ?>>Self or Family</option>
                        <option value="Sponsor"  <?php echo (!empty($requestdata->source_of_funding) && $requestdata->source_of_funding == 'Sponsor') ? 'selected' : '' ?>>Sponsor</option>
                        <option value="Scholorship"  <?php echo (!empty($requestdata->source_of_funding) && $requestdata->source_of_funding == 'Scholorship') ? 'selected' : '' ?>>Scholorship</option>
                    </select>
                    <label>What is your likely source of funding? <span class="text-danger">*</span></label>
                    @error('source_of_funding')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>