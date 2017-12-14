
{{ csrf_field() }}
<input type="hidden" value="{{@$maintenance_log->maintenance_log_id}}" name="maintenance_log_id">
<div class="form-group">
    <label class="col-sm-2 control-label" for="M-number">Job Number</label>
    <div class="col-sm-10">
        <input type="text" value="{{@$maintenance_log->job_number ?? @$job_number}}" name="job_number" class="form-control" id="M-number" disabled>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="M-sdate">Repair Start Date</label>
    <div class="col-sm-10">
        <input type="date" required value="{{@$maintenance_log->repair_start_date}}" name="repair_start_date" class="form-control" id="B-sdate" placeholder="Start Date">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="M-edate">Repair Finish Date</label>
    <div class="col-sm-10">
        <input type="date" required value="{{@$maintenance_log->repair_finish_date}}" name="repair_finish_date" class="form-control" id="M-edate" placeholder="Finish Date">
    </div>
</div>
<div class="form-group">
    <label class="col-lg-2 control-label">Site Name</label>
    <div class="col-lg-10">
        <select required name="site_id" class="form-control m-bot15">
            <option hidden selected>Select Site</option>
        @foreach($sites as $site)
                <option @if(@$maintenance_log->site_id==$site->site_id) selected @endif value="{{$site->site_id}}">{{$site->name}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-lg-2 control-label">Country</label>
    <div class="col-lg-10">
        <select required name="country_id" class="form-control m-bot15" id="country">
            <option selected hidden>Select Country</option>
            @foreach($countries as $country)
                <option value="{{$country->country_id}}" @if(@$maintenance_log->country_id && @$country->country_id == $maintenance_log->country_id) selected @endif>
                    {{$country->full_name}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">City</label>
    <div class="col-lg-10">
        <select  name="city_id" id="city" class="form-control m-bot15 city">
            <option selected hidden>Select City</option>
            @if(@$cities)
                @foreach($cities as $city)
                    <option value="{{$city->city_id}}" @if(@$maintenance_log->city_id && $city->city_id == $maintenance_log->city_id) selected @endif>{{$city->city_name}}</option>
                @endforeach
            @endif
        </select>

    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="M-csym">Client Symptoms Details</label>
    <div class="col-sm-10">
        <input type="text" required value="{{@$maintenance_log->client_symptom_detail}}" name="client_symptom_detail" class="form-control" id="M-csym" placeholder="Client Symptoms Details">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="M-esym1">Engineer Symptoms Details 1</label>
    <div class="col-sm-10">
        <input type="text" required value="{{@$maintenance_log->eng_symptom_detail1}}" name="eng_symptom_detail1" class="form-control" id="M-esym1" placeholder="Engineer Symptoms Details 1">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="M-esol1">Engineer Solution Details 1</label>
    <div class="col-sm-10">
        <input type="text" required value="{{@$maintenance_log->eng_solution_detail1}}" name="eng_solution_detail1" class="form-control" id="M-esol1" placeholder="Engineer Solution Details 1">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="M-esym2">Engineer Symptoms Details 2</label>
    <div class="col-sm-10">
        <input type="text" required value="{{@$maintenance_log->eng_symptom_detail2}}" name="eng_symptom_detail2" class="form-control" id="M-esym2" placeholder="Engineer Symptoms Details 2">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="M-esol2">Engineer Solution Details 2</label>
    <div class="col-sm-10">
        <input type="text" required value="{{@$maintenance_log->eng_solution_detail2}}" name="eng_solution_detail2" class="form-control" id="M-esol2" placeholder="Engineer Solution Details 2">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="M-esym3">Engineer Symptoms Details 3</label>
    <div class="col-sm-10">
        <input type="text" required value="{{@$maintenance_log->eng_symptom_detail3}}" name="eng_symptom_detail3" class="form-control" id="M-esym3" placeholder="Engineer Symptoms Details 3">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="M-esol3">Engineer Solution Details 3</label>
    <div class="col-sm-10">
        <input type="text" required value="{{@$maintenance_log->eng_solution_detail3}}" name="eng_solution_detail3" class="form-control" id="M-esol3" placeholder="Engineer Solution Details 3">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="M-esol3">Repair Mode</label>
    <div class="col-sm-10">
        <select class="form-control m-bot15" name="repair_mode">
            <option value="fix">Fix</option>
            <option value="repair">Repair</option>
            <option value="swap">Swap</option>
            <option value="others">Others</option>
        </select>
    </div>
</div>

@if(isset($maintenance_log->assets))
    <div class="form-group">
        <section class="panel">
            <header class="panel-heading">
                Assets
                <div class="btn-group pull-right">
                    <a class="btn btn-default addasset" href="javascript:void(0)"><i class="fa fa-plus-square"></i></a>
                </div>
            </header>
            <div class="panel-body" id="add-assets">
                @foreach($maintenance_log->assets as $ass)
                    <div class="asset-div">
                        <label class="col-lg-2 control-label">Add a Part</label>
                        <div class="col-sm-4">
                            <select class="form-control m-bot15 assets" name="related_assets[{{$loop->iteration}}]">
                                <option value="">Select Asset</option>
                                @foreach($assets as $asset)
                                    <option @if($asset->asset_id==$ass->asset_id) selected @endif value="{{$asset->asset_id}}">{{$asset->asset_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-sm-2 control-label">QTY</label>
                            <span class="col-sm-8">
                                    <input required name="related_assets_qty[{{$loop->iteration}}]" type="number"
                                           value="{{$ass->pivot->quantity}}" class="form-control">
                                </span>
                            @if($loop->iteration!=1)
                                <a class="btn btn-danger removeasset" href="javascript:void(0)"><i
                                            class="fa fa-minus-square"></i></a>
                            @endif
                        </div>
                    </div>
                    <div class="clearfix"></div>
                @endforeach
            </div>
        </section>
    </div>

@else
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
                    <select class="form-control m-bot15 assets" name="related_assets[]" >
                        <option value="" hidden selected>Select Asset</option>
                        @foreach($assets as $asset)
                            <option value="{{$asset->asset_id}}">{{$asset->asset_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-4">
                    <label class="col-sm-2 control-label">QTY</label>
                    <span class="col-sm-8">
                    <input required name="related_assets_qty[]" type="number" class="form-control">
                </span>
                </div>
            </div>
        </section>
    </div>
@endif

<div class="form-group">
    <label class="col-sm-2 control-label">Engineer Comments</label>
    <div class="col-sm-10">
        <textarea required name="engineer_comments" class="col-sm-12" cols="20" rows="4">{{@$maintenance_log->engineer_comments}}</textarea>
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
                @foreach($branches AS $branch)
                        <option {{ (@$selected_branches && array_key_exists($branch->branch_id , $selected_branches)) ? 'selected' : ''}} value="{{$branch->branch_id}}">{{ $branch->name }}</option>
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
                    @foreach($staffs as $staff)
                        <option {{ ( array_key_exists($staff->support_staff_id , $selected_staffs)) ? 'selected' : ''}} value="{{$staff->support_staff_id }}">{{ $staff->first_name  }}</option>
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
            <option @if(@$maintenance_log->status=='closed') selected @endif value="closed">Closed</option>
            <option @if(@$maintenance_log->status=='pending') selected @endif value="pending">Pending</option>
        </select>
    </div>
</div>

@section('footer_scripts')
    <link href="{{asset('assets/select2-4.0.4/select2.min.css') }}" rel="stylesheet"/>
    <script src="{{asset('assets/select2-4.0.4/select2.min.js')}}"></script>
    @include('admin.layouts.partials.ajax-country-based')
    @include('admin.common.add-assets')
    <script>

        $('#add_support_staff').select2({
            placeholder: "Select Staff",
            width: '100%',
            allowClear: true
        });

        $('#add_branch').select2({
            placeholder: "Select Related Branches",
            allowClear: true
        });

        </script>

@stop