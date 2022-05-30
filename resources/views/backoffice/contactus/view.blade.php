@extends('layouts.dashboard')
@section('content')
<!-- page header -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">Contact Info</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page content -->
<div class="page-content-wrapper mt--45">
    <div class="card card-body">
        <div class="form-group row">
            <div class="col-md-2">
                <label>Student Name : </label>
            </div>
            <div class="col-md-9">
                <?php echo $contact->student_name; ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label>Email : </label>
            </div>
            <div class="col-md-9">
                <?php echo $contact->email; ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label>Phone Number : </label>
            </div>
            <div class="col-md-9">
                <?php echo $contact->phone_number; ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label>Subject : </label>
            </div>
            <div class="col-md-9">
                <?php echo $contact->subject; ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label>Message : </label>
            </div>
            <div class="col-md-9">
                <?php echo $contact->message; ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label>Attachment : </label>
            </div>
            <div class="col-md-9">
                <?php if (!empty($contact->attachment)) { ?>
                    <a href="<?php echo asset('storage/contactattachment/' . $contact->attachment) ?>" download="">Download</a>
                <?php } else {
                    echo '-';
                } ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label>Created At : </label>
            </div>
            <div class="col-md-9">
                <?php echo date('d-m-Y h:i A', strtotime($contact->created_at)); ?>
            </div>
        </div>
    </div>
</div>
@stop