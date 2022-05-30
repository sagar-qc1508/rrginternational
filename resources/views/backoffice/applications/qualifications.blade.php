<?php
$countries = DB::table('countries')->orderBy('country_name')->get();
$requestdata = (!empty(old())) ? (object)old() : (!empty(session()->get('application_data')) ? session()->get('application_data') : array());
?>
<div class="tab-pane" id="tab2">
    <h4 class="wizard-title">Qualification</h4>
    <?php if (!empty($requestdata->institution)) {
        foreach ($requestdata->institution as $key => $institution) { ?>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group floating-label enable-floating-label show-label">
                        <input type="text" placeholder="Institution" class="form-control" name="institution[]" value="<?php echo $institution; ?>">
                        <label>Institution <span class="text-danger">*</span></label>
                        <?php if (!empty($errors->messages()["institution.$key"][0])) { ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo str_replace("institution.$key", 'Institution', $errors->messages()["institution.$key"][0]); ?></strong>
                            </span>
                        <?php }
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group floating-label enable-floating-label show-label">
                        <input type="text" placeholder="Qualification" class="form-control" name="qualification[]" value="<?php echo $requestdata->qualification[$key]; ?>">
                        <label>Qualification <span class="text-danger">*</span></label>
                        <?php if (!empty($errors->messages()["qualification.$key"][0])) { ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo str_replace("qualification.$key", 'Qualification', $errors->messages()["qualification.$key"][0]); ?></strong>
                            </span>
                        <?php }
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group floating-label enable-floating-label show-label">
                        <input type="text" placeholder="Subject" class="form-control" name="subject[]" value="<?php echo $requestdata->subject[$key]; ?>">
                        <label>Subject <span class="text-danger">*</span></label>
                        <?php if (!empty($errors->messages()["subject.$key"][0])) { ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo str_replace("subject.$key", 'Subject', $errors->messages()["subject.$key"][0]); ?></strong>
                            </span>
                        <?php }
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group floating-label enable-floating-label show-label">
                        <input type="text" placeholder="Start Date " class="form-control" name="start_date[]" value="<?php echo $requestdata->start_date[$key]; ?>">
                        <label>Start Date <span class="text-danger">*</span></label>
                        <?php if (!empty($errors->messages()["start_date.$key"][0])) { ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo str_replace("start_date.$key", 'Start Date', $errors->messages()["start_date.$key"][0]); ?></strong>
                            </span>
                        <?php }
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group floating-label enable-floating-label show-label">
                        <input type="text" placeholder="End Date" class="form-control" name="end_date[]" value="<?php echo $requestdata->end_date[$key]; ?>">
                        <label>End Date <span class="text-danger">*</span></label>
                        <?php if (!empty($errors->messages()["end_date.$key"][0])) { ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo str_replace("end_date.$key", 'End Date', $errors->messages()["end_date.$key"][0]); ?></strong>
                            </span>
                        <?php }
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <?php if ($key == 0) { ?>
                        <button class="btn btn-primary addmore_qualification" type="button">Add More</button>
                    <?php } else { ?>
                        <button class="btn btn-danger remove_qualification" type="button">Remove</button>
                    <?php } ?>
                </div>
            </div>
        <?php }
    } else { ?>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group floating-label enable-floating-label show-label">
                    <input type="text" placeholder="Institution" class="form-control" name="institution[]">
                    <label>Institution <span class="text-danger">*</span></label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group floating-label enable-floating-label show-label">
                    <input type="text" placeholder="Qualification" class="form-control" name="qualification[]">
                    <label>Qualification <span class="text-danger">*</span></label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group floating-label enable-floating-label show-label">
                    <input type="text" placeholder="Subject" class="form-control" name="subject[]">
                    <label>Subject <span class="text-danger">*</span></label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group floating-label enable-floating-label show-label">
                    <input type="text" placeholder="Start Date " class="form-control" name="start_date[]">
                    <label>Start Date <span class="text-danger">*</span></label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group floating-label enable-floating-label show-label">
                    <input type="text" placeholder="End Date" class="form-control" name="end_date[]">
                    <label>End Date <span class="text-danger">*</span></label>
                </div>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary addmore_qualification" type="button">Add More</button>
            </div>
        </div>
    <?php } ?>
</div>