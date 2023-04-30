<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ isset($set) == true ? asset('imgs/'.$set->favicon) : asset('imgs/favicon/news.png') }}" type="image/x-icon">
    <title>{{ isset($set) == true ? LaravelLocalization::getCurrentLocaleDirection() == 'ltr' ? $set->getTranslation('title','en') : $set->getTranslation('title','ar') : __('backend/dashboard_setting.Gabal News') }} @yield('title')</title>
    @include('layouts.backend.head_dashboard')

</head>
<body class="hold-transition sidebar-mini layout-fixed">

    @include('layouts.backend.dashboard_nav')

    @include('layouts.backend.dashboard_main_sidebar')

    @include('layouts.backend.preloader_dashboard')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('after_next')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">{{__('backend/dashboard_main_sidbar.Dashboard')}}</a></li>
              <li class="breadcrumb-item active">@yield('next')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        @yield('content')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



    @include('layouts.backend.dashboard_footer')
    @include('layouts.backend.end_dashboard')

</body>

</html>
