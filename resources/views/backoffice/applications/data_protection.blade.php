<?php
$requestdata = (!empty(old())) ? (object)old() : (!empty(session()->get('application_data')) ? session()->get('application_data') : array());
?>
<div class="tab-pane" id="tab10">
    <h4 class="wizard-title">Data Protection</h4>
    <p>By submitting your application, you agree to be bound by the terms and conditions of a contract between you and RRG, including agreeing to adhere to all regulations, policies and procedures. Before you submit, you must agree to the statements below to indicate that you have read, and understood important information relating to your application.</p>
    <p>I confirm that the information given in this form is true, complete and accurate and that no information requested or other material information has been omitted. I confirm that I have read the Data Protection Statement.</p>
    <p>You will not be able to change your application once you have submitted it. We will send you an email confirming submission of your application.</p>
    <div class="form-group">
        <input type="checkbox" name="data_protection" /> You must accept the terms and conditions. Check all terms and conditions
        @error('data_protection')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>