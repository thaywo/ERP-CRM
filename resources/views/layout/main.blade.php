<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" type="image/png" href="{{url('public/logo', $general_settings->site_logo) ?? 'NO Logo'}}">
    <title>{{$general_settings->site_title ?? "NO Title"}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('public/vendor/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/vendor/bootstrap/css/awesome-bootstrap-checkbox.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/vendor/bootstrap-toggle/css/bootstrap-toggle.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/vendor/bootstrap/css/bootstrap-datepicker.min.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('public/vendor/jquery-clockpicker/bootstrap-clockpicker.min.css') }}" type="text/css">
    <!-- Boostrap Tag Inputs-->
    <link rel="stylesheet" href="{{ asset('public/vendor/Tag_input/tagsinput.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('public/vendor/bootstrap/css/bootstrap-select.min.css') }}" type="text/css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('public/vendor/font-awesome/css/font-awesome.min.css') }}" type="text/css">
    <!-- Dripicons icon font-->
    <link rel="stylesheet" href="{{ asset('public/vendor/dripicons/webfont.css') }}" type="text/css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ asset('public/css/grasp_mobile_progress_circle-1.0.0.min.css') }}" type="text/css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{ asset('public/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}" type="text/css">
    <!-- date range stylesheet-->
    <link rel="stylesheet" href="{{ asset('public/vendor/daterange/css/daterangepicker.min.css') }}" type="text/css">
    <!-- table sorter stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/datatable/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/datatable/select.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/datatable/dataTables.checkboxes.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/datatable/datatables.flexheader.boostrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/select2/dist/css/select2.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/RangeSlider/ion.rangeSlider.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/datatable/datatable.responsive.boostrap.min.css') }}">

    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('public/css/style.default.css') }}" id="theme-stylesheet" type="text/css">

    @if((request()->is('admin/dashboard*')) || (request()->is('calendar*')) )
    @include('calendarable.css')
    @endif

    <script type="text/javascript" src="{{ asset('public/vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/jquery/jquery-ui.min.js') }}"></script>

    @if((request()->is('admin/dashboard*')) || (request()->is('calendar*')) )
    @include('calendarable.js')
    @endif

    <link rel="stylesheet" href="{{ asset('public/css') }}/custom.css" type="text/css">
  </head>

  <body>
    <div id="loader"></div>

    <!-- Header -->
    @include('layout.main.header')

    <!-- Sidebar -->
    @include('layout.main.sidebar')

    @php
    $general_settings = \App\GeneralSetting::latest()->first();
    @endphp

    <div id="content" class="page animate-bottom d-none">
      @yield('content')

      @include('layout.main.footer')
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('public/vendor/jquery/bootstrap-datepicker.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/vendor/jquery-clockpicker/bootstrap-clockpicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/bootstrap-toggle/js/bootstrap-toggle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/bootstrap/js/bootstrap-select.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/vendor/chart.js/Chart.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/js/charts-custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/front.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/daterange/js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/daterange/js/knockout-3.4.2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/daterange/js/daterangepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/tinymce/js/tinymce/tinymce.min.js') }}"></script>

    <!-- JS for Boostrap Tag Inputs-->
    <script type="text/javascript" src="{{ asset('public/vendor/Tag_input/tagsinput.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/RangeSlider/ion.rangeSlider.min.js') }}"></script>

    <!-- table sorter js-->
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/pdfmake.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/buttons.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/buttons.colVis.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/buttons.html5.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/buttons.print.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/dataTables.select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/sum().js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/dataTables.checkboxes.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/datatable.fixedheader.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/datatable.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/select2/dist/js/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/vendor/datatable/datatable.responsive.boostrap.min.js') }}"></script>

    <script>
(function ($) {
  "use strict";

  $('#empty_database').on('click', function () {
    if (confirm("{{__('Delete Selection',['key' =>__('Empty Database')])}}")) {
      let url = "{{route('empty_database')}}";
      document.location.href = url;
    } else {

    }
  });

  $('#notify-btn').on('click', function () {
    $.ajax({
      url: "{{route('markAsRead')}}",
      dataType: "json",
      success: function (result) {},
    });
  })
})(jQuery);
    </script>
  </body>

</html>