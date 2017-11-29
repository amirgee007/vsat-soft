
<input type="hidden" name="user_id" value="{{@$user->id}}">
    {{ csrf_field() }}
    <div class="form-group">
        <label class="col-lg-2 control-label" for="f-name">First Name *</label>
        <div class="col-lg-10">
            <input required type="text" class="form-control" value="{!! @$user->first_name ?? old('first_name') !!}" name="first_name" id="f-name" placeholder="First Name">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Last Name *</label>
        <div class="col-lg-10">
            <input required type="text" class="form-control" value="{!! @$user->last_name ?? old('last_name') !!}" name="last_name" id="l-name" placeholder="Last Name">
        </div>
    </div>
    <div class="form-group {{ $errors->first('user_name', 'has-error') }}">
        <label class="col-lg-2 control-label">User Name *</label>
        <div class="col-lg-10">
            <input required type="text" class="form-control" value="{!! @$user->user_name ?? old('user_name') !!}" name="user_name" id="u-name" placeholder="User Name">
            {!! $errors->first('user_name', '<span class="help-block">:message</span>') !!}

        </div>
    </div>
    <div class="form-group {{ $errors->first('password', 'has-error') }}">
        <label class="col-lg-2 control-label">Password</label>
        <div class="col-lg-10 password">
            <input type="password" class="form-control inhide" value="{!! old('password') !!}" name="password" placeholder="Password">
            <a class="ihide" href="#"><i class="fa fa-eye"></i></a>
            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}

            @if(isset($user))
            <span class="help-block" style="color: orange">If you don't want to update password leave it blank.</span>
            @endif
        </div>
    </div>
    <div class="form-group {{ $errors->first('password_confirm', 'has-error') }}">
        <label class="col-lg-2 control-label">Retype Password</label>
        <div class="col-lg-10 password">
            <input type="password" class="form-control rinhide" value="{!! old('password_confirm') !!}" name="password_confirmation" placeholder="Retype Password">
            <a class="rihide" href="#"><i class="fa fa-eye"></i></a>
            {!! $errors->first('password_confirm', '<span class="help-block">:message</span>') !!}

        </div>
    </div>
    <div class="form-group {{ $errors->first('email', 'has-error') }}">
        <label class="col-lg-2 control-label" >Email *</label>
        <div class="col-lg-10">
            <input required type="email" class="form-control" value="{!! @$user->email ?? old('email') !!}" name="email" id="email" placeholder="Email">
            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Cell</label>
        <div class="col-lg-10">
            <input type="number" class="form-control" value="{!! @$user->cell_num ?? old('cell_num') !!}" name="cell_num" id="cell" placeholder="00971505555144">
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-2 control-label">Phone</label>
        <div class="col-lg-10">
            <input type="number" class="form-control" value="{!! @$user->phone_num ?? old('phone_num') !!}" name="phone_num" id="phone_num" placeholder="00971505555144">
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-2 control-label">Country</label>
        <div class="col-lg-10">
            <input type="text" class="form-control" value="{!! @$user->country ?? old('country') !!}" name="country" id="country" placeholder="China">
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-2 control-label">Date Of Birth</label>
        <div class="col-lg-10">
            <input type="date" class="form-control" value="{!! @$user->date_of_birth ?? old('date_of_birth') !!}" name="date_of_birth" id="date_of_birth">
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-2 control-label">Status</label>
        <div class="col-lg-10">
            <select required class="form-control m-bot15" name="is_active">
                <option @if(@$user->is_active==1) selected @endif value="1">Enable</option>
                <option @if(@$user->is_active==0) selected @endif value="0">Disable</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-6 control-label">Profile Image</label>
        <div class="col-lg-offset-2 col-lg-6">
            <input id="input-file-now" type="file" @if(@$user->profile_pic) data-default-file="{{asset('uploads/users/'.$user->profile_pic)}}" @endif name="profile_pic" class="dropify"/>
            <br />
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger">Cancel</button>
        </div>
    </div>


    <!-- Permissions Form-Group Start-->
    <div class="form-group">
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <h3>Permissions:</h3>
                </div>
            </div>
        </section>

        <!-- Locations Permissions Start-->
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel panel-heading col-sm-12 col-xs-12">
                        <h5 class="col-sm-4 col-xs-3">Locations:</h5>
                        <div class="col-sm-6 col-xs-7 text-right">Select All</div>
                        <div class="col-sm-1 col-xs-1">
                            <input type="checkbox" class="" />
                        </div>
                        <div class="btn btn-primary hidetoggle" style="float: right; margin-right: -15px;">
                            <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                        </div>
                    </header>
                    <div class="panel-content divhide">
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Add Locations</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control custom-checkbox">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Edit Locations</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Delete Locations</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">View Locations</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Locations Permissions End-->

        <!-- Clients Permissions Start-->
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel panel-heading col-sm-12 col-xs-12">
                        <h5 class="col-sm-4 col-xs-3">Clients:</h5>
                        <div class="col-sm-2 col-xs-4">
                            <div class="btn-group">
                                <a class="btn btn-success m-bot15" title="Countries">Select Country</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu Listcheck" role="menu">
                                    <li>
                                        <input type="checkbox" /><span>Select All</span></li>
                                    <li>
                                        <input type="checkbox" /><span>United Arab Emirates</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Jordan</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Bahrain</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Iraq</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Kuwait</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Qatar</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-3 text-right">Select All</div>
                        <div class="col-sm-1 col-xs-1">
                            <input type="checkbox" class="" />
                        </div>
                        <div class="btn btn-primary hidetoggle" style="float: right; margin-right: -15px;">
                            <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                        </div>
                    </header>
                    <div class="panel-content divhide">
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Add Clients</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control custom-checkbox">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Edit Clients</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Delete Clients</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">View Clients</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Clients Permissions End-->

        <!-- Support Staff Permissions Start-->
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel panel-heading col-sm-12 col-xs-12">
                        <h5 class="col-sm-4 col-xs-3">Support Staff:</h5>
                        <div class="col-sm-2 col-xs-4">
                            <div class="btn-group">
                                <a class="btn btn-success m-bot15" title="Countries">Select Country</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu Listcheck" role="menu">
                                    <li>
                                        <input type="checkbox" /><span>Select All</span></li>
                                    <li>
                                        <input type="checkbox" /><span>United Arab Emirates</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Jordan</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Bahrain</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Iraq</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Kuwait</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Qatar</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-3 text-right">Select All</div>
                        <div class="col-sm-1 col-xs-1">
                            <input type="checkbox" class="" />
                        </div>
                        <div class="btn btn-primary hidetoggle" style="float: right; margin-right: -15px;">
                            <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                        </div>
                    </header>
                    <div class="panel-content divhide">
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Add Staff</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control custom-checkbox">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Edit Staff</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Delete Staff</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">View Staff</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Support Staff Permissions End-->

        <!-- Users Permissions Start-->
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel panel-heading col-sm-12 col-xs-12">
                        <h5 class="col-sm-4 col-xs-3">Users:</h5>
                        <div class="col-sm-2 col-xs-4">
                            <div class="btn-group">
                                <a class="btn btn-success m-bot15" title="Countries">Select Country</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu Listcheck" role="menu">
                                    <li>
                                        <input type="checkbox" /><span>Select All</span></li>
                                    <li>
                                        <input type="checkbox" /><span>United Arab Emirates</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Jordan</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Bahrain</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Iraq</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Kuwait</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Qatar</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-3 text-right">Select All</div>
                        <div class="col-sm-1 col-xs-1">
                            <input type="checkbox" class="" />
                        </div>
                        <div class="btn btn-primary hidetoggle" style="float: right; margin-right: -15px;">
                            <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                        </div>
                    </header>
                    <div class="panel-content divhide">
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Add Users</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control custom-checkbox">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Edit Users</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Delete Users</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">View Users</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Users Permissions End-->

        <!-- Branches Permissions Start-->
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel panel-heading col-sm-12 col-xs-12">
                        <h5 class="col-sm-4 col-xs-3">Branches:</h5>
                        <div class="col-sm-2 col-xs-4">
                            <div class="btn-group">
                                <a class="btn btn-success m-bot15" title="Countries">Select Country</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu Listcheck" role="menu">
                                    <li>
                                        <input type="checkbox" /><span>Select All</span></li>
                                    <li>
                                        <input type="checkbox" /><span>United Arab Emirates</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Jordan</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Bahrain</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Iraq</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Kuwait</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Qatar</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-3 text-right">Select All</div>
                        <div class="col-sm-1 col-xs-1">
                            <input type="checkbox" class="" />
                        </div>
                        <div class="btn btn-primary hidetoggle" style="float: right; margin-right: -15px;">
                            <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                        </div>
                    </header>
                    <div class="panel-content divhide">
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Add Branches</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control custom-checkbox">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Edit Branches</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Delete Branches</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">View Branches</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- Branches Permissions End-->

        <!-- Sites Permissions Start-->
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel panel-heading col-sm-12 col-xs-12">
                        <h5 class="col-sm-4 col-xs-3">Sites:</h5>
                        <div class="col-sm-2 col-xs-4">
                            <div class="btn-group">
                                <a class="btn btn-success m-bot15" title="Countries">Select Country</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu Listcheck" role="menu">
                                    <li>
                                        <input type="checkbox" /><span>Select All</span></li>
                                    <li>
                                        <input type="checkbox" /><span>United Arab Emirates</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Jordan</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Bahrain</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Iraq</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Kuwait</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Qatar</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-3 text-right">Select All</div>
                        <div class="col-sm-1 col-xs-1">
                            <input type="checkbox" class="" />
                        </div>
                        <div class="btn btn-primary hidetoggle" style="float: right; margin-right: -15px;">
                            <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                        </div>
                    </header>
                    <div class="panel-content divhide">
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Add Sites</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control custom-checkbox">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Edit Sites</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Delete Sites</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">View Sites</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- Sites Permissions End-->

        <!-- Tickets Permissions Start-->
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel panel-heading col-sm-12 col-xs-12">
                        <h5 class="col-sm-4 col-xs-3">Tickets:</h5>
                        <div class="col-sm-2 col-xs-4">
                            <div class="btn-group">
                                <a class="btn btn-success m-bot15" title="Countries">Select Country</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu Listcheck" role="menu">
                                    <li>
                                        <input type="checkbox" /><span>Select All</span></li>
                                    <li>
                                        <input type="checkbox" /><span>United Arab Emirates</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Jordan</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Bahrain</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Iraq</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Kuwait</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Qatar</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-3 text-right">Select All</div>
                        <div class="col-sm-1 col-xs-1">
                            <input type="checkbox" class="" />
                        </div>
                        <div class="btn btn-primary hidetoggle" style="float: right; margin-right: -15px;">
                            <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                        </div>
                    </header>
                    <div class="panel-content divhide">
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Add Tickets</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control custom-checkbox">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Delete Tickets</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Access Admin Panel</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Access Client Panel</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- Tickets Permissions End-->

        <!-- Stock Permissions Start-->
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel panel-heading col-sm-12 col-xs-12">
                        <h5 class="col-sm-4 col-xs-3">Stock:</h5>
                        <div class="col-sm-2 col-xs-4">
                            <div class="btn-group">
                                <a class="btn btn-success m-bot15" title="Countries">Select Country</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu Listcheck" role="menu">
                                    <li>
                                        <input type="checkbox" /><span>Select All</span></li>
                                    <li>
                                        <input type="checkbox" /><span>United Arab Emirates</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Jordan</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Bahrain</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Iraq</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Kuwait</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Qatar</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-3 text-right">Select All</div>
                        <div class="col-sm-1 col-xs-1">
                            <input type="checkbox" class="" />
                        </div>
                        <div class="btn btn-primary hidetoggle" style="float: right; margin-right: -15px;">
                            <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                        </div>
                    </header>
                    <div class="panel-content divhide">
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Add Products</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control custom-checkbox">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Edit Products</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Delete Products</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">View Stock</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- Stock Permissions End-->

        <!-- Tools Permissions Start-->
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel panel-heading col-sm-12 col-xs-12">
                        <h5 class="col-sm-4 col-xs-3">Tools:</h5>
                        <div class="col-sm-2 col-xs-4">
                            <div class="btn-group">
                                <a class="btn btn-success m-bot15" title="Countries">Select Country</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu Listcheck" role="menu">
                                    <li>
                                        <input type="checkbox" /><span>Select All</span></li>
                                    <li>
                                        <input type="checkbox" /><span>United Arab Emirates</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Jordan</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Bahrain</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Iraq</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Kuwait</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Qatar</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-3 text-right">Select All</div>
                        <div class="col-sm-1 col-xs-1">
                            <input type="checkbox" class="" />
                        </div>
                        <div class="btn btn-primary hidetoggle" style="float: right; margin-right: -15px;">
                            <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                        </div>
                    </header>
                    <div class="panel-content divhide">
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Add Tools</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Edit Tools</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Delete Tools</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">View Tools</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- Tools Permissions End-->

        <!-- Other Tools Permissions Start-->
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel panel-heading col-sm-12 col-xs-12">
                        <h5 class="col-sm-4 col-xs-3">Other Tools:</h5>
                        <div class="col-sm-2 col-xs-4">
                            <div class="btn-group">
                                <a class="btn btn-success m-bot15" title="Countries">Select Country</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu Listcheck" role="menu">
                                    <li>
                                        <input type="checkbox" /><span>Select All</span></li>
                                    <li>
                                        <input type="checkbox" /><span>United Arab Emirates</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Jordan</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Bahrain</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Iraq</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Kuwait</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Qatar</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-3 text-right">Select All</div>
                        <div class="col-sm-1 col-xs-1">
                            <input type="checkbox" class="" />
                        </div>
                        <div class="btn btn-primary hidetoggle" style="float: right; margin-right: -15px;">
                            <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                        </div>
                    </header>
                    <div class="panel-content divhide">
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Add Other Tools</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Edit Other Tools</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Delete Other Tools</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">View Other Tools</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- Other Tools Permissions End-->

        <!-- Site Survey Permissions Start-->
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel panel-heading col-sm-12 col-xs-12">
                        <h5 class="col-sm-4 col-xs-3">Site Survey:</h5>
                        <div class="col-sm-2 col-xs-4">
                            <div class="btn-group">
                                <a class="btn btn-success m-bot15" title="Countries">Select Country</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu Listcheck" role="menu">
                                    <li>
                                        <input type="checkbox" /><span>Select All</span></li>
                                    <li>
                                        <input type="checkbox" /><span>United Arab Emirates</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Jordan</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Bahrain</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Iraq</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Kuwait</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Qatar</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-3 text-right">Select All</div>
                        <div class="col-sm-1 col-xs-1">
                            <input type="checkbox" class="" />
                        </div>
                        <div class="btn btn-primary hidetoggle" style="float: right; margin-right: -15px;">
                            <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                        </div>
                    </header>
                    <div class="panel-content divhide">
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Access Admin Panel</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control custom-checkbox">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Access Client Panel</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>
        <!-- Site Survey Permissions End-->

        <!-- Performance Survey Permissions Start-->
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel panel-heading col-sm-12 col-xs-12">
                        <h5 class="col-sm-4 col-xs-3">Performance:</h5>
                        <div class="col-sm-2 col-xs-4">
                            <div class="btn-group">
                                <a class="btn btn-success m-bot15" title="Countries">Select Country</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu Listcheck" role="menu">
                                    <li>
                                        <input type="checkbox" /><span>Select All</span></li>
                                    <li>
                                        <input type="checkbox" /><span>United Arab Emirates</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Jordan</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Bahrain</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Iraq</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Kuwait</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Qatar</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-3 text-right">Select All</div>
                        <div class="col-sm-1 col-xs-1">
                            <input type="checkbox" class="" />
                        </div>
                        <div class="btn btn-primary hidetoggle" style="float: right; margin-right: -15px;">
                            <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                        </div>
                    </header>
                    <div class="panel-content divhide">
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Access Admin Panel</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control custom-checkbox">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Access Client Panel</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>
        <!-- Performance Survey Permissions End-->

        <!-- Installation Permissions Start-->
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel panel-heading col-sm-12 col-xs-12">
                        <h5 class="col-sm-4 col-xs-3">Installation:</h5>
                        <div class="col-sm-2 col-xs-4">
                            <div class="btn-group">
                                <a class="btn btn-success m-bot15" title="Countries">Select Country</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu Listcheck" role="menu">
                                    <li>
                                        <input type="checkbox" /><span>Select All</span></li>
                                    <li>
                                        <input type="checkbox" /><span>United Arab Emirates</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Jordan</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Bahrain</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Iraq</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Kuwait</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Qatar</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-3 text-right">Select All</div>
                        <div class="col-sm-1 col-xs-1">
                            <input type="checkbox" class="" />
                        </div>
                        <div class="btn btn-primary hidetoggle" style="float: right; margin-right: -15px;">
                            <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                        </div>
                    </header>
                    <div class="panel-content divhide">
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Add Logs</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control custom-checkbox">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Edit Logs</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Delete Logs</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">View Logs</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Installation Permissions End-->

        <!-- Maintenance Permissions Start-->
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel panel-heading col-sm-12 col-xs-12">
                        <h5 class="col-sm-4 col-xs-3">Maintenance:</h5>
                        <div class="col-sm-2 col-xs-4">
                            <div class="btn-group">
                                <a class="btn btn-success m-bot15" title="Countries">Select Country</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu Listcheck" role="menu">
                                    <li>
                                        <input type="checkbox" /><span>Select All</span></li>
                                    <li>
                                        <input type="checkbox" /><span>United Arab Emirates</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Jordan</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Bahrain</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Iraq</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Kuwait</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Qatar</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-3 text-right">Select All</div>
                        <div class="col-sm-1 col-xs-1">
                            <input type="checkbox" class="" />
                        </div>
                        <div class="btn btn-primary hidetoggle" style="float: right; margin-right: -15px;">
                            <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                        </div>
                    </header>
                    <div class="panel-content divhide">
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Add Logs</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control custom-checkbox">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Edit Logs</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Delete Logs</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">View Logs</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Maintenance Permissions End-->

        <!-- Test Cases Permissions Start-->
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel panel-heading col-sm-12 col-xs-12">
                        <h5 class="col-sm-4 col-xs-3">Test Cases:</h5>
                        <div class="col-sm-2 col-xs-4">
                            <div class="btn-group">
                                <a class="btn btn-success m-bot15" title="Countries">Select Country</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu Listcheck" role="menu">
                                    <li>
                                        <input type="checkbox" /><span>Select All</span></li>
                                    <li>
                                        <input type="checkbox" /><span>United Arab Emirates</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Jordan</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Bahrain</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Iraq</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Kuwait</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Qatar</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-3 text-right">Select All</div>
                        <div class="col-sm-1 col-xs-1">
                            <input type="checkbox" class="" />
                        </div>
                        <div class="btn btn-primary hidetoggle" style="float: right; margin-right: -15px;">
                            <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                        </div>
                    </header>
                    <div class="panel-content divhide">
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Add Logs</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control custom-checkbox">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Edit Logs</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Delete Logs</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">View Logs</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Test Cases Permissions End-->

        <!-- Project Documents Permissions Start-->
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel panel-heading col-sm-12 col-xs-12">
                        <h5 class="col-sm-4 col-xs-3">Project Documents:</h5>
                        <div class="col-sm-2 col-xs-4">
                            <div class="btn-group">
                                <a class="btn btn-success m-bot15" title="Countries">Select Country</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu Listcheck" role="menu">
                                    <li>
                                        <input type="checkbox" /><span>Select All</span></li>
                                    <li>
                                        <input type="checkbox" /><span>United Arab Emirates</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Jordan</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Bahrain</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Iraq</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Kuwait</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Qatar</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-3 text-right">Select All</div>
                        <div class="col-sm-1 col-xs-1">
                            <input type="checkbox" class="" />
                        </div>
                        <div class="btn btn-primary hidetoggle" style="float: right; margin-right: -15px;">
                            <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                        </div>
                    </header>
                    <div class="panel-content divhide">
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Add Documents</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control custom-checkbox">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Edit Documents</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Delete Documents</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">View Documents</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Project Documents Permissions End-->

        <!-- General Documents Permissions Start-->
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel panel-heading col-sm-12 col-xs-12">
                        <h5 class="col-sm-4 col-xs-3">General Documents:</h5>
                        <div class="col-sm-2 col-xs-4">
                            <div class="btn-group">
                                <a class="btn btn-success m-bot15" title="Countries">Select Country</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu Listcheck" role="menu">
                                    <li>
                                        <input type="checkbox" /><span>Select All</span></li>
                                    <li>
                                        <input type="checkbox" /><span>United Arab Emirates</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Jordan</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Bahrain</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Iraq</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Kuwait</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Qatar</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-3 text-right">Select All</div>
                        <div class="col-sm-1 col-xs-1">
                            <input type="checkbox" class="" />
                        </div>
                        <div class="btn btn-primary hidetoggle" style="float: right; margin-right: -15px;">
                            <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                        </div>
                    </header>
                    <div class="panel-content divhide">
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Add Documents</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control custom-checkbox">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Edit Documents</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Delete Documents</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">View Documents</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- General Documents Permissions End-->

        <!-- Reports Permissions Start-->
        <section class="panel">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <header class="panel panel-heading col-sm-12 col-xs-12">
                        <h5 class="col-sm-4 col-xs-3">Reports:</h5>
                        <div class="col-sm-2 col-xs-4">
                            <div class="btn-group">
                                <a class="btn btn-success m-bot15" title="Countries">Select Country</a>
                                <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                                <ul class="dropdown-menu Listcheck" role="menu">
                                    <li>
                                        <input type="checkbox" /><span>Select All</span></li>
                                    <li>
                                        <input type="checkbox" /><span>United Arab Emirates</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Jordan</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Bahrain</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Iraq</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Kuwait</span></li>
                                    <li>
                                        <input type="checkbox" /><span>Qatar</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-3 text-right">Select All</div>
                        <div class="col-sm-1 col-xs-1">
                            <input type="checkbox" class="" />
                        </div>
                        <div class="btn btn-primary hidetoggle" style="float: right; margin-right: -15px;">
                            <a href="#" class="btn-minimize ahide"><i class="fa fa-chevron-up btnhide"></i></a>
                        </div>
                    </header>
                    <div class="panel-content divhide">
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Assets Value</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">TAT</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Failure Rate</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Failure Cost</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Repair vs. Replace</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <label class="col-sm-5 col-xs-8 control-label">Failure vs. Others</label>
                            <div class="col-sm-1 col-xs-1">
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Reports Permissions End-->

    </div>
    <!-- Permissions Form-Group End-->
