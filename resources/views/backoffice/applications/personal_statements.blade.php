<?php
$countries = DB::table('countries')->orderBy('country_name')->get();
?>
<?php
$requestdata = (!empty(old())) ? (object)old() : (!empty(session()->get('application_data')) ? session()->get('application_data') : array());
?>
<div class="tab-pane" id="tab5">
    <p>Your statement must be a minimum of 500 words in length, (around half a page of A4) and include the following information in support of your application:</p>
    <ul>
        <li>Why you are applying for this particular course</li>
        <li>What do you hope to achieve through studying this course</li>
        <li>How your past / current studies / experience supports your application</li>
        <li>How this course is relevant to your future career / academic goals</li>
        <li>If you are applying for a course that requires work experience, you should show how you meet this requirement</li>
        <li>Any additional information that you think is relevant to your application</li>
    </ul>
    <p>You may find this UCAS personal statement writing tool a useful guide.</p>
    <p>When assessing your statement, we will take into account your use of English including spelling, grammar, punctuation, sentence and paragraph structure so you may find it helpful to spend some time preparing it in advance. Before you write your personal statement, we advise you to refer to the full course specification which can be found at our website as this contains information you will need.</p>
    <p>If you are an international student, and require a Tier 4 visa to study in the UK, your statement will be used to assess your genuine intention to study, in line with UK Visas and Immigration's Tier 4 credibility requirements. You must include your reasons for choosing this particular course, show your understanding of what the course involves, its content as well as specific modules.</p>
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="form-group floating-label enable-floating-label show-label">
                <input type="file" class="form-control" name="personal_statement">
                <label>Upload File <span class="text-danger">*</span></label>
                @error('personal_statement')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <?php if (!empty($requestdata->personal_statement)) { ?>
                    <a href="{{ asset('storage/applications/'.$requestdata->personal_statement) }}" target="_blank">Download</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>