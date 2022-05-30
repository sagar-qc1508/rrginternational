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
                    <h3 class="mb-1 font-weight-bold">Documents</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page content -->
<div class="page-content-wrapper mt--45">
    <div class="card card-body">
        <div class="row">
            <div class="offset-md-3 col-md-9">
                <form method="GET" action="#" class="mt-4 mt-md-0 float-md-right form-inline">
                    <div class="search-box mr-2">
                        <div class="position-relative">
                            <input type="text" class="form-control form-control-sml" placeholder="Search..." name="s" value="<?php echo (!empty($_REQUEST['s'])) ? $_REQUEST['s'] : '' ?>" />
                            <?php if (isset($_REQUEST['search'])) { ?>
                                <a href="{{ route('backoffice.admindocuments') }}" name="search" class="icon"><i class="fa fa-times"></i></a>
                            <?php } else { ?>
                                <button type="submit" name="search" class="icon"><i class="fa fa-search"></i></button>
                            <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- end row -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <?php if ($documents->count() > 0) { ?>
                    <div class="table-responsive">
                        <table class="table table-bordered  table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>@sortablelink('student_name','Student Name')</th>
                                    <th>@sortablelink('document_type','Document Type')</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($documents as $key => $document) {
                                ?>
                                    <tr>
                                        <td><?php echo $documents->firstItem() + $key; ?></td>
                                        <td><?php echo $document->student_name; ?></td>
                                        <td><?php echo $document->document_type; ?></td>
                                        <td>
                                            <a class="edit-detail" href="{{ asset('storage/documents/'.$document->file) }}" download="">Download</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    {!! $documents->appends(\Request::except('page'))->render() !!}
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