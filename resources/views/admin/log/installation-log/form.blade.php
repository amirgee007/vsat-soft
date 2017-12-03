
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
            <option selected hidden>Select Site</option>
            @foreach($sites as $site)
                <option @if(@$installation_log->site_id==$site->site_id) selected @endif value="{{$site->site_id}}">{{$site->name}}</option>
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
                <option value="{{$country->country_id}}" @if(@$installation_log->country_id && @$country->country_id == $installation_log->country_id) selected @endif>
                    {{$country->full_name}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-lg-2 control-label">City</label>
    <div class="col-lg-10">
        <select required name="city_id" id="city" class="form-control m-bot15 city">
            <option selected hidden>Select City</option>
            @if(@$installation_log->city_id && !empty($installation_log->city_id))
                @foreach($cities as $city)
                    <option value="{{$city->city_id}}" @if(@$installation_log->city_id && $city->city_id == $installation_log->city_id) selected @endif>{{$city->city_name}}</option>
                @endforeach
            @endif
        </select>

    </div>
</div>
@if(isset($installation_log->assets))
        <div class="form-group">
            <section class="panel">
                <header class="panel-heading">
                    Assets
                    <div class="btn-group pull-right">
                        <a class="btn btn-default addasset" href="javascript:void(0)"><i class="fa fa-plus-square"></i></a>
                    </div>
                </header>
                <div class="panel-body" id="add-assets">
                    @foreach($installation_log->assets as $ass)
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
@section('footer_scripts')
    @include('admin.layouts.partials.ajax-country-based')
    @include('admin.common.add-assets')
    <link href="{{asset('assets/select2-4.0.4/select2.min.css') }}" rel="stylesheet"/>
    <script src="{{asset('assets/select2-4.0.4/select2.min.js')}}"></script>
    <script>

        $('#add_support_staff').select2({
            placeholder: "Select Support Staff",
            width: '100%',
            allowClear: true
        });

        $('#add_branch').select2({
            placeholder: "Select Related Branches",
            allowClear: true
        });


    </script>
@stop