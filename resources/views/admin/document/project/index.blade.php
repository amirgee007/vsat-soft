@extends('admin/layouts/default')
@section('pageTitle', 'PROJECT DOCUMENTS')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-file"></i>Project Documents</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="{{ route('index.dashboard') }}">Home</a></li>
                        <li><i class="fa fa-file"></i>Project Documents</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <!--Project Documents Filter Start-->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <section class="panel panel-default">
                            <header class="panel-heading">
                                <i class="fa fa-filter"></i>
                                <h2>Filter By</h2>
                            </header>
                            <div class="panel-body">
                                <!-- /btn-group -->
                                <div class="btn-group col-sm-3 col-xs-3">
                                    <a class="btn btn-primary col-sm-10 col-xs-9" title="Regions">Regions</a>
                                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul id="option1" class="dropdown-menu scrollable-menu" role="menu">
                                        <li><a href="#" title="World">World</a></li>
                                        <li><a href="#" title="MiddleEast">Middle East</a></li>
                                        <li><a href="#" title="Europe">Europe</a></li>
                                        <li><a href="#" title="Australia">Australia</a></li>
                                        <li><a href="#" title="NorthAmerica">North America</a></li>
                                        <li><a href="#" title="SouthAmerica">South America</a></li>
                                        <li><a href="#" title="NorthAfrica">North Africa</a></li>
                                    </ul>
                                </div>
                                <!-- /btn-group -->
                                <div class="btn-group col-sm-3 col-xs-3">
                                    <a class="btn btn-danger col-sm-10 col-xs-9" title="Countries">Countries</a>
                                    <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul id="option2" class="dropdown-menu scrollable-menu" role="menu">

                                    </ul>
                                </div>
                                <!-- /btn-group -->
                                <div class="btn-group col-sm-3 col-xs-3">
                                    <a class="btn btn-success col-sm-10 col-xs-9" title="Cities">Cities</a>
                                    <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul id="option3" class="dropdown-menu scrollable-menu" role="menu">

                                    </ul>
                                </div>
                                <!-- /btn-group -->
                                <div class="btn-group col-sm-3 col-xs-3">
                                    <a class="btn btn-success col-sm-10 col-xs-9" title="Projects">Projects</a>
                                    <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                    <ul id="option4" class="dropdown-menu scrollable-menu" role="menu">

                                    </ul>
                                </div>


                            </div>
                            <div class="panel-body">
                                <ol class="breadcrumb h3">

                                </ol>
                            </div>
                            <div class="panel-body">
                                <div class="btn_wrapper">
                                    <!-- /btn-group -->
                                    <div id="searchbtn" class="btn-group col-sm-6 col-xs-6 go-left">
                                        <a class="btn btn-primary col-sm-10 col-xs-10" title="Search Project Documents">Search</a>
                                    </div>
                                    <!-- /btn-group -->
                                    <div id="newbtn" class="btn-group col-sm-6 col-xs-6 go-left unactive">

                                        <a href="add_project_document.html" class="btn btn-primary col-sm-10 col-xs-10" title="New Project Document">New</a>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>

                <!--Project Documents Filter End-->
                <div class="row">
                    <!-- Table start -->
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Project Documents
                            </header>

                            <table class="table table-advance table-hover">
                                <thead>
                                <tr>
                                    <th><i class="fa fa-flag"></i> Country</th>
                                    <th><i class="icon_building"></i> City</th>
                                    <th><i class="fa fa-tasks"></i> Project Name</th>
                                    <th><i class="fa fa-file-text-o"></i> File Name</th>
                                    <th><i class="icon_calendar"></i> Added Date</th>
                                    <th><i class="icon_profile"></i> Added By</th>
                                    <th><i class="icon_cogs"></i> Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr id="Dubai-1">
                                    <td>UAE</td>
                                    <td>Dubai</td>
                                    <td>AL MINHAD</td>
                                    <td class="col-sm-4 col-xs-2">VSAT Installation Instructions-UAE AL MINHAD.pdf</td>
                                    <td>09-04-2017</td>
                                    <td>Mahmoud</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-primary col-sm-4 col-xs-4 text-center" href="assets/Documents/Projects/VSAT Installation Instructions - UAE AL MINHAD.pdf" download><i class="fa fa-download"></i></a>
                                            <a class="btn btn-success col-sm-4 col-xs-4 text-center" href="edit_project_document.html"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-danger col-sm-4 col-xs-4 text-center" name="close" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr id="Dubai-2">
                                    <td>UAE</td>
                                    <td>Dubai</td>
                                    <td>AL MINHAD</td>
                                    <td class="col-sm-4 col-xs-2">UAE-LH-N-001 WRW 3-13-17.pdf</td>
                                    <td>09-04-2017</td>
                                    <td>Mahmoud</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-primary col-sm-4 col-xs-4 text-center" href="assets/Documents/Projects/UAE-LH-N-001 WRW 3-13-17.pdf" download><i class="fa fa-download"></i></a>
                                            <a class="btn btn-success col-sm-4 col-xs-4 text-center" href="#"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-danger col-sm-4 col-xs-4 text-center" name="close" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr id="Dubai-3">
                                    <td>UAE</td>
                                    <td>Dubai</td>
                                    <td>AL MINHAD</td>
                                    <td class="col-sm-4 col-xs-2">UAE-LW-N-001 WRW 3-8-17.pdf</td>
                                    <td>09-04-2017</td>
                                    <td>Mahmoud</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-primary col-sm-4 col-xs-4 text-center" href="assets/Documents/Projects/UAE-LW-N-001 WRW 3-8-17.pdf" download><i class="fa fa-download"></i></a>
                                            <a class="btn btn-success col-sm-4 col-xs-4 text-center" href="#"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-danger col-sm-4 col-xs-4 text-center" name="close" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        </section>
    <!--main content end-->
@stop
@section('footer_scripts')
    <script>
        $(function () {
            //all jquery code here
        });
    </script>
@stop
