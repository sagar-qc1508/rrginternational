<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="<?php # echo $site_settings->site_title; ?>">
<meta name="keywords" content="<?php # echo $site_settings->site_title; ?>">
<meta name="author" content="Moziz">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php # echo $site_settings->site_title; ?></title>
<link rel="shortcut icon" type="image/x-icon" />
{{--  href="{{ asset('storage/settings/'.$site_settings->favicon) }}"  --}}

<!-- ================== BEGIN PAGE LEVEL CSS START ================== -->
<link rel="stylesheet" href="{{ asset('public/backoffice/assets/css/icons.css') }}" />
<link rel="stylesheet" href="{{ asset('public/backoffice/assets/libs/wave-effect/css/waves.min.css') }}" />
<link rel="stylesheet" href="{{ asset('public/backoffice/assets/libs/owl-carousel/css/owl.carousel.min.css') }}" />
<!-- ================== BEGIN PAGE LEVEL END ================== -->
<!-- ================== Plugins CSS  ================== -->
<link rel="stylesheet" href="{{ asset('public/backoffice/assets/libs/flatpicker/css/flatpickr.min.css') }}">
<link href="{{ asset('public/backoffice/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('public/backoffice/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<!-- ================== Plugins CSS ================== -->
@yield('css')
<!-- ================== BEGIN APP CSS  ================== -->
<link rel="stylesheet" href="{{ asset('public/backoffice/assets/css/bootstrap.css') }}" />
<link rel="stylesheet" href="{{ asset('public/backoffice/assets/css/styles.css') }}" />
<link rel="stylesheet" href="{{ asset('public/backoffice/assets/css/custom.css') }}" />

<!-- ================== END APP CSS ================== -->

<!-- ================== BEGIN POLYFILLS  ================== -->
<!--[if lt IE 9]>
  <script src="backoffice/assets/libs/html5shiv/js/html5shiv.js"></script>
  <script src="backoffice/assets/libs/respondjs/js/respond.min.js"></script>
<![endif]-->
<!-- ================== END POLYFILLS  ================== -->