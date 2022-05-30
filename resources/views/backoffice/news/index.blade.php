@extends('layouts.dashboard')
@section('content')
<!-- page header -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">News</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page content -->
<div class="page-content-wrapper mt--45">
    <div class="card card-body">
        <div class="row">
            <div class="col-md-3">
                <a href="{{ route('backoffice.news.add') }}" class="btn btn-primary waves-effect waves-light" data-effect="wave">
                    <i class="bx bx-plus"></i>
                    Add News
                </a>
            </div><!-- end col-->
            <div class="col-md-9">
                <form method="GET" action="#" class="mt-4 mt-md-0 float-md-right form-inline">
                    <div class="search-box mr-2">
                        <div class="position-relative">
                            <input type="text" class="form-control form-control-sml" placeholder="Search..." name="s" value="<?php echo (!empty($_REQUEST['s'])) ? $_REQUEST['s'] : '' ?>" />
                            <?php if (isset($_REQUEST['search'])) { ?>
                                <a href="{{ route('backoffice.news') }}" name="search" class="icon"><i class="fa fa-times"></i></a>
                            <?php } else { ?>
                                <button type="submit" name="search" class="icon"><i class="fa fa-search"></i></button>
                            <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- end row -->
    </div>
    <div class="card card-body">

        <?php if ($newses->count() > 0) { ?>
            <div class="row">
                <?php foreach ($newses as $key => $news) { ?>
                    <div class="col-lg-6 col-xl-3">
                        <!-- Simple card -->
                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{ asset('storage/news/'.$news->image) }}" onerror="src='{{ asset("assets/img/user.png") }}'" alt="<?php echo $news->news_title; ?>">
                            <div class="card-header">
                                <h5 class="card-title"><?php echo $news->news_title; ?></h5>
                            </div>
                            <div class="card-body">
                                <p><?php echo \Illuminate\Support\Str::limit(strip_tags($news->description), $limit = 150, $end = '...'); ?></p>
                                <p>
                                    <small class="text-muted"><?php echo date('d-m-Y', strtotime($news->news_date)); ?></small>
                                </p>
                                <a href="{{ route('backoffice.news.edit',$news->news_id) }}" class="btn btn-primary btn-sm" data-effect="wave">Edit</a>
                                <a href="{{ route('backoffice.news.delete',$news->news_id) }}" class="btn btn-danger btn-sm delete" data-effect="wave" data-module-name="News" data-name-value="{{ $news->news_title }}">Delete</a>
                            </div>
                        </div>
                    </div><!-- end col -->
                <?php } ?>
                {!! $newses->appends(\Request::except('page'))->render() !!}
            </div>
        <?php } else { ?>
            <div class="no-record text-center">
                <img src="{{ asset('assets/img/no-record.png') }}" class="img-responsive norecordimg" />
                <h4>No record found</h4>
            </div>
        <?php } ?>
    </div>
</div>
@stop