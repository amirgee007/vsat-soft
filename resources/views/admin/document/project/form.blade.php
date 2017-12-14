{{ csrf_field() }}
<div class="panel panel-primary form-group">
    <section class="panel">
        <div class="panel-content" style="clear: both;">
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Project Name</label>
                <div class="col-sm-10 col-xs-9">
                    <input type="text" maxlength="40" required name="project_name" value="{{ @$project->project_name  }}" class="form-control" placeholder="Project Name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">File Name</label>
                <div class="col-sm-10 col-xs-9">
                    <input type="text" maxlength="40" required name="file_name" value="{{ @$project->file_name  }}" class="form-control" placeholder="iDirect Web iSite User Guide iDX 33 RevC.pdf">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Location</label>
                <div class="col-sm-4 col-xs-4">
                    <select required name="region_id"  class="form-control m-bot15" id="region">
                        <option selected hidden>Select Region</option>
                        @foreach($regions as $region)
                            <option value="{{$region->region_id}}" @if(@$project->region_id == $region->region_id) selected @endif>{{$region->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-3 col-xs-3">
                    <select required name="country_id"  class="form-control m-bot15 country" id="country">
                        <option>Select Country</option>
                        @if(@$project->country_id && !empty($project->country_id))
                        @foreach($countries as $country)
                            <option value="{{$country->country_id}}" @if(@$project->country_id == $country->country_id) selected @endif>{{$country->full_name}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-sm-3 col-xs-3">
                    <select required name="city_id" id="city" class="form-control m-bot15 city">
                        <option>Select City</option>
                        @if(@$project->city_id && !empty($project->city_id))
                            @foreach($cities as $city)
                                <option value="{{$city->city_id}}" @if(@$project->city_id == $city->city_id) selected @endif>{{$city->city_name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">File Upload</label>
                <div class="col-sm-10 col-xs-9">
                    <input type="file" @if(!isset($project))  required @endif class="btn btn-default" name="file_upload_name" placeholder="Select File">
                </div>
            </div>
        </div>
    </section>
</div>

@section('footer_scripts')
    @include('admin.common.ajax-location-onchange')
@stop
