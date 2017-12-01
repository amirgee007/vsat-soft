{{ csrf_field() }}
<!-- General Info start-->

{{--@if(site->is_access_normal=='1') checked @endif todo: --}}

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
                           value="{{ $site->id_number ?? $site_id}}" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="S-name">Site Name</label>
                <div class="col-sm-10">
                    <input required type="text" class="form-control" id="S-name" placeholder="Site Name" name="name" value="{{@$site->name}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="S-organization">Organization Name</label>
                <div class="col-sm-10">
                    <input required type="text" class="form-control" id="S-organization" placeholder="Organization Name" name="org_name" value="{{@$site->org_name}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Site Map Presentation</label>
                <div class="col-lg-offset-2 col-lg-10">
                    <img class="imges" src="{{asset(@$site->site_map_presentation ? 'uploads/sites/'.$site->site_map_presentation : 'img/noimage.gif')}}" alt="Site Map Presentation" />
                    <input required class="btn btn-default image-type" type="file" accept="image/*" name="site_map_presentation">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Schematic Presentation of the Installation Area</label>
                <div class="col-lg-offset-2 col-lg-10">
                    <img class="imges" src="{{asset(@$site->presentation_of_ins_area ? 'uploads/sites/'.$site->presentation_of_ins_area : 'img/noimage.gif')}}" alt="Site Map Presentation" />
                    <input required class="btn btn-default image-type" type="file" accept="image/*" name="presentation_of_ins_area">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Site Address Auto</label>
                <span class="col-sm-10">
                    <input id="autocomplete" placeholder="Street ,city ,state ,country autocomplete" class="form-control" type="text">
                </span>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <label class="col-sm-2 control-label">Street</label>
                    <span class="col-sm-4">
                        <input required type="text" class="form-control" placeholder="Street" name="street" value="{{@$site->street}}" id="street_number">
                    </span>
                    <label class="col-sm-2 control-label">Area</label>
                    <span class="col-sm-4">
                        <input required type="text" class="form-control" placeholder="Area" name="area" value="{{@$site->area}}" id="route">
                    </span>
                    <label class="col-sm-2 col-xs-3 control-label">City</label>
                    <div class="col-sm-4 col-xs-3">
                        <input required type="text" class="form-control" placeholder="City" name="city" id="locality" value="{{@$site->city}}">
                    </div>
                    <label class="col-sm-2 control-label">State</label>
                    <span class="col-sm-4">
                        <input required type="text" class="form-control" placeholder="State" name="state" value="{{@$site->state}}" id="administrative_area_level_1">
                    </span>
                    <label class="col-sm-2 control-label">Zip Code</label>
                    <span class="col-sm-4">
                         <input class="form-control field" name="zip_code" value="{{@$site->zip_code}}" placeholder="Zip Code" id="postal_code">
                    </span>
                    <label class="col-sm-2 col-xs-3 control-label">Country</label>
                    <span class="col-sm-4">
                        <input class="form-control field" name="country" placeholder="country" value="{{@$site->country}}" id="country">
                   </span>
                    <label class="col-sm-2 control-label">Latitude</label>
                    <span class="col-sm-4">
                        <input required type="text" class="form-control" placeholder="Latitude" name="latitude" value="{{@$site->latitude}}" id="longitude">
                    </span>
                    <label class="col-sm-2 control-label">Longitude</label>
                    <span class="col-sm-4">
                        <input required type="text" class="form-control" placeholder="Longitude" name="longitude" value="{{@$site->longitude}}" id="latitude">
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
                                <input required type="text" class="form-control" placeholder="Name" name="tech_name" value="{{@$site->tech_name}}">
                            </span>
                            <label class="col-sm-2 control-label">Cell</label>
                            <span class="col-sm-4">
                                <input required type="tel" class="form-control" placeholder="Cell" name="tech_cell" value="{{@$site->tech_cell}}">
                            </span>
                            <label class="col-sm-2 control-label">Email</label>
                            <span class="col-sm-4">
                                <input required type="email" class="form-control" placeholder="Email" name="tech_email" value="{{@$site->tech_email}}">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">2nd Level - Project Coordinator</label>
                        <div class="col-sm-10">
                            <label class="col-sm-2 control-label">Name</label>
                            <span class="col-sm-10">
                                <input required type="text" class="form-control" placeholder="Name" name="proj_coordinator_name" value="{{@$site->proj_coordinator_name}}">
                            </span>
                            <label class="col-sm-2 control-label">Cell</label>
                            <span class="col-sm-4">
                                <input required type="tel" class="form-control" placeholder="Cell" name="proj_coordinator_cell" value="{{@$site->proj_coordinator_cell}}">
                            </span>
                            <label class="col-sm-2 control-label">Email</label>
                            <span class="col-sm-4">
                                <input required type="email" class="form-control" placeholder="Email" name="proj_coordinator_email" value="{{@$site->proj_coordinator_email}}">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">3rd Level - Project Manager</label>
                        <div class="col-sm-10">
                            <label class="col-sm-2 control-label">Name</label>
                            <span class="col-sm-10">
                                <input required type="text" class="form-control" placeholder="Name" name="proj_manager_name" value="{{@$site->proj_manager_name}}">
                            </span>
                            <label class="col-sm-2 control-label">Cell</label>
                            <span class="col-sm-4">
                                <input required type="tel" class="form-control" placeholder="Cell" name="proj_manager_cell" value="{{@$site->proj_manager_cell}}">
                            </span>
                            <label class="col-sm-2 control-label">Email</label>
                            <span class="col-sm-4">
                                <input required type="email" class="form-control" placeholder="Email" name="proj_manager_email" value="{{@$site->proj_manager_email}}">
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
                                <input required type="text" class="form-control" placeholder="Days" name="working_days" value="{{@$site->working_days}}">
                            </span>
                            <label class="col-sm-2 control-label">Hours</label>
                            <span class="col-sm-4">
                                <input required type="text" class="form-control" placeholder="Hours" name="working_hours" value="{{@$site->working_hours}}">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">
                            Is access after normal working hours on a weekday possible?</label>
                        <div class="col-sm-6 col-xs-6">
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">Yes</label>
                                <input {{@$site->is_access_normal=='1' ? 'checked' : ''}} type="radio" class="" name="is_access_normal" value="1">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">No</label>
                                <input {{@$site->is_access_normal=='0' ? 'checked' : ''}} type="radio" class="" name="is_access_normal" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Is access/work during weekends possible?</label>
                        <div class="col-sm-6 col-xs-6">
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">Yes</label>
                                <input {{@$site->is_access_normal==1 ? 'checked' :''}} type="radio" class="" name="is_access_during_week" value="1">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">No</label>
                                <input {{@$site->is_access_normal==0 ? 'checked' :''}} type="radio" class="" name="is_access_during_week" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">
                            Describe any special identification required for access?</label>
                        <div class="col-sm-10">
                            <textarea required class="col-sm-12" cols="20" name="identification_for_access" rows="2">{{@$site->identification_for_access}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Required time to gain access</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" name="required_access_time_" value="{{@$site->required_access_time_}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Access validity period</label>
                        <div class="col-sm-10">
                            <input required type="text" class="form-control" name="access_validity_period" value="{{@$site->access_validity_period}}">
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
                                <input {{@$site->have_direct_los==1 ? 'checked' : ''}} type="radio" class="" name="have_direct_los" value="1">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">No</label>
                                <input {{@$site->have_direct_los==0 ? 'checked' : ''}} type="radio" class="" name="have_direct_los" value="0">
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
                                <option {{@$site->cables_used=="LMR cable (TX)" ? 'selected' : ''}} value="LMR cable (TX)">LMR cable (TX)</option>
                                <option {{@$site->cables_used=="Sat2 cable (RX)" ? 'selected' : ''}} value="Sat2 cable (RX)">Sat2 cable (RX)</option>
                                <option {{@$site->cables_used=="Others" ? 'selected' : ''}} value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Antenna location</label>
                        <div class="col-lg-10">
                            <select required class="form-control m-bot15" name="antenna_location">
                                <option {{@$site->antenna_location=="Ground" ? 'selected' : ''}} value="Ground">Ground</option>
                                <option {{@$site->antenna_location=="Roof" ? 'selected' : ''}} value="Roof">Roof</option>
                                <option {{@$site->antenna_location=="Wall" ? 'selected' : ''}} value="Wall">Wall</option>
                                <option {{@$site->antenna_location=="Others" ? 'selected' : ''}} value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Is the Antenna location strong enough to support the antenna assembly?</label>
                        <div class="col-sm-6 col-xs-6">
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">Yes</label>
                                <input {{@$site->is_strong_enough==1 ? 'checked' : ''}} type="radio" class="" name="is_strong_enough" value="1">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">No</label>
                                <input {{@$site->is_strong_enough==0 ? 'checked' : ''}} type="radio" class="" name="is_strong_enough" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">

                        <label class="col-lg-2 control-label">Picture/s of Antenna mount location</label>
                        <div class="col-lg-offset-2 col-lg-10">
                            <span class="col-sm-4">
                            <img class="imges" src="{{asset(@$site->antenna_mount_loc1 ? 'uploads/sites/'.$site->antenna_mount_loc1 : 'img/noimage.gif')}}" alt="Antenna Mount Location" />
                            <input required class="btn btn-default form-control image-type" type="file" accept="image/*" name="antenna_mount_loc[]">
                            </span>
                            <span class="col-sm-4">
                            <img class="imges" src="{{asset(@$site->antenna_mount_loc2 ? 'uploads/sites/'.$site->antenna_mount_loc2 : 'img/noimage.gif')}}" alt="Antenna Mount Location" />
                            <input required class="btn btn-default form-control image-type" type="file" accept="image/*" name="antenna_mount_loc[]">
                            </span>
                            <span class="col-sm-4">
                            <img class="imges" src="{{asset(@$site->antenna_mount_loc3 ? 'uploads/sites/'.$site->antenna_mount_loc3 : 'img/noimage.gif')}}" alt="Antenna Mount Location" />
                            <input required class="btn btn-default form-control image-type" type="file" accept="image/*" name="antenna_mount_loc[]">
                            </span>
                            <span class="col-sm-4">
                            <img class="imges" src="{{asset(@$site->antenna_mount_loc4 ? 'uploads/sites/'.$site->antenna_mount_loc4 : 'img/noimage.gif')}}" alt="Antenna Mount Location" />
                            <input required class="btn btn-default form-control image-type" type="file" accept="image/*" name="antenna_mount_loc[]">
                            </span>
                            <span class="col-sm-4">
                            <img class="imges" src="{{asset(@$site->antenna_mount_loc5 ? 'uploads/sites/'.$site->antenna_mount_loc5 : 'img/noimage.gif')}}" alt="Antenna Mount Location" />
                            <input required class="btn btn-default form-control image-type" type="file" accept="image/*" name="antenna_mount_loc[]">

                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Electrical grounding available at the antenna position</label>
                        <div class="col-sm-6 col-xs-6">
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">Yes</label>
                                <input {{@$site->is_electrical_grounding==1 ? 'checked' : ''}} type="radio" class="" name="is_electrical_grounding" value="1">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">No</label>
                                <input {{@$site->is_electrical_grounding==0 ? 'checked' : ''}} type="radio" class="" name="is_electrical_grounding" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Lightning protection available</label>
                        <div class="col-sm-6 col-xs-6">
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">Yes</label>
                                <input {{@$site->is_lightening_protection==1 ? 'checked' : ''}} type="radio" class="" name="is_lightening_protection" value="1">
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <label class="control-label">No</label>
                                <input {{@$site->is_lightening_protection==0 ? 'checked' : ''}} type="radio" class="" name="is_lightening_protection" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Method of transporting dish to the roof</label>
                        <div class="col-lg-10">
                            <select required class="form-control m-bot15" name="method_of_transporting">
                                <option value="">Select Method</option>
                                <option {{@$site->method_of_transporting== 'By hands'? 'selected' : ''}} value="By hands">By hands</option>
                                <option {{@$site->method_of_transporting== 'Elevator'? 'selected' : ''}} value="Elevator">Elevator</option>
                                <option {{@$site->method_of_transporting== 'Crane'? 'selected' : ''}} value="Crane">Crane</option>
                                <option {{@$site->method_of_transporting== 'Others'? 'selected' : ''}} value="Others">Others</option>
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
                            <textarea required class="col-sm-12" cols="20" rows="2" name="comments">{!! @$site->comments !!}</textarea>
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
                                <option {{@$site->antenna_size== '1.2 m'? 'selected' : ''}} value="1.2 m">1.2 m</option>
                                <option {{@$site->antenna_size== '1.8 m'? 'selected' : ''}} value="1.8 m">1.8 m</option>
                                <option {{@$site->antenna_size== '2.4 m'? 'selected' : ''}} value="2.4 m">2.4 m</option>
                                <option {{@$site->antenna_size== '3.8 m'? 'selected' : ''}} value="3.8 m">3.8 m</option>
                                <option {{@$site->antenna_size== 'Others'? 'selected' : ''}} value="Others">Others</option>
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

                                <option {{@$site->antenna_size== '6.35 cm'? 'selected' : ''}} value="6.35 cm">6.35 cm</option>
                                <option {{@$site->antenna_size== '8.89 cm'? 'selected' : ''}} value="8.89 cm">6.89 cm</option>
                                <option {{@$site->antenna_size== '15.23 cm'? 'selected' : ''}} value="15.23 cm">15.23 cm</option>
                                <option {{@$site->antenna_size== '25.4 cm'? 'selected' : ''}} value="25.4 cm">25.4 cm</option>
                                <option {{@$site->antenna_size== 'Others'? 'selected' : ''}} value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Pole - outside diameter</label>
                        <div class="col-lg-10">
                            <select required class="form-control m-bot15" name="pole_outside_diameter">
                                <option {{@$site->pole_outside_diameter== '7.32 cm'? 'selected' : ''}} value="7.32 cm">7.32 cm</option>
                                <option {{@$site->pole_outside_diameter== '10.16 cm'? 'selected' : ''}} value="10.16 cm">10.16 cm</option>
                                <option {{@$site->pole_outside_diameter== '16.83 cm'? 'selected' : ''}} value="16.83 cm">16.83 cm</option>
                                <option {{@$site->pole_outside_diameter== '27.3 cm'? 'selected' : ''}} value="27.3 cm">27.3 cm</option>
                                <option {{@$site->pole_outside_diameter== 'Others'? 'selected' : ''}} value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Mount Type</label>
                        <div class="col-lg-10">
                            <select required class="form-control m-bot15" name="mount_type" >
                                <option {{@$site->mount_type== 'Non-penetrating mount' ? 'selected' : ''}} value="Non-penetrating mount">Non-penetrating mount (iron construction on ground/roof)</option>
                                <option {{@$site->mount_type== 'Pole mount' ? 'selected' : ''}} value="Pole mount">Pole mount (pole directly in the ground/concrete)</option>
                                <option {{@$site->mount_type== 'Wall mount' ? 'selected' : ''}} value="Wall mount">Wall mount (iron construction screwed onto wall)</option>
                                <option {{@$site->mount_type== 'Others' ? 'selected' : ''}} value="Others">Others</option>
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
                        <option {{@$site->status== '1' ? 'selected' : ''}} value="1">Enable</option>
                        <option {{@$site->status== '0' ? 'selected' : ''}} value="0">Disable</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <section class="panel">
                    <header class="panel-heading">
                        Assets
                        <div class="btn-group pull-right">
                            <a class="btn btn-default addasset" href="javascript:void(0)"><i class="fa fa-plus-square"></i></a>
                        </div>
                    </header>
                    <div class="panel-body" id="add-assets">
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
                                    <option {{array_key_exists($branch->branch_id , $selected_branches) ? 'selected' : ''}} value="{{$branch->branch_id}}">{{ $branch->name }}</option>
                                @endforeach
                            </select>
                        </div>
                </section>
            </div>
        </div>
    </div>
@section('footer_scripts')
    @include('admin.common.add-assets')
@stop