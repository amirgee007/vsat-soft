<!-- General Info start-->
{{ csrf_field() }}
<div class="panel panel-primary form-group">
    <section class="panel">
        <header class="panel panel-heading col-sm-2 col-xs-3">
            <h5>General Info:</h5>
        </header>
        <div class="panel-content" style="clear: both;">
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label" for="S-number">Staff ID Number</label>
                <div class="col-sm-10 col-xs-9">
                    <input type="text" class="form-control" id="S-number" disabled
                           value="{{@$staff->staff_id ?? $staff_no}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label" for="S-cell">Cell Number</label>
                <div class="col-sm-10 col-xs-9">
                    <input name="cell_number" value="{{@$staff->cell_number}}" type="tel" class="form-control" id="S-cell" placeholder="Cell Number">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Full Name</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-4 control-label">First Name</label>
                    <span class="col-sm-4 col-xs-8">
               <input name="first_name" value="{{@$staff->first_name}}" type="text" class="form-control" placeholder="First Name">
               </span>
                    <label class="col-sm-2 col-xs-4 control-label">Father's Name</label>
                    <span class="col-sm-4 col-xs-8">
               <input name="father_name" value="{{@$staff->father_name}}" type="text" class="form-control" placeholder="Father's Name">
               </span>
                    <label class="col-sm-2 col-xs-4 control-label">Middle Name</label>
                    <span class="col-sm-4 col-xs-8">
               <input name="middle_name" value="{{@$staff->middle_name}}" type="text" class="form-control" placeholder="Middle Name">
               </span>
                    <label class="col-sm-2 col-xs-4 control-label">Mother's Name</label>
                    <span class="col-sm-4 col-xs-8">
               <input name="mother_name" value="{{@$staff->mother_name}}" type="text" class="form-control" placeholder="Mother's Name">
               </span>
                    <label class="col-sm-2 col-xs-4 control-label">Last Name</label>
                    <span class="col-sm-4 col-xs-8">
               <input name="last_name" value="{{@$staff->last_name}}" type="text" class="form-control" placeholder="Last Name">
               </span>
                    <label class="col-sm-2 col-xs-4 control-label">Maiden Name</label>
                    <span class="col-sm-4 col-xs-8">
               <input name="maiden_name" value="{{@$staff->maiden_name}}" type="text" class="form-control" placeholder="Maiden Name">
               </span>
                </div>
            </div>
            {{--       local Address           --}}

            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Local Address</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">Country {{@$staff->country}}</label>
                    <div class="col-sm-4 col-xs-3">
                        <select required name="local_country_id" class="form-control m-bot15 country" id="country">
                            <option>Select Country</option>
                            @foreach($countries as $country)
                                <option value="{{$country->country_id}}">{{$country->full_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <label class="col-sm-2 col-xs-3 control-label">City {{@$staff->city}}</label>
                    <div class="col-sm-4 col-xs-3">
                        <select required name="local_city_id" id="city" class="form-control m-bot15 city"></select>
                    </div>

                    <label class="col-sm-2 col-xs-3 control-label">Street</label>
                    <span class="col-sm-10 col-xs-9">
                        <input type="text" required name="local_street" class="form-control" value="{{@$staff->street}}" placeholder="Street">
                    </span>

                    <label class="col-sm-2 control-label">Area</label>
                    <span class="col-sm-4">
                        <input required type="text" name="local_area" class="form-control" placeholder="Area" value="{{@$staff->area}}">
                    </span>
                    <label class="col-sm-2 control-label">State</label>
                    <span class="col-sm-4">
                        <input required type="text" name="local_state" class="form-control" placeholder="State" value="{{@$staff->state}}">
                    </span>
                    <label class="col-sm-2 control-label">Zip Code</label>
                    <span class="col-sm-4">
                        <input class="form-control field" name="local_zip_code" value="{{@$staff->zip_code}}" placeholder="Zip Code" >
                    </span>

                    <label class="col-sm-2 control-label">P.O.Box</label>
                    <span class="col-sm-4">
                        <input type="text" class="form-control" placeholder="P.O.Box" name="local_po_box" value="{{ @$staff->po_box }}">
                    </span>
                    <label class="col-sm-2 control-label">Office phone</label>
                    <span class="col-sm-4">
                        <input type="tel" class="form-control" placeholder="Office phone" name="local_official_tel" value="{{ @$staff->local_official_tel }}">
                    </span>

                    <label class="col-sm-2 col-xs-3 control-label">Home Tel</label>
                    <span class="col-sm-4 col-xs-3">
                        <input name="local_home_tel" value="{{@$staff->local_home_tel}}" type="tel" class="form-control" placeholder="Home Telephone">
                    </span>
                </div>
            </div>

            {{--       Permnt Address           --}}

            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Permanent Address</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">Country {{@$staff->country}}</label>
                    <div class="col-sm-4 col-xs-3">
                        <select required name="permanent_country_id" class="form-control m-bot15 country" id="country2">
                            <option>Select Country</option>
                            @foreach($countries as $country)
                                <option value="{{$country->country_id}}">{{$country->full_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <label class="col-sm-2 col-xs-3 control-label">City {{@$staff->city}}</label>
                    <div class="col-sm-4 col-xs-3">
                        <select required name="permanent_city_id"  id="city2" class="form-control m-bot15 city"></select>
                    </div>

                    <label class="col-sm-2 col-xs-3 control-label">Street</label>
                    <span class="col-sm-10 col-xs-9">
                        <input type="text" required name="permanent_street" class="form-control" value="{{@$staff->street}}" placeholder="Street">
                    </span>

                    <label class="col-sm-2 control-label">Area</label>
                    <span class="col-sm-4">
                        <input required type="text" class="form-control" placeholder="Area" name="permanent_area" value="{{@$staff->area}}">
                    </span>
                    <label class="col-sm-2 control-label">State</label>
                    <span class="col-sm-4">
                        <input required type="text" class="form-control" placeholder="State" name="permanent_state" value="{{@$staff->state}}">
                    </span>
                    <label class="col-sm-2 control-label">Zip Code</label>
                    <span class="col-sm-4">
                        <input class="form-control field" name="permanent_zip_code" value="{{@$staff->zip_code}}" placeholder="Zip Code" >
                    </span>

                    <label class="col-sm-2 control-label">P.O.Box</label>
                    <span class="col-sm-4">
                        <input type="text" class="form-control" placeholder="P.O.Box" name="permanent_po_box" value="{{ @$staff->po_box }}">
                    </span>

                    <label class="col-sm-2 col-xs-3 control-label">Contact Name</label>
                    <span class="col-sm-4 col-xs-3">
                        <input name="contact_name" value="{{@$staff->contact_name}}" type="text" class="form-control" placeholder="Contact Name">
                    </span>
                    <label class="col-sm-2 col-xs-3 control-label">Emergency Number</label>
                    <span class="col-sm-4 col-xs-3">
                        <input name="emergency_number" value="{{@$staff->emergency_number}}" type="tel" class="form-control" placeholder="Emergency Number">
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label" for="S-designation">Designation</label>
                <div class="col-sm-10 col-xs-9">
                    <input name="designation" value="{{@$staff->designation}}" type="text" class="form-control" id="S-designation" placeholder="Designation">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label" for="S-qualification">Qualification</label>
                <div class="col-sm-10 col-xs-9">
                    <input name="qualification" value="{{@$staff->qualification}}" type="text" class="form-control" id="S-qualification" placeholder="Qualification">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label" for="S-gender">Gender</label>
                <div class="col-sm-10 col-xs-9">
                    <select class="form-control m-bot15" name="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Birth Details</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">Age</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="age" value="{{@$staff->age}}" type="number" class="form-control" placeholder="Age">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Date Of Birth</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="date_of_birth" value="{{@$staff->date_of_birth}}" type="date" class="form-control" placeholder="Date Of Birth">
               </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Marital Status</label>
                <div class="col-sm-10 col-xs-9">
                    <div class="col-sm-3 col-xs-3">
                        <label class="control-label">Single</label>
                        <input @if(@$staff->marital_status =='single') checked @endif type="radio" class="" name="marital_status"  value="single">
                    </div>
                    <div class="col-sm-3 col-xs-3">
                        <label class="control-label">Married</label>
                        <input  @if(@$staff->marital_status =='married') checked @endif type="radio" class="" name="marital_status" value="married">
                    </div>
                    <div class="col-sm-3 col-xs-3">
                        <label class="control-label">Widow</label>
                        <input @if(@$staff->marital_status == 'widow') checked @endif type="radio" class="" name="marital_status" value="widow">
                    </div>
                    <div class="col-sm-3 col-xs-3">
                        <label class="control-label">Separated</label>
                        <input @if(@$staff->marital_status =='separated') checked @endif type="radio" class="" name="marital_status" value="separated">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Nationality</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">Present</label>
                    <div class="col-sm-4 col-xs-3">
                        <select class="form-control m-bot15 nat" name="present_nationality">
                        </select>
                    </div>
                    <label class="col-sm-2 col-xs-3 control-label">Previous</label>
                    <div class="col-sm-4 col-xs-3">
                        <select class="form-control m-bot15 nat" name="previous_nationality">
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Language</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">1st</label>
                    <div class="col-sm-4 col-xs-3">
                        <select class="form-control m-bot15 lang" name="1st_language">
                        </select>
                    </div>
                    <label class="col-sm-2 col-xs-3 control-label">2nd</label>
                    <div class="col-sm-4 col-xs-3">
                        <select class="form-control m-bot15 lang" name="2nd_language">
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Passport Details</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">Passport No.</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="passport_no" value="{{@$staff->passport_no}}" type="text" class="form-control" placeholder="Passport No.">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Place issued</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="passport_place_issued" value="{{@$staff->passport_place_issued}}" type="text" class="form-control" placeholder="Place issued">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Issue date</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="passport_issue_date" value="{{@$staff->passport_issue_date}}" type="date" class="form-control" placeholder="Issue date">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Expiry date</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="passport_expiry_date" value="{{@$staff->passport_expiry_date}}" type="date" class="form-control" placeholder="Expiry date">
               </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Country ID Details</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">ID No.</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="country_id_no" value="{{@$staff->country_id_no}}" type="text" class="form-control" placeholder="ID No.">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">ID Type</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="country_id_type" value="{{@$staff->country_id_type}}" type="text" class="form-control" placeholder="ID Type">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Issue date</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="country_issue_date" value="{{@$staff->country_issue_date}}" type="date" class="form-control" placeholder="Issue date">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Expiry date</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="country_expiry_date" value="{{@$staff->country_expiry_date}}" type="date" class="form-control" placeholder="Expiry date">
               </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Visa Details</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">Visa No.</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="visa_no" value="{{@$staff->visa_no}}" type="text" class="form-control" placeholder="Visa No.">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Visa Type</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="visa_type" value="{{@$staff->visa_type}}" type="text" class="form-control" placeholder="Visa Type">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Issue date</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="visa_issued_date" value="{{@$staff->visa_issued_date}}" type="date" class="form-control" placeholder="Issue date">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Expiry date</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="visa_expiry_date" value="{{@$staff->visa_expiry_date}}" type="date" class="form-control" placeholder="Expiry date">
               </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-6 control-label">Staff Photo</label>
                <div class="col-lg-offset-2 col-lg-6">
                    <input   id="input-file-now" type="file" @if(@$staff->visa_staff_photo) data-default-file="{{asset('uploads/support_staff/'.$staff->visa_staff_photo)}}" @endif name="visa_staff_photo" class="dropify"/>
                    <br />
                </div>
            </div>

        </div>
    </section>
</div>
<!-- General Info end-->
<div class="form-group">
    <label class="col-lg-2 control-label">Status</label>
    <div class="col-lg-10">

        <select class="form-control m-bot15" name="status">
            <option value="1" @if(@$staff->status == '1') {{ 'Selected' }} @endif>Enable</option>
            <option value="0" @if(@$staff->status == '0') {{ 'Selected' }} @endif>Disable</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-lg-2 control-label">Related User</label>
    <div class="col-lg-10">
        <select id="related_user" name="related_user[]" class="form-control m-bot15" multiple="multiple">
            @foreach($users AS $user)
                <option  @if(@$relatedUser && array_key_exists($user->id , $relatedUser)) selected @endif  value="{{$user->id}}">
                    {{$user->first_name.' '.$user->last_name}}
                </option>
            @endforeach
        </select>
    </div>
</div>