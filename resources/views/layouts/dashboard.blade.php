<!doctype html>
<html>
<head>
    @include('includes.backofficehead')
</head>
<body>

    <!-- Begin Page -->
    <div class="page-wrapper">
        
        <!-- Begin Header -->
        <!-- Begin Header -->
        @include('includes.backofficeheader')
        @include('includes.backofficesidebar')

        <div class="main-content">
            <!-- content -->
            <div class="page-content">
                @yield('content')
            </div>
        </div>
        @include('includes.backofficefooter')
    </div>


    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Are you sure want to delete <span class="data-module-name"></span> 「 <span class="data-name"></span> 」?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="javascript:;">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('public/backoffice/assets/js/vendor.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{ asset('public/backoffice/assets/libs/flatpicker/js/flatpickr.js') }}"></script>
    <script src="{{ asset('public/backoffice/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('public/backoffice/assets/libs/chartjs/js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('public/backoffice/assets/js/utils/colors.js') }}"></script>
    <script src="{{ asset('public/backoffice/assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ asset('public/backoffice/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('public/backoffice/assets/libs/select2/js/select2.min.js') }}"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
    <!-- ================== BEGIN PAGE JS ================== -->
    <script src="{{ asset('public/backoffice/assets/js/app.js') }}"></script>
    <!-- ================== END PAGE JS ================== -->

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    @if($success = Session::get('success'))
    <script>
        Swal.fire({
            title: "",
            text: "<?php echo $success ?>",
            type: "success",
            confirmButtonClass: "btn btn-confirm mt-2"
        })
    </script>
    @endif
    @if($error = Session::get('error'))
    <div class="alert alert-success">
        Swal.fire({
        title: "",
        text: "<?php echo $error ?>",
        type: "error",
        confirmButtonClass: "btn btn-confirm mt-2"
        });
    </div>
    @endif
    <script>
        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            $('#deleteModal').modal('show');
            $('#deleteModal').find('.data-name').text($(this).attr('data-name-value'));
            $('#deleteModal').find('.data-module-name').text($(this).attr('data-module-name'));
            $('#deleteModal').find('.btn-primary').attr('href', $(this).attr('href'));
        });
        $('[data-toggle="select2"]').select2()

        $(document).ready(function() {
            $('.editor').summernote();
        });
    </script>
    @yield('script')

</body>
</html>