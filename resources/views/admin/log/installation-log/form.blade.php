
{{ csrf_field() }}
<input type="hidden" value="{{@$installation_log->installation_log_id}}" name="installation_log_id">
<div class="form-group">
    <label class="col-sm-2 control-label" for="I-number">Job Number</label>
    <div class="col-sm-10">
        <input type="text" value="{{@$installation_log->job_number ?? @$job_number}}" name="job_number" class="form-control" id="I-number" disabled >
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="B-sdate">Installation Start Date</label>
    <div class="col-sm-10">
        <input type="date" required value="{{@$installation_log->install_start_date}}" name="install_start_date" class="form-control" id="B-sdate" placeholder="Start Date">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="B-edate">Installation Finish Date</label>
    <div class="col-sm-10">
        <input type="date" required value="{{@$installation_log->install_finish_date}}" name="install_finish_date" class="form-control" id="B-edate" placeholder="Finish Date">
    </div>
</div>
<div class="form-group">
    <label class="col-lg-2 control-label">Site Name</label>
    <div class="col-lg-10">
        <select required name="site_id" class="form-control m-bot15">
            <option value="1">dummy value</option>
            @foreach($sites as $site)
                <option @if(@$installation_log->site_id==$site->site_id) selected @endif value="{{$site->site_id}}">{{$site->name}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Country</label>
    <div class="col-lg-10">
        <select required name="country_id" class="form-control m-bot15">
            <option @if(true) selected @endif value="1">Kuwait</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">City</label>
    <div class="col-lg-10">
        <select required name="city_id" class="form-control m-bot15">
            <option @if(true) selected @endif value="1">sargodha</option>
        </select>
    </div>
</div>

{{--todo need js add rows functionality with qty --}}

<div class="form-group">
    <section class="panel">
        <header class="panel-heading">
            Assets (pending)
        </header>
        <div class="panel-body">
            <label class="col-lg-2 control-label">Add a Part</label>
            <div class="col-sm-4">
                <select class="form-control m-bot15">
                    <option selected>Antennas</option>
                    <option>BUC</option>
                    <option>LNB</option>
                    <option>Modem</option>
                    <option>Antenna Mounts</option>
                    <option>Router</option>
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
                      <input type="number" class="form-control" value="1">
                </span>
            </div>
        </div>
    </section>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Engineer Comments</label>
    <div class="col-sm-10">
        <textarea required name="engineer_comments" class="col-sm-12" cols="20" rows="4">{{@$installation_log->engineer_comments}}</textarea>
    </div>
</div>

<div class="form-group">
    <section class="panel">
        <header class="panel-heading">
            Related Branches
        </header>
        <div class="panel-body">
            <label class="col-lg-2 control-label">Add Branch</label>
            <div class="col-lg-8">
                <select required name="related_branches[]"  class="form-control m-bot15" multiple="multiple" id="add_branch">
                    <option value="1">dummy</option>
                @foreach($branches AS $branch)
                    <option {{array_key_exists($branch->branch_id , $selected_branches) ? 'selected' : ''}} value="{{$branch->branch_id}}">{{ $branch->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </section>

    <section class="panel">
        <header class="panel-heading">
            Related Staff
        </header>
        <div class="panel-body">
            <label class="col-lg-2 col-xs-3 control-label">Add Support Staff</label>
            <div class="col-lg-8 col-xs-7">
                <select required name="related_staff[]"  class="form-control m-bot15" multiple="multiple" id="add_support_staff">
                    <option value="1">dummy</option>
                @foreach($staffs as $staff)
                        <option {{array_key_exists($staff->support_staff_id , $selected_staffs) ? 'selected' : ''}} value="{{$staff->support_staff_id }}">{{ $staff->first_name  }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </section>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">Status</label>
    <div class="col-lg-8 col-xs-7">
    <select required name="status" class="form-control m-bot15">
            <option @if(@$installation_log->status=='closed') selected @endif value="closed">Closed</option>
            <option @if(@$installation_log->status=='pending') selected @endif value="pending">Pending</option>
    </select>
    </div>
</div>