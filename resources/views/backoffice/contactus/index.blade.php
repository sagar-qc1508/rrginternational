@extends('layouts.dashboard')
@section('content')
<!-- page header -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">Contact Enquiries</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page content -->
<div class="page-content-wrapper mt--45">
    <div class="card card-body">
        <div class="row">
            <div class="col-md-9">
                <form method="GET" action="#" class="mt-4 mt-md-0 float-md-right form-inline">
                    <div class="search-box mr-2">
                        <div class="position-relative">
                            <input type="text" class="form-control form-control-sml" placeholder="Search..." name="s" value="<?php echo (!empty($_REQUEST['s'])) ? $_REQUEST['s'] : '' ?>" />
                            <?php if (isset($_REQUEST['search'])) { ?>
                                <a href="{{ route('backoffice.contactus') }}" name="search" class="icon"><i class="fa fa-times"></i></a>
                            <?php } else { ?>
                                <button type="submit" name="search" class="icon"><i class="fa fa-search"></i></button>
                            <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- end row -->
    </div>
    <?php if ($contacts->count() > 0) { ?>
        <div class="table-responsive">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@sortablelink('student_name','Student name')</th>
                        <th>@sortablelink('email','Email')</th>
                        <th>@sortablelink('phone_number','Phone Number')</th>
                        <th>@sortablelink('subject','Subject')</th>
                        <th>@sortablelink('message','Message')</th>
                        <th>Attachment</th>
                        <th>@sortablelink('created_at','Created At')</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contacts as $key => $contact) { ?>
                        <tr>
                            <td><?php echo $contacts->firstItem() + $key; ?></td>
                            <td><?php echo $contact->student_name; ?></td>
                            <td><?php echo $contact->email; ?></td>
                            <td><?php echo $contact->phone_number; ?></td>
                            <td><?php echo $contact->subject; ?></td>
                            <td><?php echo \Illuminate\Support\Str::limit(strip_tags($contact->message), $limit = 30, $end = '...'); ?></td>
                            <td>
                                <?php if (!empty($contact->attachment)) { ?>
                                    <a href="<?php echo asset('storage/contactattachment/' . $contact->attachment) ?>" download="">Download</a>
                                <?php } else {
                                    echo '-';
                                } ?>
                            </td>
                            <td><?php echo date('d-m-Y h:i A', strtotime($contact->created_at)); ?></td>
                            <td>
                                <a class="edit-detail" href="{{ route('backoffice.contactus.view',$contact->contact_id) }}">View</a><a href="{{ route('backoffice.contactus.delete',$contact->contact_id) }}" class="del-color-red delete" data-module-name="Contact" data-name-value="{{ $contact->subject }}">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        {!! $contacts->appends(\Request::except('page'))->render() !!}
    <?php } else { ?>
        <div class="no-record text-center">
            <img src="{{ asset('assets/img/no-record.png') }}" class="img-responsive norecordimg" />
            <h4>No record found</h4>
        </div>
    <?php } ?>
</div>
@stop