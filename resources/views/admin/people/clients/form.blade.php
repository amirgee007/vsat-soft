{{ csrf_field() }}
<!-- General Info start-->
<div class="panel panel-primary form-group">
    <section class="panel">
        <header class="panel panel-heading col-sm-2 col-xs-3">
            <h5>General Info:</h5>
        </header>
        <div class="panel-content" style="clear: both;">
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label" for="C-number">Client ID Number</label>
                <div class="col-sm-10 col-xs-9">
                    <input  type="text" class="form-control" id="C-number" disabled
                            value="{{@$client->client_number ?? $data['client_no']}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label" for="O-name">Organization Name</label>
                <div class="col-sm-10 col-xs-9">
                    <input required name="org_name" value="{{@$client->org_name}}" type="text" maxlength="50" class="form-control" placeholder="Organization Name">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Client Address</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">Country</label>
                    <div class="col-sm-4 col-xs-3">
                        <select required name="country_id" class="form-control m-bot15 country" id="country">
                            <option value="">Select Country</option>
                            @foreach($countries as $country)
                            <option @if(@$client->country_id==$country->country_id) selected @endif value="{{$country->country_id}}">{{$country->full_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <label class="col-sm-2 col-xs-3 control-label">City</label>
                    <div class="col-sm-4 col-xs-3">
                        <select required name="city_id" id="city" class="form-control m-bot15 city">
                            @if(@$client->city_id)
                            <option selected value="{{$client->city_id}}">{{$client->city->city_name}}</option>
                            @endif
                        </select>
                    </div>

                    <label class="col-sm-2 col-xs-3 control-label">Street</label>
                    <span class="col-sm-10 col-xs-9">
                        <input type="text" required name="street" maxlength="50" class="form-control" value="{{@$client->street}}" placeholder="Street">
                    </span>

                    <label class="col-sm-2 control-label">Area</label>
                    <span class="col-sm-4">
                        <input required type="text" class="form-control" maxlength="30" placeholder="Area" name="area" value="{{@$client->area}}">
                    </span>
                    <label class="col-sm-2 control-label">State</label>
                    <span class="col-sm-4">
                        <input required type="text" class="form-control" maxlength="30" placeholder="State" name="state" value="{{@$client->state}}">
                    </span>
                    <label class="col-sm-2 control-label">Zip Code</label>
                    <span class="col-sm-4">
                        <input required class="form-control field" type="number" maxlength="10" name="zip_code" value="{{@$client->zip_code}}" placeholder="Zip Code" >
                    </span>

                    <label class="col-sm-2 control-label">P.O.Box</label>
                    <span class="col-sm-4">
                        <input required type="text" class="form-control" maxlength="30" placeholder="P.O.Box" name="po_box" value="{{ @$client->po_box }}">
                    </span>

                    <label class="col-sm-2 control-label">Office Tel</label>
                    <span class="col-sm-4">
                        <input required type="number"  maxlength="15" class="form-control" placeholder="Office Tel" name="official_tel"
                               value="{{ @$client->official_tel }}">
                    </span>
                    <label class="col-sm-2 control-label">Fax No</label>
                    <span class="col-sm-4">
                        <input required type="number" class="form-control" maxlength="30" placeholder="Fax No" name="fax_no" value="{{ @$client->fax_no }}">
                    </span>
                    <label class="col-sm-2 control-label">Email</label>
                    <span class="col-sm-4">
                        <input required type="email" class="form-control" placeholder="Email" name="email" value="{{ @$client->email }}">
                    </span>
                    <label class="col-sm-2 control-label">Website</label>
                    <span class="col-sm-4">
                        <input required type="text" class="form-control" placeholder="Website" name="website" value="{{ @$client->website }}">
                    </span>
                    <label class="col-sm-2 control-label">Working Days</label>
                    <span class="col-sm-4">
                        <input required type="number" maxlength="10" class="form-control" placeholder="Working Days" name="working_days"
                               value="{{ @$client->working_days }}">
                    </span>
                    <label class="col-sm-2 control-label">Working Times</label>
                    <span class="col-sm-4">
                        <input required type="text" class="form-control" placeholder="Working Times" name="working_times"
                               value="{{ @$client->working_times }}">
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-6 control-label">Client Logo</label>
                <div class="col-lg-offset-2 col-lg-6">
                    <input id="input-file-now" accept="image/*" type="file" @if(@$client->client_logo) data-default-file="{{asset('uploads/clients/'.$client->client_logo)}}" @endif name="client_logo" class="dropify"/>
                    <br />
                </div>
            </div>
        </div>
    </section>
</div>
<!-- General Info end-->
<!-- Client Contacts start-->
<div class="panel panel-primary form-group">
    <section class="panel">
        <header class="panel panel-heading col-sm-2 col-xs-3">
            <h5>Client Contacts:</h5>
        </header>
        <div class="panel-content" style="clear: both;">
            <!-- Technical Contacts start-->
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Technical</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-8 col-xs-9 text-center">1st Contact</label>
                    <label class="col-sm-4 col-xs-3 text-center">2nd Contact</label>
                </div>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">Name</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="tech_1st_name" value="{{@$client->tech_1st_name}}" maxlength="30" type="text" class="form-control" placeholder="Name">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Name</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="tech_2nd_name" value="{{@$client->tech_2nd_name}}" maxlength="30" type="text" class="form-control" placeholder="Name">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Position</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="tech_1st_position" value="{{@$client->tech_1st_position}}" type="text" class="form-control"
                      placeholder="Position">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Position</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="tech_2nd_position" value="{{@$client->tech_2nd_position}}" type="text" class="form-control"
                      placeholder="Position">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Cell</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="tech_1st_cell" value="{{@$client->tech_1st_cell}}" type="number" maxlength="15" class="form-control" placeholder="Cell">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Cell</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="tech_2nd_cell" value="{{@$client->tech_2nd_cell}}" type="number" maxlength="15" class="form-control" placeholder="Cell">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="tech_1st_email" value="{{@$client->tech_1st_email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="tech_2nd_email" value="{{@$client->tech_2nd_email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                </div>
            </div>
            <!-- Technical Contacts end-->
            <!-- Logistics Contacts start-->
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Logistics</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">Name</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="logist_1st_name" value="{{@$client->logist_1st_name}}" maxlength="30" type="text" class="form-control" placeholder="Name">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Name</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="logist_2nd_name" value="{{@$client->logist_2nd_name}}" maxlength="30" type="text" class="form-control" placeholder="Name">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Position</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="logist_1st_position" value="{{@$client->logist_1st_position}}" maxlength="30" type="text" class="form-control"
                      placeholder="Position">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Position</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="logist_2nd_position" value="{{@$client->logist_2nd_position}}" maxlength="30" type="text" class="form-control"
                      placeholder="Position">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Cell</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="logist_1st_cell" value="{{@$client->logist_1st_cell}}" type="number" maxlength="15" class="form-control" placeholder="Cell">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Cell</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="logist_2nd_cell" value="{{@$client->logist_2nd_cell}}" type="number" maxlength="15" class="form-control" placeholder="Cell">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="logist_1st_email" value="{{@$client->logist_1st_email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="logist_2nd_email" value="{{@$client->logist_2nd_email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                </div>
            </div>
            <!-- Logistics Contacts end-->
            <!-- Finance Contacts start-->
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Finance</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">Name</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="finance_1st_name" value="{{@$client->finance_1st_name}}" type="text" maxlength="30" class="form-control" placeholder="Name">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Name</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="finance_2nd_name" value="{{@$client->finance_2nd_name}}" type="text" maxlength="30" class="form-control" placeholder="Name">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Position</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="finance_1st_position" value="{{@$client->finance_1st_position}}" type="text" maxlength="30" class="form-control"
                      placeholder="Position">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Position</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="finance_2nd_position" value="{{@$client->finance_2nd_position}}" type="text" maxlength="30" class="form-control"
                      placeholder="Position">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Cell</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="finance_1st_cell" value="{{@$client->finance_1st_cell}}" type="number" maxlength="15" class="form-control" placeholder="Cell">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Cell</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="finance_2nd_cell" value="{{@$client->finance_2nd_cell}}" type="number" maxlength="15" class="form-control" placeholder="Cell">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="finance_1st_email" value="{{@$client->finance_1st_email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="finance_2nd_email" value="{{@$client->finance_2nd_email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                </div>
            </div>
            <!-- Finance Contacts end-->
            <!-- Management Contacts start-->
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Management</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">Name</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="management_1st_name" value="{{@$client->management_1st_name}}" type="text" maxlength="30" class="form-control" placeholder="Name">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Name</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="management_2nd_name" value="{{@$client->management_2nd_name}}" type="text" maxlength="30" class="form-control" placeholder="Name">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Position</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="management_1st_position" value="{{@$client->management_1st_position}}" type="text" maxlength="30" class="form-control"
                      placeholder="Position">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Position</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="management_2nd_position" value="{{@$client->management_2nd_position}}" type="text" maxlength="30" class="form-control"
                      placeholder="Position">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Cell</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="management_1st_cell" value="{{@$client->management_1st_cell}}" type="number" maxlength="15" class="form-control" placeholder="Cell">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Cell</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="management_2nd_cell" value="{{@$client->management_2nd_cell}}" type="number" maxlength="15" class="form-control" placeholder="Cell">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="management_1st_email" value="{{@$client->management_1st_email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="management_2nd_email" value="{{@$client->management_2nd_email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                </div>
            </div>
            <!-- Management Contacts end-->
            <!-- Escalation Contacts start-->
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Escalation</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">Name</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="escalation_name" value="{{@$client->escalation_name}}" type="text" maxlength="50" class="form-control" placeholder="Name">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Position</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="escalation_position" value="{{@$client->escalation_position}}" type="text" maxlength="30" class="form-control"
                      placeholder="Position">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Cell</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="escalation_cell" value="{{@$client->escalation_cell}}" type="number" maxlength="15" class="form-control" placeholder="Cell">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input required name="escalation_email" value="{{@$client->escalation_email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                </div>
            </div>
            <!-- Escalation Contacts end-->
            <!-- Comments/Special Instructions start-->
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Comments/Special Instructions</label>
                <div class="col-sm-10 col-xs-9">
                    <textarea name="escalation_comments" class="col-sm-12" cols="20" rows="2">{{@$client->escalation_comments}}</textarea>
                </div>
            </div>
            <!-- Comments/Special Instructions end-->
        </div>
    </section>
</div>
<!-- Client Contacts end-->
<div class="form-group col-sm-12">
    <section class="panel">
        <header class="panel-heading col-sm-12">
            <h5 class="col-sm-10 col-xs-9">All Above information's filled & confirmed by:</h5>
        </header>
        <div class="panel-body">
            <label class="col-sm-2 col-xs-3 control-label">Name</label>
            <span class="col-sm-4 col-xs-3">
         <input required name="confirm_by_name" value="{{@$client->confirm_by_name}}" type="text" maxlength="50" class="form-control" placeholder="Name">
         </span>
            <label class="col-sm-2 col-xs-3 control-label">Designation</label>
            <span class="col-sm-4 col-xs-3">
         <input required name="confirm_by_designation" value="{{@$client->confirm_by_designation}}" type="text" maxlength="50" class="form-control" placeholder="Designation">
         </span>
            <label class="col-sm-2 col-xs-3 control-label">Signature</label>
            <span class="col-sm-10 col-xs-9">
         <textarea required name="confirm_by_signature" class="col-xs-12 sign" rows="1">{{@$client->confirm_by_signature}}</textarea>
         </span>
        </div>
    </section>
</div>
<div class="form-group">
    <label class="col-lg-2 control-label">Status</label>
    <div class="col-lg-10">
        <select required name="confirm_by_status" class="form-control m-bot15">
            <option @if(@$client->confirm_by_status==1) selected @endif value="1">Enable</option>
            <option @if(@$client->confirm_by_status==0) selected @endif value="0">Disable</option>
        </select>
    </div>
</div>
<div class="form-group">
    <section class="panel">
        <div class="panel-body">
            <label class="col-lg-2 col-xs-3 control-label" for="related_user">Add Users</label>
            <div class="col-lg-10">
                <select required id="related_user" name="related_user[]" class="form-control m-bot15" multiple="multiple">
                    @foreach($users as $user)
                        <option @if(array_key_exists($user->id , $related_user)) selected @endif value="{{$user->id}}">{{$user->username}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </section>
</div>

@include('admin.layouts.partials.ajax-country-based')