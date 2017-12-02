
{{ csrf_field() }}
<div class="panel panel-primary form-group">
    <div class="panel panel-heading col-sm-2">
        <h5>General Info:</h5>
    </div>
    <div class="panel-content" style="clear: both;">

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">Asset Part Code</label>
            <div class="col-sm-10">
                <input required type="number" value="{{@$asset->asset_code}}" name="asset_code" class="form-control"  placeholder="Asset Part Code" >
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">Asset Serial Number</label>
            <div class="col-sm-10">
                <input required type="text" value="{{@$asset->serial_number}}" name="serial_number" class="form-control" placeholder="Asset Serial Number" >
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">Asset Bar Code</label>
            <div class="col-sm-10">
                <input id="input-file-now" type="file" @if(@$asset->bar_code_img) data-default-file="{{asset('uploads/assets/'.@$asset->bar_code_img)}}" @endif name="bar_code_img" class="dropify"/>

            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="asset_name">Asset Name</label>
            <div class="col-sm-10">
                <input type="text" value="{{@$asset->asset_name}}" name="asset_name" class="form-control"  placeholder="Asset Name">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="asset_name">Asset Description</label>
            <div class="col-sm-10">
                <input type="text" value="{{@$asset->description}}" name="description" class="form-control" placeholder="Asset Description">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">Purchase Date</label>
            <div class="col-sm-10">
                <input required type="date" value="{{@$asset->purchase_date}}" name="purchase_date" class="form-control"  placeholder="Purchase Date" >
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">Asset Part Type</label>
            <div class="col-sm-10">
                <select class="form-control" name="asset_part_type">
                    <option @if(@$asset->asset_part_type=='it') selected @endif value='it'>IT</option>
                    <option @if(@$asset->asset_part_type=='networking') selected @endif value='networking'>Networking</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="">Cost Price $</label>
            <div class="col-sm-10">
                <input required type="number" value="{{@$asset->cost_price}}" name="cost_price" class="form-control"  placeholder="Cost Price" >
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="">Selling Price $</label>
            <div class="col-sm-10">
                <input required type="number" value="{{@$asset->selling_price}}" name="selling_price" class="form-control"  placeholder="Selling Price" >
            </div>
        </div>
        <!-- Site Contact start-->
        <div class="panel panel-primary form-group">
            <div class="panel panel-heading col-sm-2">
                <h5>Warranty/Status:</h5>
            </div>
            <div class="panel-content" style="clear: both;">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Warranty Status L1</label>
                    <div class="col-sm-10">
                  <span class="col-sm-10">
                      <select class="form-control" name="warranty_status1">
                      <option @if(@$asset->warranty_status2=='in_warranty') selected @endif value='in_warranty'>In Warranty</option>
                      <option @if(@$asset->warranty_status2=='out_of_warranty') selected @endif value='out_of_warranty'>Out Of Warranty</option>
                      <option @if(@$asset->warranty_status2=='human_damage') selected @endif value='human_damage'>Human Damage</option>
                      <option @if(@$asset->warranty_status2=='in_repair') selected @endif value='in_repair'>In Repair</option>
                      <option @if(@$asset->warranty_status2=='broken') selected @endif value='broken'>Broken</option>
                  </select>
                  </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Warranty Status L2</label>
                    <div class="col-sm-10">
                  <span class="col-sm-10">
                  <select class="form-control" name="warranty_status2">
                      <option @if(@$asset->warranty_status2=='in_warranty') selected @endif value='in_warranty'>In Warranty</option>
                      <option @if(@$asset->warranty_status2=='out_of_warranty') selected @endif value='out_of_warranty'>Out Of Warranty</option>
                      <option @if(@$asset->warranty_status2=='human_damage') selected @endif value='human_damage'>Human Damage</option>
                      <option @if(@$asset->warranty_status2=='in_repair') selected @endif value='in_repair'>In Repair</option>
                      <option @if(@$asset->warranty_status2=='broken') selected @endif value='broken'>Broken</option>
                  </select>
                  </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Extended Warranty</label>
                    <div class="col-sm-10">
                  <span class="col-sm-10">
                    <label class="control-label">Yes</label>
                  <input required @if(@$asset->extended_warranty==1)checked @endif value="1" type="radio" name="extended_warranty">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <label class="control-label">No</label>
                  <input required @if(@$asset->extended_warranty==0)checked @endif value="0" type="radio" name="extended_warranty" >
                  </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Extended Warranty Date</label>
                    <div class="col-sm-10">
                  <span class="col-sm-10">
                  <input required type="date" value="{{@$asset->extended_warranty_date}}" name="extended_warranty_date" class="form-control">
                  </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary form-group">
            <div class="panel panel-heading col-sm-2">
                <h5>Asset Providers:</h5>
            </div>
            <div class="panel-content" style="clear: both;">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Supplier</label>
                    <div class="col-sm-10">
                        <label class="col-sm-2 control-label">Supplier Name</label>
                        <span class="col-sm-10">
                  <input required type="text" value="{{@$asset->supplier_name}}" class="form-control" placeholder="Supplier Name" name="supplier_name">
                  </span>
                        <label class="col-sm-2 control-label">Email</label>
                        <span class="col-sm-4">
                  <input required type="email" value="{{@$asset->supplier_email}}" class="form-control" placeholder="Email" name="supplier_email">
                  </span>
                        <label class="col-sm-2 control-label">Cell</label>
                        <span class="col-sm-4">
                  <input required value="{{@$asset->supplier_cell}}" class="form-control" placeholder="Cell" name="supplier_cell">
                  </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Vendor</label>
                    <div class="col-sm-10">
                        <label class="col-sm-2 control-label">Vendor Name</label>
                        <span class="col-sm-10">
                  <input required type="text" value="{{@$asset->vendor_name}}" class="form-control" placeholder="Vendor Name" name="vendor_name">
                  </span>
                        <label class="col-sm-2 control-label">Email</label>
                        <span class="col-sm-4">
                  <input required type="email" value="{{@$asset->vendor_email}}" class="form-control" placeholder="Email" name="vendor_email">
                  </span>
                        <label class="col-sm-2 control-label">Cell</label>
                        <span class="col-sm-4">
                  <input required class="form-control" value="{{@$asset->vendor_cell}}" placeholder="Cell" name="vendor_cell">
                  </span>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="panel panel-primary form-group">--}}
        {{--<div class="panel panel-heading col-sm-2">--}}
            {{--<h5>Related Sites:</h5>--}}
        {{--</div>--}}
        {{--<div class="panel-content" style="clear: both;">--}}
            {{--<div class="form-group">--}}
                {{--<label class="col-lg-2 control-label">Select Sites</label>--}}
                {{--<div class="col-lg-8">--}}
                    {{--<select required class="form-control m-bot15" multiple="multiple" name="related_site[]" id="related_site">--}}
                        {{--<option value="">Select Site</option>--}}
                        {{--<option value="1">Site A</option>--}}
                        {{--<option value="2">Site B</option>--}}
                    {{--</select>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    </div>
</div>
@section('footer_scripts')
    <link href="{{ asset('assets/select2-4.0.4/select2.min.css') }}" rel="stylesheet"/>
    <script src="{{ asset('assets/select2-4.0.4/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/dropify/dist/js/dropify.min.js') }}"></script>

    <script>

        $(function () {
            $('#related_site').select2({
                placeholder: "Select Related Sites",
                width: '100%',
                allowClear: true
            });
        });

        $('.dropify').dropify();

    </script>
@stop