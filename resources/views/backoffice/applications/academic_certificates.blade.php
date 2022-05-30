<?php
$countries = DB::table('countries')->orderBy('country_name')->get();
?>
<?php
$requestdata = (!empty(old())) ? (object)old() : (!empty(session()->get('application_data')) ? session()->get('application_data') : array());
?>
<div class="tab-pane" id="tab9">
    <h4 class="wizard-title">Academic Certificates</h4>
    <?php if (!empty($requestdata->certificate_name)) {
        foreach ($requestdata->certificate_name as $key => $certificate_name) { ?>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group floating-label enable-floating-label show-label">
                        <input type="text" placeholder="Certificate Name" class="form-control" name="certificate_name[]" value="<?php echo $certificate_name; ?>">
                        <label>Certificate Name <span class="text-danger">*</span></label>
                        <?php if (!empty($errors->messages()["certificate_name.$key"][0])) { ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo str_replace("certificate_name.$key", 'Certificate Name', $errors->messages()["certificate_name.$key"][0]); ?></strong>
                            </span>
                        <?php }
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group floating-label enable-floating-label show-label">
                        <input type="file" class="form-control" name="certificate_file[]" <?php echo (!empty($requestdata->certificate_file[$key])) ? '' : 'required=""' ?>>
                        <label>Upload File <span class="text-danger">*</span></label>
                        <?php if (!empty($errors->messages()["certificate_file.$key"][0])) { ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo str_replace("The certificate file.$key", 'File', $errors->messages()["certificate_file.$key"][0]); ?></strong>
                            </span>
                        <?php }
                        ?>
                        <?php if (!empty($requestdata->reference_file[$key])) { ?>
                            <a href="{{ asset('storage/applications/'.$requestdata->certificate_file[$key]) }}" target="_blank"">Download</a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <?php if ($key == 0) { ?>
                        <button class="btn btn-primary certificate_addmore" type="button">Add More</button>
                    <?php } else { ?>
                        <button class="btn btn-danger certificate_remove" type="button">Remove</button>
                    <?php } ?>
                </div>
            </div>
        <?php }
    } else { ?>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group floating-label enable-floating-label show-label">
                    <input type="text" placeholder="Certificate Name" class="form-control" name="certificate_name[]">
                    <label>Certificate Name <span class="text-danger">*</span></label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group floating-label enable-floating-label show-label">
                    <input type="file" class="form-control" name="certificate_file[]">
                    <label>Upload File <span class="text-danger">*</span></label>
                </div>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary certificate_addmore" type="button">Add More</button>
            </div>
        </div>
    <?php } ?>
</div>