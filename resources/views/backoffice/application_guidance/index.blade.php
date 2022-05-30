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
                    <h3 class="mb-1 font-weight-bold">Application Guidance</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page content -->
<div class="page-content-wrapper mt--45">
    <div class="row">
        <div class="col-md-5">
            <div class="card card-body">
                <form class="form-horizontal" method="post" action="{{ route('backoffice.application_guidance.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 control-label mb-2">Title: <i class="text-danger">*</i></label>
                        <div class="col-sm-12">
                            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $requestdata->title ?? '' }}">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Detail: <i class="text-danger">*</i></label>
                        <div class="col-sm-12">
                            <textarea type="text" name="detail" class="form-control form-control-sm editor" placeholder="Detail">{{ $requestdata->detail ?? '' }}</textarea>
                            @error('detail')
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
        <div class="col-md-7">
            <div class="card card-body">
                <?php if ($guidances->count() > 0) { ?>
                    <div class="table-responsive">
                        <table class="table table-bordered  table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>@sortablelink('title','Title')</th>
                                    <th>@sortablelink('detail','Detail')</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($guidances as $key => $guidance) {
                                ?>
                                    <tr>
                                        <td><?php echo $guidances->firstItem() + $key; ?></td>
                                        <td><?php echo $guidance->title; ?></td>
                                        <td><?php echo $guidance->detail; ?></td>
                                        <td>
                                            <a class="edit-detail" href="{{ route('backoffice.application_guidance.edit',$guidance->id) }}">Edit</a><a href="{{ route('backoffice.application_guidance.delete',$guidance->id) }}" class="del-color-red delete" data-module-name="Guidance" data-name-value="{{ $guidance->title }}">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    {!! $guidances->appends(\Request::except('page'))->render() !!}
                <?php } else { ?>
                    <div class="no-record text-center">
                        <img src="{{ asset('assets/img/no-record.png') }}" class="img-responsive norecordimg" />
                        <h4>No record found</h4>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
@stop