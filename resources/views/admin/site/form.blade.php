{{ csrf_field() }}
<!-- General Info start-->
<input type="hidden" name="site_id" value="{{@$site->site_id}}">

    <div class="panel panel-primary form-group">
        <div class="panel panel-heading col-sm-2">
            <h5>General Info:</h5>
        </div>
        <div class="panel-content" style="clear: both;">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="S-number">Site ID Number</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="S-number" disabled
                           value="{{ @$site->id_number ?? $site_id}}" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="S-name">Site Name</label>
                <div class="col-sm-10">
                    <input required type="text" class="form-control" id="S-name" placeholder="Site Name" name="name" value="name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="S-organization">Organization Name</label>
                <div class="col-sm-10">
                    <input required type="text" class="form-control" id="S-organization" placeholder="Organization Name" name="org_name" value="org_name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Site Map Presentation</label>
                <div class="col-lg-offset-2 col-lg-10">
                    <img src="{{asset('img/noimage.gif')}}" alt="" />
                    <input required class="btn btn-default" type="file" name="site_map_presentation">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Schematic Presentation of the Installation Area</label>
                <div class="col-lg-offset-2 col-lg-10">
                    <img src="{{asset('img/noimage.gif')}}" alt="" />
                    <input required class="btn btn-default" type="file" name="presentation_of_ins_area">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Site Address Auto</label>
                <span class="col-sm-10">
                    <input id="autocomplete" onFocus="geolocate()" placeholder="Street ,city ,state ,country autocomplete" class="form-control" type="text"></input>
                </span>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label"></label>

                <div class="col-sm-10">
                    <label class="col-sm-2 col-xs-3 control-label">Country</label>
                    <div class="col-sm-4 col-xs-3">
                        <input required type="text" class="form-control" name="country" id="Country" placeholder="country" value="street"></input>
                    </div>
                    <label class="col-sm-2 col-xs-3 control-label">City</label>
                    <div class="col-sm-4 col-xs-3">
                        <input required type="text" class="form-control" placeholder="City" name="city" id="locality" value="city"></input>
                    </div>
                    <label class="col-sm-2 control-label">Street</label>
                    <span class="col-sm-4">
                        <input required type="text" class="form-control" placeholder="Street" name="street" value="street" >
                    </span>
                    <label class="col-sm-2 control-label">Area</label>
                    <span class="col-sm-4">
                        <input required type="text" class="form-control" placeholder="Area" name="area" value="area">
                    </span>
                    <label class="col-sm-2 control-label">State</label>
                    <span class="col-sm-4">
                        <input required type="text" class="form-control" placeholder="State" name="state" value="state">
                    </span>
                    <label class="col-sm-2 control-label">Zip Code</label>
                    <span class="col-sm-4">
                        <input required type="text" class="form-control" placeholder="Zip Code" name="zip_code" value="zip_code">
                    </span>
                    <label class="col-sm-2 control-label">Latitude</label>
                    <span class="col-sm-4">
                        <input required type="text" class="form-control" placeholder="Latitude" name="latitude" value="latitude">
                    </span>
                    <label class="col-sm-2 control-label">Longitude</label>
                    <span class="col-sm-4">
                        <input required type="text" class="form-control" placeholder="Longitude" name="longitude" value="longitude">
                    </span>
                </div>
            </div>
            <!-- Site Contact start-->
            <div class="panel panel-primary form-group">
                <div class="panel panel-heading col-sm-2">
                    <h5>Site Contact:</h5>
                </div>
                <div class="panel-content" style="clear: both;">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">1st Level - Technical</label>
                        <div class="col-sm-10">
                            <label class="col-sm-2 control-label">Name</label>
                            <span class="col-sm-10">
                                <input required type="text" class="form-control" placeholder="Name" name="tech_name" value="tech_name">
                            </span>
                            <label class="col-sm-2 control-label">Cell</label>
                            <span class="col-sm-4">
                                <input required type="tel" class="form-control" placeholder="Cell" name="tech_cell" value="tech_cell">
                            </span>
                            <label class="col-sm-2 control-label">Email</label>
                            <span class="col-sm-4">
                                <input required type="email" class="form-control" placeholder="Email" name="tech_email" value="amirgee007@yahoo.com">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">2nd Level - Project Coordinator</label>
                        <div class="col-sm-10">
                            <label class="col-sm-2 control-label">Name</label>
                            <span class="col-sm-10">
                                <input required type="text" class="form-control" placeholder="Name" name="proj_coordinator_name" value="proj_coordinator_name">
                            </span>
                            <label class="col-sm-2 control-label">Cell</label>
                            <span class="col-sm-4">
                                <input required type="tel" class="form-control" placeholder="Cell" name="proj_coordinator_cell" value="proj_coordinator_cell">
                            </span>
                            <label class="col-sm-2 control-label">Email</label>
                            <span class="col-sm-4">
                                <input required type="email" class="form-control" placeholder="Email" name="proj_coordinator_email" value="amirgee007@yahoo.com">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">3rd Level - Project Manager</label>
                        <div class="col-sm-10">
                            <label class="col-sm-2 control-label">Name</label>
                            <span class="col-sm-10">
                                <input required type="text" class="form-control" placeholder="Name" name="proj_manager_name" value="proj_manager_name">
                            </span>
                            <label class="col-sm-2 control-label">Cell</label>
                            <span class="col-sm-4">
                                <input required type="tel" class="form-control" placeholder="Cell" name="proj_manager_cell" value="proj_manager_cell">
                            </span>
                            <label class="col-sm-2 control-label">Email</label>
                            <span class="col-sm-4">
                                <input required type="email" class="form-control" placeholder="Email" name="proj_manager_email" value="amirgee007@yahoo.com">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Site Contact end-->
            <!-- Site Access start-->
            <div class="panel panel-primary form-group">
                <div class="panel panel-heading col-sm-2">
                    <h5>Site Access:</h5>
                </div>
                <div class="panel-content" style="clear: both;">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Site working Schedule</label>
                        <div class="col-sm-10">
                            <label class="col-sm-2 control-label">Days</label>
                            <span class="col-sm-4">
                                <input required type="text" class="form-control" placeholder="Days" name="working_days" value="working_days">
                            </span>
                            <label class="col-sm-2 control-label">Hours</label>
                            <span class="col-sm-4">
                                <input required type="text" class="form-control" placeholder="Hours" name="working_hours" value="working_hours">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">
                            Is access after normal working hours on a weekday possible?</label>
                        <div class="col-sm-6 col-xs-6">
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">Yes</label>
                                <input checked type="radio" class="" name="is_access_normal" value="1">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">No</label>
                                <input type="radio" class="" name="is_access_normal" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Is access/work during weekends possible?</label>
                        <div class="col-sm-6 col-xs-6">
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">Yes</label>
                                <input checked type="radio" class="" name="is_access_during_week" value="1">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">No</label>
                                <input type="radio" class="" name="is_access_during_week" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">
                            Describe any special identification required for access?</label>
                        <div class="col-sm-10">
                            <textarea required class="col-sm-12" cols="20" name="identification_for_access" rows="2">required for access</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Required time to gain access</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" name="required_access_time_" value="required_access_time_">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Access validity period</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" name="access_validity_period" value="access_validity_period">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Site Access end-->
            <!-- Site Antenna Location start-->
            <div class="panel panel-primary form-group">
                <div class="panel panel-heading col-sm-2">
                    <h5>Site Antenna Location:</h5>
                </div>
                <div class="panel-content" style="clear: both;">
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Antenna location have a direct line-of-sight to the satellite?</label>
                        <div class="col-sm-6 col-xs-6">
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">Yes</label>
                                <input checked type="radio" class="" name="have_direct_los" value="1">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">No</label>
                                <input type="radio" class="" name="have_direct_los" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Cable length between the antenna and the computer room? (max 100 m)</label>
                        <div class="col-sm-10 password">
                            <input required type="number" max="100" class="form-control" placeholder="60" name="cable_length" value="60">
                            <i class="fa">m</i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">The cables to be used</label>
                        <div class="col-lg-10">
                            <select required class="form-control m-bot15" name="cables_used">
                                <option value="LMR cable (TX)">LMR cable (TX)</option>
                                <option value="Sat2 cable (RX)">Sat2 cable (RX)</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Antenna location</label>
                        <div class="col-lg-10">
                            <select required class="form-control m-bot15" name="antenna_location">
                                <option selected value="Ground">Ground</option>
                                <option value="Roof">Roof</option>
                                <option value="Wall">Wall</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Is the Antenna location strong enough to support the antenna assembly?</label>
                        <div class="col-sm-6 col-xs-6">
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">Yes</label>
                                <input checked type="radio" class="" name="is_strong_enough" value="1">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">No</label>
                                <input type="radio" class="" name="is_strong_enough" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">

                        <label class="col-lg-2 control-label">Picture/s of Antenna mount location</label>
                        <div class="col-lg-offset-2 col-lg-10">
                            <span class="col-sm-4">
                            <img src="{{asset('img/noimage.gif')}}" alt="" />
                            <input required class="btn btn-default form-control" type="file" name="antenna_mount_loc[]">
                            </span>
                            <span class="col-sm-4">
                            <img src="{{asset('img/noimage.gif')}}" alt="" />
                            <input class="btn btn-default form-control" type="file" name="antenna_mount_loc[]">
                            </span>
                            <span class="col-sm-4">
                            <img src="{{asset('img/noimage.gif')}}" alt="" />
                            <input class="btn btn-default form-control" type="file" name="antenna_mount_loc[]">
                            </span>
                            <span class="col-sm-4">
                            <img src="{{asset('img/noimage.gif')}}" alt="" />
                            <input class="btn btn-default form-control" type="file" name="antenna_mount_loc[]">
                            </span>
                            <span class="col-sm-4">
                            <img src="{{asset('img/noimage.gif')}}" alt="" />
                            <input class="btn btn-default form-control" type="file" name="antenna_mount_loc[]">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Electrical grounding available at the antenna position</label>
                        <div class="col-sm-6 col-xs-6">
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">Yes</label>
                                <input checked type="radio" class="" name="is_electrical_grounding" value="1">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">No</label>
                                <input type="radio" class="" name="is_electrical_grounding" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Lightning protection available</label>
                        <div class="col-sm-6 col-xs-6">
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">Yes</label>
                                <input checked type="radio" class="" name="is_lightening_protection" value="1">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">No</label>
                                <input type="radio" class="" name="is_lightening_protection" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Method of transporting dish to the roof</label>
                        <div class="col-lg-10">
                            <select required class="form-control m-bot15" name="method_of_transporting">
                                <option selected value="By hands">By hands</option>
                                <option value="Elevator">Elevator</option>
                                <option value="Crane">Crane</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Roof access (m<sup>2</sup>)</label>
                        <div class="col-sm-10 password">
                            <input required type="number" min="0" class="form-control" placeholder="15" value="25">
                            <i class="fa">m<sup>2</sup></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Comments</label>
                        <div class="col-sm-10">
                            <textarea required class="col-sm-12" cols="20" rows="2" name="comments">commmentsssssssss</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Site Antenna Location end-->
            <!-- Mounting Requirement start-->
            <div class="panel panel-primary form-group">
                <div class="panel panel-heading col-sm-2">
                    <h5>Mounting Requirement:</h5>
                </div>
                <div class="panel-content" style="clear: both;">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Antenna size (dish diameter)</label>
                        <div class="col-lg-10">
                            <select required class="form-control m-bot15" name="antenna_size">
                                <option value="1.2 m">1.2 m</option>
                                <option value="1.8 m">1.8 m</option>
                                <option value="2.4 m">2.4 m</option>
                                <option value="3.8 m">3.8 m</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Pole size</label>
                        <div class="col-lg-10">
                            <select required class="form-control m-bot15" name="pole_size">
                                <option value="6.35 cm">6.35 cm</option>
                                <option value="8.89 cm"> 8.89 cm</option>
                                <option value="15.23 cm">15.23 cm</option>
                                <option value="25.4 cm">25.4 cm</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Pole - outside diameter</label>
                        <div class="col-lg-10">
                            <select required class="form-control m-bot15" name="pole_outside_diameter">
                                <option value="7.32">7.32 cm</option>
                                <option value="10.16 cm">10.16 cm</option>
                                <option value="16.83 cm">16.83 cm</option>
                                <option value="27.3 cm">27.3 cm</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Mount Type</label>
                        <div class="col-lg-10">
                            <select required class="form-control m-bot15" name="mount_type" >
                                <option selected value="Non-penetrating mount">Non-penetrating mount (iron construction on ground/roof)</option>
                                <option value="Pole mount">Pole mount (pole directly in the ground/concrete)</option>
                                <option value="Wall mount">Wall mount (iron construction screwed onto wall)</option>
                                <option>Others</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mounting Requirement end-->
        </div>
    </div>
    <div class="panel panel-default form-group">
        <div class="panel panel-heading col-sm-2">
            <h5>Admin Use Only:</h5>
        </div>
        <div class="panel-content" style="clear: both;">
            <div class="form-group">
                <label class="col-lg-2 control-label">Status</label>
                <div class="col-lg-10">
                    <select required class="form-control m-bot15" name="status">
                        <option value="1">Enable</option>
                        <option value="0">Disable</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <section class="panel">
                    <header class="panel-heading">
                        Assets
                    </header>
                    <div class="panel-body">
                        <label class="col-lg-2 control-label">Add a Part</label>
                        <div class="col-sm-4">
                            <select class="form-control m-bot15">
                                    <option>Antennas</option>
                                    <option>BUC</option>
                                    <option>LNB</option>
                                    <option>Modem</option>
                                    <option>Antenna Mounts</option>
                                    <option>Router</option>
                                    <option>Switch</option>
                                    <option>Servers</option>
                                    <option>Hotspot</option>
                                    <option>Wireless Controller</option>
                                    <option>WAPs</option>
                                    <option>VoIP Phones</option>
                                    <option>Thin Clients</option>
                                    <option>Webcam</option>
                                    <option>UPS</option>
                                    <option>Rack</option>
                                    <option>Headset</option>
                                    <option>Cisco</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-sm-2 control-label">QTY</label>
                            <span class="col-sm-8">
                                <input type="number" class="form-control">
                            </span>
                        </div>
                    </div>
                </section>
            </div>
            <div class="form-group">
                <section class="panel">
                    <header class="panel-heading">
                        Related Branches
                    </header>
                        <label class="col-lg-2 control-label">Add Branch</label>
                        <div class="col-lg-8">
                            <select required class="form-control m-bot15" multiple="multiple" name="site_branches" id="add_branch">
                               <option value="">Select Branch</option>
                                @foreach($branches AS $branch)
                                <option value="{{$branch->branch_id }}">{{ $branch->name }}</option>
                                @endforeach
                            </select>
                        </div>
                </section>
            </div>
        </div>
    </div>
 @section('footer_scripts')
     <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet"/>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
     {{--<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}"></script>--}}
     <!--todo: remove CDNs-->
     <script>
         $(function () {
             $('#add_branch').select2({
                 placeholder: "Select Related Branches",
                 allowClear: true
             });


         });

     </script>
 @stop