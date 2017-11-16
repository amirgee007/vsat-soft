<!--header start-->
<header class="header dark-bg">
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>

    <!--logo start-->
    <a href="{{route('index.dashboard')}}" class="logo">
        <img src="{{asset('img/tracelogo.png')}}" alt="TraceSystems" style="max-height: 35px; height: auto; width: auto" /></a>
    <!--logo end-->

    <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img width="34px" height="34px" alt="" src="{{asset('uploads/users/'.\Auth::user()->profile_pic)}}">
                            </span>
                    <span class="username">{{\Auth::user()->user_name}}</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li class="eborder-top">
                        <a href="{{route('profile.show')}}"><i class="icon_profile"></i>My Profile</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}"><i class="icon_key_alt"></i>Log Out</a>
                    </li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
    </div>
</header>
<!--header end-->