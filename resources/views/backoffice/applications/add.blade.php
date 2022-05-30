@extends('layouts.dashboard')
@section('content')

<?php
$requestdata = (!empty(old())) ? (object)old() : array();
?>

<!-- page header -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">New Application</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content-wrapper mt--45">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <form class="form-horizontal" method="post" action="{{ route('backoffice.applications.add') }}" enctype="multipart/form-data">
                    <div id="rootwizard">
                        <div class="mb-0 b-0 pt-0">
                            <ul class="nav nav-pills bg-light nav-justified mb-3">
                                <li class="nav-item">
                                    <a href="#tab1" data-toggle="tab" class="nav-link rounded-0 py-3 <?php echo (empty(session()->get('nextstep'))  || session()->get('nextstep') < '1') ? 'active' : '' ?>" data-id="1">
                                        <span class="d-none d-sm-inline align-middle">Personal Detail</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab2" data-toggle="tab" class="nav-link rounded-0 py-3 <?php echo (session()->get('nextstep') == '2') ? 'active' : '' ?>" data-id="2">
                                        <span class="d-none d-sm-inline align-middle">Qualification</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab3" data-toggle="tab" class="nav-link rounded-0 py-3 <?php echo (session()->get('nextstep') == '3') ? 'active' : '' ?>" data-id="3">
                                        <span class="d-none d-sm-inline align-middle">English</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab4" data-toggle="tab" class="nav-link rounded-0 py-3 <?php echo (session()->get('nextstep') == '4') ? 'active' : '' ?>" data-id="4">
                                        <span class="d-none d-sm-inline align-middle">References</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab5" data-toggle="tab" class="nav-link rounded-0 py-3 <?php echo (session()->get('nextstep') == '5') ? 'active' : '' ?>" data-id="5">
                                        <span class="d-none d-sm-inline align-middle">Statement</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab6" data-toggle="tab" class="nav-link rounded-0 py-3 <?php echo (session()->get('nextstep') == '6') ? 'active' : '' ?>" data-id="6">
                                        <span class="d-none d-sm-inline align-middle">Right Study</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab7" data-toggle="tab" class="nav-link rounded-0 py-3 <?php echo (session()->get('nextstep') == '7') ? 'active' : '' ?>" data-id="7">
                                        <span class="d-none d-sm-inline align-middle">Funding</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab8" data-toggle="tab" class="nav-link rounded-0 py-3 <?php echo (session()->get('nextstep') == '8') ? 'active' : '' ?>" data-id="8">
                                        <span class="d-none d-sm-inline align-middle">Keen details</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab9" data-toggle="tab" class="nav-link rounded-0 py-3 <?php echo (session()->get('nextstep') == '9') ? 'active' : '' ?>" data-id="9">
                                        <span class="d-none d-sm-inline align-middle">Certificates</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab10" data-toggle="tab" class="nav-link rounded-0 py-3 <?php echo (session()->get('nextstep') == '10') ? 'active' : '' ?>" data-id="10">
                                        <span class="d-none d-sm-inline align-middle">Protection</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab11" data-toggle="tab" class="nav-link rounded-0 py-3 <?php echo (session()->get('nextstep') == '11') ? 'active' : '' ?>" data-id="11">
                                        <span class="d-none d-sm-inline align-middle">Declaration</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                @include('backoffice.applications.personaldetail')
                                <?php
                                if (session()->get('completedstep') >= '1') { ?>
                                    @include('backoffice.applications.qualifications')
                                <?php }
                                if (session()->get('completedstep') >= '2') { ?>
                                    @include('backoffice.applications.englishlanguage_qualification')
                                <?php }
                                if (session()->get('completedstep') >= '3') { ?>
                                    @include('backoffice.applications.references')
                                <?php }
                                if (session()->get('completedstep') >= '4') { ?>
                                    @include('backoffice.applications.personal_statements')
                                <?php }
                                if (session()->get('completedstep') >= '5') { ?>
                                    @include('backoffice.applications.right_study')
                                <?php }
                                if (session()->get('completedstep') >= '6') { ?>
                                    @include('backoffice.applications.funding')
                                <?php }
                                if (session()->get('completedstep') >= '7') { ?>
                                    @include('backoffice.applications.keen_details')
                                <?php }
                                if (session()->get('completedstep') >= '8') { ?>
                                    @include('backoffice.applications.academic_certificates')
                                <?php }
                                if (session()->get('completedstep') >= '9') { ?>
                                    @include('backoffice.applications.data_protection')
                                <?php }
                                if (session()->get('completedstep') >= '10') { ?>
                                    @include('backoffice.applications.declaraions')
                                <?php }
                                ?>
                                <ul class="list-inline wizard mb-0">
                                    <?php
                                    if (session()->get('completedstep') >= '1') { ?>
                                        <li class="previous list-inline-item disabled"><a href="#tab<?php echo session()->get('nextstep') - 1; ?>" data-id="<?php echo session()->get('nextstep') - 1; ?>" data-toggle="tab" class="btn btn-secondary">Previous</a>
                                        </li>
                                    <?php } ?>
                                    <li class="next list-inline-item float-right"><button class="btn btn-secondary" type="submit">Next</button></li>
                                </ul>
                            </div> <!-- tab-content -->
                        </div>
                        @csrf
                        <input type="hidden" id="step-field" name="step" value="<?php echo (session()->get('nextstep') >= '1') ? session()->get('nextstep') : '1' ?>" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    <?php if (!empty(session()->get('nextstep'))) { ?>
        $('.nav-pills a[href="#tab<?php echo session()->get('nextstep'); ?>"]').tab('show');
        $('.tab-pane').removeClass('active');
        $('.tab-pane#tab<?php echo session()->get('nextstep'); ?>').addClass('active');
    <?php } ?>

    $(document).on('click', '.addmore_qualification', function() {
        var html = '<div class="row">';
        html += '<div class="col-md-3">';
        html += '<div class="form-group floating-label enable-floating-label show-label">';
        html += '<input type="text" placeholder="Institution" class="form-control" name="institution[]">';
        html += '<label>Institution <span class="text-danger">*</span></label>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-3">';
        html += '<div class="form-group floating-label enable-floating-label show-label">';
        html += '<input type="text" placeholder="Qualification" class="form-control" name="qualification[]">';
        html += '<label>Qualification <span class="text-danger">*</span></label>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-3">';
        html += '<div class="form-group floating-label enable-floating-label show-label">';
        html += '<input type="text" placeholder="Subject" class="form-control" name="subject[]">';
        html += '<label>Subject <span class="text-danger">*</span></label>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-3">';
        html += '<div class="form-group floating-label enable-floating-label show-label">';
        html += '<input type="text" placeholder="Start Date " class="form-control" name="start_date[]">';
        html += '<label>Start Date <span class="text-danger">*</span></label>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-3">';
        html += '<div class="form-group floating-label enable-floating-label show-label">';
        html += '<input type="text" placeholder="End Date" class="form-control" name="end_date[]">';
        html += '<label>End Date <span class="text-danger">*</span></label>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-3">';
        html += '<button class="btn btn-danger remove_qualification" type="button">Remove</button>';
        html += '</div>';
        html += '</div>';
        $('#tab2').append(html);
    });
    $(document).on('click', '.remove_qualification', function() {
        $(this).closest('.row').remove();
    });

    $(document).on('click', '.ref_addmore', function() {
        var html = '<div class="row">';
        html += '<div class="col-md-3">';
        html += '<div class="form-group floating-label enable-floating-label show-label">';
        html += '<input type="text" placeholder="File Name" class="form-control" name="reference_file_name[]">';
        html += '<label>File Name <span class="text-danger">*</span></label>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-3">';
        html += '<div class="form-group floating-label enable-floating-label show-label">';
        html += '<input type="file" class="form-control" name="reference_file[]">';
        html += '<label>Upload File <span class="text-danger">*</span></label>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-3">';
        html += '<button class="btn btn-danger ref_remove" type="button">Remove</button>';
        html += '</div>';
        html += '</div>';
        $('#tab4').append(html);
    });

    $(document).on('click', '.ref_remove', function() {
        $(this).closest('.row').remove();
    });

    $(document).on('click', '.certificate_addmore', function() {
        var html = '<div class="row">';
        html += '<div class="col-md-3">';
        html += '<div class="form-group floating-label enable-floating-label show-label">';
        html += '<input type="text" placeholder="Certificate Name" class="form-control" name="certificate_name[]">';
        html += '<label>Certificate Name <span class="text-danger">*</span></label>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-3">';
        html += '<div class="form-group floating-label enable-floating-label show-label">';
        html += '<input type="file" class="form-control" name="certificate_file[]">';
        html += '<label>Upload File <span class="text-danger">*</span></label>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-3">';
        html += '<button class="btn btn-danger certificate_remove" type="button">Remove</button>';
        html += '</div>';
        html += '</div>';
        $('#tab9').append(html);
    });

    $(document).on('click', '.certificate_remove', function() {
        $(this).closest('.row').remove();
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        var btn = $(e.target);
        var id = parseInt(btn.attr('data-id')) - 1;
        $('.nav-pills a').removeClass('active');
        $('.nav-pills a[href="#tab' + btn.attr('data-id') + '"]').addClass('active');
        $('#step-field').val(btn.attr('data-id'));
        $('.previous a').attr('href', '#tab' + id);
        $('.previous a').attr('data-id', id);
        $('.previous a').removeClass('active');

    });
</script>
@stop