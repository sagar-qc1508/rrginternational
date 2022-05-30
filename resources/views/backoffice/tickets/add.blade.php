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
                    <h3 class="mb-1 font-weight-bold">New Ticket</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page content -->
<div class="page-content-wrapper mt--45">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <form class="form-horizontal" method="post" action="{{ route('backoffice.supporttickets.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group floating-label enable-floating-label show-label">
                        <label>Student: <i class="text-danger">*</i></label>
                        <select class="form-control" name="student_id" data-toggle="select2">
                            <?php foreach ($students as $student) { ?>
                                <option value="<?php echo $student->user_id; ?>" <?php echo ((!empty($requestdata->student_id)) && $requestdata->student_id == $student->user_id) ? 'selected' : '' ?>><?php echo $student->fullname; ?></option>
                            <?php } ?>
                        </select>
                        @error('department')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group floating-label enable-floating-label show-label">
                        <label>Department: <i class="text-danger">*</i></label>
                        <select class="form-control" name="department" data-toggle="select2">
                            <?php foreach ($departments as $department) { ?>
                                <option value="<?php echo $department->department_id; ?>" <?php echo ((!empty($requestdata->department)) && $requestdata->department == $department->department_id) ? 'selected' : '' ?>><?php echo $department->department_name; ?></option>
                            <?php } ?>
                        </select>
                        @error('department')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group floating-label enable-floating-label show-label">
                        <label>Subject: <i class="text-danger">*</i></label>
                        <input type="text" class="form-control" name="subject" value="<?php echo (!empty($requestdata->subject)) ? $requestdata->subject : '' ?>" />
                        @error('subject')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group floating-label enable-floating-label show-label">
                        <label>Detail: <i class="text-danger">*</i></label>
                        <textarea name="detail" class="form-control"><?php echo (!empty($requestdata->detail)) ? $requestdata->detail : '' ?></textarea>
                        @error('detail')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group floating-label enable-floating-label show-label">
                        <label>Priority: <i class="text-danger">*</i></label>
                        <select class="form-control" name="priority" data-toggle="select2">
                            <option value="Low" <?php echo (!empty($requestdata->priority) &&  $requestdata->priority == 'Low') ? 'selected' : '' ?>>Low</option>
                            <option value="Medium" <?php echo (!empty($requestdata->priority) &&  $requestdata->priority == 'Medium') ? 'selected' : '' ?>>Medium</option>
                            <option value="High" <?php echo (!empty($requestdata->priority) &&  $requestdata->priority == 'High') ? 'selected' : '' ?>>High</option>
                        </select>
                        @error('priority')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group floating-label enable-floating-label show-label">
                        <label>Attachment: </label>
                        <input type="file" class="form-control" name="attachment"/>
                        @error('attachment')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
@section('script')
<script>
    $(document).on('change', '#document_type', function() {
        if ($(this).val() == 'Others') {
            $('#other_documenttype').removeClass('d-none');
        } else {
            $('#other_documenttype').addClass('d-none');
        }
    });
</script>
@stop