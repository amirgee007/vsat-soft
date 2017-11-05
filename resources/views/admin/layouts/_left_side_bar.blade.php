<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="active">
                <a class="" href="{{route('index.dashboard')}}">
                    <i class="icon_house_alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="fa fa-map"></i>
                    <span>Locations</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{route('location.regions.index')}}">Regions</a></li>
                    <li><a class="" href="{{route('location.countries.index')}}">Countries</a></li>
                    <li><a class="" href="{{route('location.cities.index')}}">Cities</a></li>
                </ul>
            </li>

            <li>
                <a class="" href="{{route('profile.show')}}">
                    <i class="icon_profile"></i>
                    <span>My Profile</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="fa fa-users"></i>
                    <span>People</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{route('people.clients.index')}}">Clients</a></li>
                    <li><a class="" href="{{route('people.supportStaff.index')}}">Support Staff</a></li>
                    <li><a class="" href="{{route('people.users.index')}}">Users</a></li>
                </ul>
            </li>
            <li>
                <a class="" href="{{route('branch.index')}}">
                    <i class="icon_flowchart_alt"></i>
                    <span>Branches</span>
                </a>
            </li>
            <li>
                <a class="" href="{{route('site.index')}}">
                    <i class="icon_pin"></i>
                    <span>Sites</span>
                </a>
            </li>
            <li>
                <a class="" href="{{route('ticket.index')}}">
                    <i class="icon_tags"></i>
                    <span>Ticketing</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_archive"></i>
                    <span>Equipments</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="#">Stock</a></li>
                    <li><a class="" href="tools_equipments.html">Tools & Equipments</a></li>
                    <li><a class="" href="other_tools.html">Other Tools</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="fa fa-file-text-o"></i>
                    <span>Survey</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="#">Site Survey</a></li>
                    <li><a class="" href="#">Performance Survey</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="fa fa-history"></i>
                    <span>Logs</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="installation_log.html">Installation Log</a></li>
                    <li><a class="" href="maintenance_log.html">Maintenance Log</a></li>
                    <li><a class="" href="test_cases.html">Test Cases</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="fa fa-file"></i>
                    <span>Documents</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="project_doc.html">Projects</a></li>
                    <li><a class="" href="general_doc.html">General</a></li>
                    <li><a class="" href="special_doc.html">Special</a></li>
                </ul>
            </li>
            <li>
                <a class="" href="reports.html">
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
