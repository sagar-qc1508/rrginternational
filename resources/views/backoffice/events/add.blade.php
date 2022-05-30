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
                    <h3 class="mb-1 font-weight-bold">New Event</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content-wrapper mt--45">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <form class="form-horizontal" method="post" action="{{ route('backoffice.events.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Event Title: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="event_title" class="form-control form-control-sm" placeholder="Event Title" value="{{ $requestdata->event_title ?? '' }}">
                            @error('event_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Event Date: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <textarea type="text" name="description" class="form-control form-control-sm" placeholder="Event Description">{{ $requestdata->description ?? '' }}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Image: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control form-control-sm">
                            @error('profile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Event Date: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="event_date" class="form-control form-control-sm datepicker" placeholder="Event Date" value="{{ $requestdata->event_date ?? '' }}">
                            @error('event_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop