@extends('layouts.dashboard')
@section('content')

<?php
$countries = DB::table('countries')->orderBy('country_name')->get();
$requestdata = (!empty(old())) ? (object)old() : (!empty(session()->get('application_data')) ? session()->get('application_data') : array());
?>
<!-- page header -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">Preview Application</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content-wrapper mt--45" id="preview">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <div class="tab-pane active" id="tab1">
                    <h4 class="wizard-title">Personal Details</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Title <span class="text-danger">*</span></label>
                                <p><?php echo $requestdata->title; ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Forename/Given Name <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->forename)) ? $requestdata->forename : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Forename 2 <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->forename2)) ? $requestdata->forename2 : '' ?></p>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Surname/ Family Name <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->surname)) ? $requestdata->surname : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Previous Surname/Family Name<span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->previous_surname)) ? $requestdata->previous_surname : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Date of Birth <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->dob)) ? $requestdata->dob : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Gender <span class="text-danger">*</span></label>
                                <p><?php echo $requestdata->gender; ?></p>
                            </div>
                        </div>
                    </div>
                    <h4 class="wizard-title">Residence and Nationality</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Country of Birth <span class="text-danger">*</span></label>
                                <p><?php echo $requestdata->country_of_birth; ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Country of Nationality <span class="text-danger">*</span></label>
                                <p><?php echo $requestdata->country_of_nationality; ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Dual Nationality <span class="text-danger">*</span></label>
                                <p><?php echo $requestdata->dual_nationality; ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Country of Residence <span class="text-danger">*</span></label>
                                <p><?php echo $requestdata->country_of_residence; ?></p>
                            </div>
                        </div>
                    </div>
                    <h4 class="wizard-title">Other Information </h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Disablity <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->disability)) ? $requestdata->disability : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Ethnicity <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->ethnicity)) ? $requestdata->ethnicity : '' ?></p>
                            </div>
                        </div>
                    </div>
                    <h4 class="wizard-title">Contact Details</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Address Line 1 <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->addressline_1)) ? $requestdata->addressline_1 : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Address Line 2 <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->addressline_2)) ? $requestdata->addressline_2 : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>City <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->city)) ? $requestdata->city : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>State <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->state)) ? $requestdata->state : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Country <span class="text-danger">*</span></label>
                                <p><?php echo $requestdata->country; ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Postcode <span class="text-danger">*</span></label>
                                    <p><?php echo (!empty($requestdata->postcode)) ? $requestdata->postcode : '' ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Mobile No <span class="text-danger">*</span></label>
                                    <p><?php echo (!empty($requestdata->mobile)) ? $requestdata->mobile : '' ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Alternative Mobile No <span class="text-danger">*</span></label>
                                    <p><?php echo (!empty($requestdata->alt_mobile)) ? $requestdata->alt_mobile : '' ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Skype ID<span class="text-danger">*</span></label>
                                    <p><?php echo (!empty($requestdata->skype_id)) ? $requestdata->skype_id : '' ?></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane" id="tab2">
                    <h4 class="wizard-title">Qualification</h4>
                    <?php if (!empty($requestdata->institution)) {
                        foreach ($requestdata->institution as $key => $institution) { ?>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Institution <span class="text-danger">*</span></label>
                                        <p><?php echo $institution; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Qualification <span class="text-danger">*</span></label>
                                        <p><?php echo $requestdata->qualification[$key]; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Subject <span class="text-danger">*</span></label>
                                        <p><?php echo $requestdata->subject[$key]; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Start Date <span class="text-danger">*</span></label>
                                        <p><?php echo $requestdata->start_date[$key]; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>End Date <span class="text-danger">*</span></label>
                                        <p><?php echo $requestdata->end_date[$key]; ?></p>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
                <div class="tab-pane" id="tab3">
                    <h4 class="wizard-title">English Qualification</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Type of Qualification <span class="text-danger">*</span></label>
                                <p><?php echo $requestdata->qualification_type; ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Test Report Form Number <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->test_report_form_no)) ? $requestdata->test_report_form_no : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Date of Test <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->date_of_test)) ? $requestdata->date_of_test : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Listening Score <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->listening_score)) ? $requestdata->listening_score : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Speaking Score <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->speaking_score)) ? $requestdata->speaking_score : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Reading Score <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->reading_score)) ? $requestdata->reading_score : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Writing Score <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->writing_score)) ? $requestdata->writing_score : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Overall Score <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->overall_score)) ? $requestdata->overall_score : '' ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab4">
                    <h4 class="wizard-title">References</h4>
                    <?php
                    if (!empty($requestdata->reference_file_name)) {
                        foreach ($requestdata->reference_file_name as $key => $reference_file_name) { ?>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>File Name <span class="text-danger">*</span></label>
                                        <p><?php echo $reference_file_name; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>File <span class="text-danger">*</span></label>
                                        <?php if (!empty($requestdata->reference_file[$key])) { ?>
                                            <p><a href="{{ asset('storage/applications/'.$requestdata->reference_file[$key]) }}" target="_blank"">Download</a></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
                <div class="tab-pane" id="tab5">
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Personal statement <span class="text-danger">*</span></label>
                                <?php if (!empty($requestdata->personal_statement)) { ?>
                                    <p><a href="{{ asset('storage/applications/'.$requestdata->personal_statement) }}" target="_blank"">Download</a></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab6">
                    <h4 class="wizard-title">Right to Study</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Passport Number <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->passport_number)) ? $requestdata->passport_number : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Date of Issue <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->date_of_issue)) ? $requestdata->date_of_issue : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Date of Expiry <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->date_of_expiry)) ? $requestdata->date_of_expiry : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Country of Issue <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->country_of_issue)) ? $requestdata->country_of_issue : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Place of Birth <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->place_of_birth)) ? $requestdata->place_of_birth : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Do you require visa to study in UK? <span class="text-danger">*</span></label>
                                <p><?php echo $requestdata->require_uk_visa; ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Do you have a current passport? <span class="text-danger">*</span></label>
                                <p><?php echo $requestdata->have_current_passport; ?></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Have you been living in the UK or EU, EEA, Switzerland AND/OR Relevant Overseas Territories for three years prior to the start of your course? <span class="text-danger">*</span></label>
                                <p><?php echo $requestdata->have_living_in_uk; ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Have you had any UK visas issued against this passport? <span class="text-danger">*</span></label>
                                <p><?php echo $requestdata->have_uk_visa; ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Visa type <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->visa_type)) ? $requestdata->visa_type : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Visa number <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->visa_number)) ? $requestdata->visa_number : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Start date <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->visa_start_date)) ? $requestdata->visa_start_date : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>End date <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->visa_end_date)) ? $requestdata->visa_end_date : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Visa File <span class="text-danger">*</span></label>
                                @error('visa_file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab7">
                    <h4 class="wizard-title">Funding</h4>
                    <p>How do you intend to pay the fees for your chosen course? Information on fees and funding can be found on our Fees Policy page.</p>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>What is your likely source of funding? <span class="text-danger">*</span></label>
                                <p><?php echo $requestdata->source_of_funding; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab8">
                    <h4 class="wizard-title">Keen Details</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Full Name <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->keen_full_name)) ? $requestdata->keen_full_name : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Address <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->keen_address)) ? $requestdata->keen_address : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Phone <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->keen_phone)) ? $requestdata->keen_phone : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Mobile <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->keen_mobile)) ? $requestdata->keen_mobile : '' ?></p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Relation <span class="text-danger">*</span></label>
                                <p><?php echo (!empty($requestdata->keen_relation)) ? $requestdata->keen_relation : '' ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab9">
                    <h4 class="wizard-title">Academic Certificates</h4>
                    <?php if (!empty($requestdata->certificate_name)) {
                        foreach ($requestdata->certificate_name as $key => $certificate_name) { ?>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>File Name <span class="text-danger">*</span></label>
                                        <p><?php echo $certificate_name; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>File <span class="text-danger">*</span></label>
                                        <?php if (!empty($requestdata->certificate_file[$key])) { ?>
                                            <p><a href="{{ asset('storage/applications/'.$requestdata->certificate_file[$key]) }}" target="_blank"">Download</a></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
                <div class="text-center">
                    <a href="{{ route('admin.applications.saveapplication') }}">SUBMIT APPLICATION</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop