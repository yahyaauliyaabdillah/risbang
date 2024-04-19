<!doctype html>
<html lang="en" class="semi-dark">
<!-- Mirrored from codervent.com/snacked/demo/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Feb 2024 08:02:23 GMT -->

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('assets/images/favicon-32x32.png')}}" type="image/png" />
  <!--plugins-->
  <link href="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/icons.css" rel="stylesheet')}}">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.9.1/font/bootstrap-icons.css">    -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


  <!-- loader-->
  <link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="{{asset('assets/css/dark-theme.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/light-theme.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/semi-dark.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/header-colors.css')}}" rel="stylesheet" />

  <title> @yield('title')</title>

  <title>Snacked - Bootstrap 5 Admin Template</title>
  @include('layouts.style')
</head>

<body>

  @yield('content')
  @include('layouts.footer')

  @include('layouts.script')
</body>


<!-- Mirrored from codervent.com/snacked/demo/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Feb 2024 08:02:48 GMT -->

</html>