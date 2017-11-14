<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="img/favicon.png">

    <title>@yield('pageTitle') | VSAT</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- bootstrap theme -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}" />
    <!--external css-->
    <!-- font icon -->
    <link rel="stylesheet" href="{{ asset('css/elegant-icons-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <!-- full calendar css-->
    <link rel="stylesheet" href="{{ asset('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fullcalendar/fullcalendar/fullcalendar.css') }}" />
    <!-- easy pie chart-->
    {{--<link rel="stylesheet" href="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" />--}}
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/jquery-jvectormap-1.2.2.css') }}" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/widgets.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style-responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/xcharts.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/jquery-ui-1.10.4.min.css') }}" />
    <link href="{{ asset('assets/toastr/css/toastr.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet" type="text/css"/>

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    @yield('header_styles')

</head>

<body>
<!-- container section start -->
<section id="container" class="">

    <!--header start-->
    @include('admin.layouts._header')
    <!--header end-->

    <!--sidebar start-->
    @include('admin.layouts._left_side_bar')
    <!--sidebar end-->

    <!--main content start-->
    @yield('content')
    <!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/jquery-ui-1.10.4.min.js') }}"></script>
<script src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- nice scroll -->
<script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
<!-- charts scripts -->
<script src="{{ asset('assets/jquery-knob/js/jquery.knob.js') }}"></script>
<script src="{{ asset('js/jquery.sparkline.js') }}"></script>
{{--<script src="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>--}}
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<!-- jQuery full calendar -->
<script src="{{ asset('js/fullcalendar.min.js') }}"></script>
<!-- Full Google Calendar - Calendar -->
<script src="{{ asset('assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
<!--script for this page only-->
<script src="{{ asset('js/calendar-custom.js') }}"></script>
<script src="{{ asset('js/jquery.rateit.min.js') }}"></script>
<!-- custom select -->
<script src="{{ asset('js/jquery.customSelect.min.js') }}"></script>
<script src="{{ asset('assets/chart-master/Chart.js') }}"></script>


<!-- custom script for this page-->
<script src="{{ asset('js/sparkline-chart.js') }}"></script>
{{--<script src="{{ asset('js/easy-pie-chart.js') }}"></script>--}}
<script src="{{ asset('js/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('js/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('js/jquery-jvectormap-canada.js') }}"></script>
<script src="{{ asset('js/xcharts.min.js') }}"></script>
<script src="{{ asset('js/jquery.autosize.min.js') }}"></script>
<script src="{{ asset('js/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('js/gdp-data.js') }}"></script>
<script src="{{ asset('js/morris.min.js') }}"></script>
<script src="{{ asset('js/sparklines.js') }}"></script>
<script src="{{ asset('js/charts.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/toastr/js/toastr.min.js') }}"></script>
<script src="{{ asset('assets/toastr/js/pages/ui-toastr.js') }}"></script>

<!--custome script for all page-->
<script src="{{ asset('js/scripts.js') }}"></script>
@yield('footer_scripts')

<script type="text/javascript">

    $.ajaxSetup({
        headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });


//    http://codeseven.github.io/toastr/demo.html
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "positionClass": "toast-bottom-right",
        "progressBar": true,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "swing",
        "showMethod": "slideDown",
        "hideMethod": "fadeOut"
    };

    @if (Session::has('app_info'))
    toastr.info("{{ Session::get('app_info') }}", "Message");
    @endif

    @if (Session::has('app_message'))
    toastr.success("{{ Session::get('app_message') }}", "Message");
    @endif

    @if (Session::has('app_warning'))
    toastr.warning("{{ Session::get('app_warning') }}", "Message");
    @endif

    @if (Session::has('app_error'))
    toastr.error("{{ Session::get('app_error') }}", "Message");
    @endif

</script>

<script>

    //knob
    $(function () {
        $(".knob").knob({
            'draw': function () {
                $(this.i).val(this.cv + '%')
            }
        })
    });

    //carousel

//    $(document).ready(function () {
//        $("#owl-slider").owlCarousel({
//            navigation: true,
//            slideSpeed: 300,
//            paginationSpeed: 400,
//            singleItem: true
//
//        });
//    });

    //custom select box

//    $(function () {
//        $('select.styled').customSelect();
//    });

    // Show Hide Map
    $(document).ready(function myfunction() {

        $('.ahide').on('click', function (e) {
            e.preventDefault();
            $('.divhide').slideToggle(800);
            $('.btnhide').toggleClass('fa fa-chevron-down fa fa-chevron-up');
        });


        /* ---------- Map ---------- */

        $('#map').vectorMap({
            map: 'world_mill_en',
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#C8EEFF', '#0071A4'],
                    normalizeFunction: 'polynomial'
                }]
            },
            backgroundColor: '#2b2b2b',
            onRegionTipShow: function (e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
            }
        });


        $('#option1 li a').on('click', function (e) {
            e.preventDefault();
            var map = $('<div id="map" style="height: 380px;"></div>');
            $(this).closest('#mapfilter').find('#map').remove();
            $(this).closest('#mapfilter').find('.divhide').append(map);
            $('#map').vectorMap({
                map: $(this).attr('title'),
                series: {
                    regions: [{
                        values: gdpData,
                        scale: ['#C8EEFF', '#0071A4'],
                        normalizeFunction: 'polynomial'
                    }]
                },
                backgroundColor: '#2b2b2b',
                onRegionTipShow: function (e, el, code) {
                    el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                }
            });
        });
    });

</script>
</body>
</html>
