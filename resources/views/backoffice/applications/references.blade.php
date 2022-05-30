<?php
$countries = DB::table('countries')->orderBy('country_name')->get();
?>
<?php
$requestdata = (!empty(old())) ? (object)old() : (!empty(session()->get('application_data')) ? session()->get('application_data') : array());
?>
<div class="tab-pane" id="tab4">
    <h4 class="wizard-title">References</h4>
    <?php
    if (!empty($requestdata->reference_file_name)) {
        foreach ($requestdata->reference_file_name as $key => $reference_file_name) { ?>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group floating-label enable-floating-label show-label">
                        <input type="text" placeholder="File Name" class="form-control" name="reference_file_name[]" value="<?php echo $reference_file_name; ?>">
                        <label>File Name <span class="text-danger">*</span></label>
                        <?php if (!empty($errors->messages()["reference_file_name.$key"][0])) { ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo str_replace("reference_file_name.$key", 'File Name', $errors->messages()["reference_file_name.$key"][0]); ?></strong>
                            </span>
                        <?php }
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group floating-label enable-floating-label show-label">
                        <input type="file" class="form-control" name="reference_file[]" <?php echo (!empty($requestdata->reference_file[$key])) ? '' :'required=""' ?>>
                        <label>Upload File <span class="text-danger">*</span></label>
                        <?php if (!empty($errors->messages()["reference_file.$key"][0])) { ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo str_replace("The reference file.$key", 'File', $errors->messages()["reference_file.$key"][0]); ?></strong>
                            </span>
                        <?php }
                        ?>
                        <?php if (!empty($requestdata->reference_file[$key])) { ?>
                            <a href="{{ asset('storage/applications/'.$requestdata->reference_file[$key]) }}" target="_blank">Download</a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <?php if ($key == 0) { ?>
                        <button class="btn btn-primary ref_addmore" type="button">Add More</button>
                    <?php } else { ?>
                        <button class="btn btn-danger ref_remove" type="button">Remove</button>
                    <?php } ?>
                </div>
            </div>
        <?php }
    } else { ?>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group floating-label enable-floating-label show-label">
                    <input type="text" placeholder="File Name" class="form-control" name="reference_file_name[]">
                    <label>File Name <span class="text-danger">*</span></label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group floating-label enable-floating-label show-label">
                    <input type="file" class="form-control" name="reference_file[]">
                    <label>Upload File <span class="text-danger">*</span></label>
                </div>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary ref_addmore" type="button">Add More</button>
            </div>
        </div>
    <?php } ?>
</div>