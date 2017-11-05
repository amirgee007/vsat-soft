<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>@yield('pageTitle') | VSAT</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet">
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">

{{--make all above links same as below--}}
    <link rel="stylesheet" href="{{ asset('assets/css/pages/advbuttons.css') }}" />

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

    <div id="notific">
        @include('admin.notifications')
    </div>
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
<script src="js/jquery.js"></script>
<script src="js/jquery-ui-1.10.4.min.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<script src="assets/jquery-knob/js/jquery.knob.js"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js"></script>
<!-- jQuery full calendar -->
<<script src="js/fullcalendar.min.js"></script>
<!-- Full Google Calendar - Calendar -->
<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
<!--script for this page only-->
<script src="js/calendar-custom.js"></script>
<script src="js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="js/jquery.customSelect.min.js"></script>
<script src="assets/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="js/scripts.js"></script>
<!-- custom script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="js/jquery-jvectormap-world-mill-en.js"></script>
<script src="js/jquery-jvectormap-canada.js"></script>
<script src="js/xcharts.min.js"></script>
<script src="js/jquery.autosize.min.js"></script>
<script src="js/jquery.placeholder.min.js"></script>
<script src="js/gdp-data.js"></script>
<script src="js/morris.min.js"></script>
<script src="js/sparklines.js"></script>
<script src="js/charts.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>


{{--al js links mus be like this...--}}
<script src="{{ asset('assets/vendors/toastr/js/toastr.min.js') }}"></script>


<script type="text/javascript">

    $.ajaxSetup({
        headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "positionClass": "toast-top-right",
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
    $(document).ready(function () {
        $("#owl-slider").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true

        });
    });

    //custom select box

    $(function () {
        $('select.styled').customSelect();
    });

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
