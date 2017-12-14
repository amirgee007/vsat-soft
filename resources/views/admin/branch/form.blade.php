{{ csrf_field() }}
<input type="hidden" name="branch_id" value="{{@$branch->branch_id}}">
<div class="form-group">
    <label class="col-sm-2 control-label" for="B-number">Branch ID Number</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="B-number" disabled
               value="{{@$branch->id_number ?? $branch_id}}">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="B-name">Branch Name</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="B-name" required placeholder="Branch Name" name="name"
               value="{{ @$branch->name }}">
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 col-xs-3 control-label">Branch Address</label>
    <div class="col-sm-10 col-xs-9">
        <label class="col-sm-2 col-xs-3 control-label">Country {{@$branch->country}}</label>
        <div class="col-sm-4 col-xs-3">
            <select required name="country_id" class="form-control m-bot15 country" id="country">
                <option>Select Country</option>
                @foreach($countries as $country)
                    <option @if($branch->country_id == $country->country_id) selected @endif value="{{$country->country_id}}">{{$country->full_name}}</option>
                @endforeach
            </select>
        </div>

        <label class="col-sm-2 col-xs-3 control-label">City {{@$branch->city}}</label>
        <div class="col-sm-4 col-xs-3">
            <select required name="city_id" id="city" class="form-control m-bot15 city">
                @if(isset($cities))
                    @foreach($cities as $city)
                        <option @if($branch->city_id == $city->city_id) selected @endif value="{{$city->city_id}}">{{$city->city_name}}</option>
                    @endforeach
                @endif
            </select>
        </div>

        <label class="col-sm-2 col-xs-3 control-label">Street</label>
        <span class="col-sm-10 col-xs-9">
            <input type="text" required name="street"  class="form-control" value="{{@$branch->street}}" placeholder="Street">
        </span>

        <label class="col-sm-2 control-label">Area</label>
        <span class="col-sm-4">
            <input required type="text" class="form-control" placeholder="Area" name="area" value="{{@$branch->area}}">
        </span>
        <label class="col-sm-2 control-label">State</label>
        <span class="col-sm-4">
            <input required type="text" class="form-control" placeholder="State" name="state" value="{{@$branch->state}}">
        </span>
        <label class="col-sm-2 control-label">Zip Code</label>
        <span class="col-sm-4">
            <input class="form-control field" required name="zip_code" value="{{@$branch->zip_code}}" placeholder="Zip Code" >
        </span>

        <label class="col-sm-2 control-label">P.O.Box</label>
        <span class="col-sm-4">
            <input type="text" required class="form-control" placeholder="P.O.Box" name="po_box" value="{{ @$branch->po_box }}">
        </span>

        <label class="col-sm-2 control-label">Office Tel</label>
        <span class="col-sm-4">
      <input type="number" required class="form-control" placeholder="Office Tel" name="office_tel"
             value="{{ @$branch->office_tel }}">
      </span>
        <label class="col-sm-2 control-label">Fax No</label>
        <span class="col-sm-4">
      <input type="text" required class="form-control" placeholder="Fax No" name="fax_no" value="{{ @$branch->fax_no }}">
      </span>
        <label class="col-sm-2 control-label">Email</label>
        <span class="col-sm-4">
      <input type="email" required class="form-control" placeholder="Email" name="email" value="{{ @$branch->email }}">
      </span>
        <label class="col-sm-2 control-label">Website</label>
        <span class="col-sm-4">
      <input type="text" required class="form-control" placeholder="Website" name="website" value="{{ @$branch->website }}">
      </span>
        <label class="col-sm-2 control-label">Working Days</label>
        <span class="col-sm-4">
      <input type="number" required class="form-control" placeholder="Working Days" name="working_days"
             value="{{ @$branch->working_days }}">
      </span>
        <label class="col-sm-2 control-label">Working Times</label>
        <span class="col-sm-4">
      <input type="number" required class="form-control"  placeholder="Working Times" name="working_times"
             value="{{ @$branch->working_times }}">
      </span>
    </div>
</div>

<div class="form-group">
    <label class="col-lg-6 control-label">Profile Image</label>
    <div class="col-lg-offset-2 col-lg-6">
        <input  id="input-file-now"  type="file" accept="image/x-png,image/gif,image/jpeg" @if(@$branch->branch_logo) data-default-file="{{asset('uploads/branches/'.$branch->branch_logo)}}" @else required @endif name="branch_logo" class="dropify"/>
        <br />
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Status</label>
    <div class="col-lg-10">
        <select class="form-control m-bot15" name="status">
            <option value="" hidden selected> Select Branch Status</option>
            <option value="enable" @if(@$branch->status == 'enable') selected @endif>Enable</option>
            <option value="disable" @if(@$branch->status == 'disable') selected @endif>Disable</option>
        </select>
    </div>
</div>
<div class="form-group">
    <section class="panel">
        <div class="panel-body">
            <label class="col-lg-2 col-xs-3 control-label">Add Support Staff</label>
            <div class="col-lg-10">
                <select id="support_staff" name="related_staff[]" class="form-control m-bot15" multiple="multiple">
                    @foreach($staffs as $staff)
                    <option {{array_key_exists($staff->support_staff_id , $related_staff) ? 'selected' : ''}} value="{{$staff->support_staff_id}}">{{$staff->first_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </section>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-danger">Cancel</button>
    </div>
</div>
