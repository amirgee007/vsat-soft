<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="{{Request::is('dashboard') ? 'active' : ''}}">
                <a class="" href="{{route('index.dashboard')}}">
                    <i class="icon_house_alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu {{Request::is('location/*') ? 'active' : ''}} ">
                <a href="javascript:;" class="">
                    <i class="fa fa-map"></i>
                    <span>Locations</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li class="{{ Request::segment(2)=='regions' ? 'active' : '' }}"><a class="" href="{{route('location.regions.index')}}">Regions</a></li>
                    <li class="{{ Request::segment(2)=='countries' ? 'active' : '' }}"><a class="" href="{{route('location.countries.index')}}">Countries</a></li>
                    <li class="{{ Request::segment(2)=='cities' ? 'active' : '' }}"><a class="" href="{{route('location.cities.index')}}">Cities</a></li>
                </ul>
            </li>

            <li class="{{Request::is('my-profile') ? 'active' : ''}}" >
                <a class="" href="{{route('profile.show')}}">
                    <i class="icon_profile"></i>
                    <span>My Profile</span>
                </a>
            </li>
            <li class="sub-menu {{Request::is('people/*') ? 'active' : ''}}">
                <a href="javascript:;" class="">
                    <i class="fa fa-users"></i>
                    <span>People</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li class="{{ Request::segment(2)=='clients' ? 'active' : '' }}"><a class="" href="{{route('people.clients.index')}}">Clients</a></li>
                    <li class="{{ Request::segment(2)=='support-staff' ? 'active' : '' }}"><a class="" href="{{route('people.supportStaff.index')}}">Support Staff</a></li>
                    <li class="{{ Request::segment(2)=='users' ? 'active' : '' }}"><a class="" href="{{route('people.users.index')}}">Users</a></li>
                </ul>
            </li>
            <li class="{{Request::is('branch') ? 'active' : ''}}">
                <a class="" href="{{route('branch.index')}}">
                    <i class="icon_flowchart_alt"></i>
                    <span>Branches</span>
                </a>
            </li>
            <li class="{{Request::is('site') ? 'active' : ''}}">
                <a class="" href="{{route('site.index')}}">
                    <i class="icon_pin"></i>
                    <span>Sites</span>
                </a>
            </li>
            <li class="{{ ( Request::is('asset/*') || Request::is('asset') ) ? 'active' : ''}}">
                <a class="" href="{{route('asset.index')}}">
                    <i class="icon_archive"></i>
                    <span>Assets</span>
                </a>
            </li>

            <li class="{{( Request::is('ticket/*') || Request::is('ticket') ) ? 'active' : ''}}">
                <a
                   href="{{route('ticket.index')}}">
                    <i class="icon_tags"></i>
                    <span>Ticketing</span>
                </a>
            </li>
            <li class="sub-menu {{Request::is('equipments/*') ? 'active' : ''}}">
                <a href="javascript:;" class="">
                    <i class="icon_archive"></i>
                    <span>Equipments</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="#">Stock</a></li>
                    <li><a class="" href="{{route('equipments.index')}}">Tools & Equipments</a></li>
                </ul>
            </li>
            <li class="sub-menu {{Request::is('survey/*') ? 'active' : ''}}">
                <a href="javascript:;" class="">
                    <i class="fa fa-file-text-o"></i>
                    <span>Survey</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li class="{{ Request::segment(2)=='add' ? 'active' : '' }}"><a class="" href="{{ route('survey.create') }}">Add Survey</a></li>
                    <li class="{{ Request::segment(2)=='site' ? 'active' : '' }}"><a class="" href="{{ route('survey.site.index') }}">Site Survey</a></li>
                    <li class="{{ Request::segment(2)=='performance' ? 'active' : '' }}"><a class="" href="{{ route('survey.performance.index') }}">Performance Survey</a></li>
                </ul>
            </li>
            <li class="sub-menu {{Request::is('log/*') ? 'active' : ''}}">
                <a href="javascript:;" class="">
                    <i class="fa fa-history"></i>
                    <span>Logs</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{route('log.installation.index')}}">Installation Log</a></li>
                    <li><a class="" href="{{route('log.maintenance.index')}}">Maintenance Log</a></li>
                    <li><a class="" href="{{ route('log.testCases.index') }}">Test Cases</a></li>
                </ul>
            </li>
            <li class="sub-menu {{ Request::is('documents/*') ? 'active' : '' }}">
                <a href="javascript:;" class="">
                    <i class="fa fa-file"></i>
                    <span>Documents</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li class="{{ Request::segment(2)=='project' ? 'active' : '' }}">
                        <a class="" href="{{ route('document.project.index') }}">Projects</a>
                    </li>
                    <li class="{{ Request::segment(2)=='general' ? 'active' : '' }}">
                        <a class="" href="{{ route('document.general.index') }}">General</a>
                    </li>
                    <li class="{{ Request::segment(2)=='special' ? 'active' : '' }}">
                        <a class="" href="{{ route('document.special.index') }}">Special</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('reports') ? 'active' : '' }}">
                <a class="" href="{{ route('report.index') }}">
                    <i class="icon_datareport_alt"></i>
                    <span>Reports</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="fa fa-file"></i>
                    <span>Settings</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" target="_blank" href="{{url('/routes')}}">All Routes</a></li>
                    <li><a class="" target="_blank" href="{{url('/log-viewer/logs/')}}">Site Logs</a></li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
