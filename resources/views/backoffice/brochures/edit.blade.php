@extends('layouts.admin')
@section('content')
<?php
$requestdata = (!empty(old())) ? (object)old() : $brochure;
?>
<!-- page header -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">Update Brochure</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content-wrapper mt--45">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <form class="form-horizontal" method="post" action="{{ route('backoffice.brochures.update',$brochure->brochure_id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Brochure Name: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="brochure_name" class="form-control form-control-sm" placeholder="Brochure Name" value="{{ $requestdata->brochure_name ?? '' }}">
                            @error('brochure_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Upload: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="file" name="upload_file" class="form-control form-control-sm">
                            @error('upload_file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <p><?php echo $brochure->upload_file;?></p>
                                               
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