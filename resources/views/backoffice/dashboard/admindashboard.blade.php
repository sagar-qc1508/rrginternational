@extends('layouts.dashboard')
@section('content')


<!-- page header -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-5 col-xl-6">
                <div class="page-title">
                    <h3 class="mb-1 font-weight-bold">Dashboard</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page content -->
<div class="page-content-wrapper mt--45">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Number of Universities </span>
                                <h2 class="mb-0 mt-1"><?php echo 0; ?></h2>
                            </div>
                            <div class="align-self-center">
                                <span class="text-primary">
                                    <i class="bx bx-buildings fs-lg"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Number of Courses </span>
                                <h2 class="mb-0 mt-1"><?php echo 0; ?></h2>
                            </div>
                            <div class="align-self-center">
                                <span class="text-primary">
                                    <i class="bx bx-layer fs-lg"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Number of Students Registered </span>
                                <h2 class="mb-0 mt-1"><?php echo 0; ?></h2>
                            </div>
                            <div class="align-self-center">
                                <span class="text-primary">
                                    <i class="bx bxs-graduation fs-lg"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Number of Application Done </span>
                                <h2 class="mb-0 mt-1"><?php echo 0; ?></h2>
                            </div>
                            <div class="align-self-center">
                                <span class="text-primary">
                                    <i class="bx bx-copy-alt fs-lg"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Number of Pending Application </span>
                                <h2 class="mb-0 mt-1"><?php echo 0; ?></h2>
                            </div>
                            <div class="align-self-center">
                                <span class="text-primary">
                                    <i class="bx bx-copy-alt fs-lg"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Number of Rejected Application </span>
                                <h2 class="mb-0 mt-1"><?php echo 0; ?></h2>
                            </div>
                            <div class="align-self-center">
                                <span class="text-primary">
                                    <i class="bx bx-copy-alt fs-lg"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Number of Visa Achieved </span>
                                <h2 class="mb-0 mt-1"><?php echo '1000'; ?></h2>
                            </div>
                            <div class="align-self-center">
                                <span class="text-primary">
                                    <i class="bx bxl-visa fs-lg"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Number of Visa Scholoship Given </span>
                                <h2 class="mb-0 mt-1"><?php echo '20'; ?></h2>
                            </div>
                            <div class="align-self-center">
                                <span class="text-primary">
                                    <i class="bx bxl-telegram fs-lg"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Total Users </span>
                                <h2 class="mb-0 mt-1"><?php echo 0; ?></h2>
                            </div>
                            <div class="align-self-center">
                                <span class="text-primary">
                                    <i class="bx bxs-user-detail fs-lg"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Total Branches </span>
                                <h2 class="mb-0 mt-1"><?php echo '0'; ?></h2>
                            </div>
                            <div class="align-self-center">
                                <span class="text-primary">
                                    <i class="bx bx-git-branch fs-lg"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Total Registered Agents </span>
                                <h2 class="mb-0 mt-1"><?php echo '0'; ?></h2>
                            </div>
                            <div class="align-self-center">
                                <span class="text-primary">
                                    <i class="bx bx-user-check fs-lg"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Total Amount of fees paid </span>
                                <h2 class="mb-0 mt-1"><?php echo '0'; ?></h2>
                            </div>
                            <div class="align-self-center">
                                <span class="text-primary">
                                    <i class="bx bxs-badge-dollar fs-lg"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Total Amount of Pending fees </span>
                                <h2 class="mb-0 mt-1"><?php echo '0'; ?></h2>
                            </div>
                            <div class="align-self-center">
                                <span class="text-primary">
                                    <i class="bx bxs-badge-dollar fs-lg"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- inner page End -->
@stop