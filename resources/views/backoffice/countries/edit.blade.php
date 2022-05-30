@extends('layouts.dashboard')
@section('content')
<?php
$requestdata = (!empty(old())) ? (object)old() : $country;
?>
<!-- page header -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">Update Country</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-content-wrapper mt--45">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <form class="form-horizontal" method="post" action="{{ route('backoffice.countries.edit',$country->country_id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Country Code: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="country_code" class="form-control" placeholder="Country Code" value="{{ $requestdata->country_code ?? '' }}">
                            @error('country_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Country Name: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="country_name" class="form-control" placeholder="Country Name" value="{{ $requestdata->country_name ?? '' }}">
                            @error('country_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Currency Name: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="currency_name" class="form-control" placeholder="Currency Name" value="{{ $requestdata->currency_name ?? '' }}">
                            @error('currency_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Currency Symbol: <i class="text-danger">*</i></label>
                        <div class="col-sm-9">
                            <input type="text" name="currency_symbol" class="form-control" placeholder="Symbol Name" value="{{ $requestdata->currency_symbol ?? '' }}">
                            @error('currency_symbol')
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