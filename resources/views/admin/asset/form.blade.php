{{ csrf_field() }}
<div class="panel panel-primary form-group">
    <div class="panel panel-heading col-sm-2">
        <h5>General Info:</h5>
    </div>
    <div class="panel-content" style="clear: both;">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="asset_name">Asset Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="asset_name" name="name" placeholder="Asset Name">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="">Serial Number</label>
            <div class="col-sm-10">
                <input required type="text" class="form-control"  placeholder="Serial Number" name="name">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="">Purchase Date</label>
            <div class="col-sm-10">
                <input required type="text" class="form-control"  placeholder="Purchase Date" name="name">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="">Barcode Address</label>
            <div class="col-sm-10">
                <input required type="text" class="form-control"  placeholder="Barcode Address" name="name">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="">Cost Price</label>
            <div class="col-sm-10">
                <input required type="text" class="form-control"  placeholder="Cost Price" name="name">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="">Selling Price</label>
            <div class="col-sm-10">
                <input required type="text" class="form-control"  placeholder="Selling Price" name="name">
            </div>
        </div>
        <!-- Site Contact start-->
        <div class="panel panel-primary form-group">
            <div class="panel panel-heading col-sm-2">
                <h5>Warranty/Status:</h5>
            </div>
            <div class="panel-content" style="clear: both;">
                <div class="form-group">
                    <label class="col-sm-2 control-label">1st Warranty Status</label>
                    <div class="col-sm-10">
                  <span class="col-sm-10">
                  <input required type="text" class="form-control" placeholder="1st Warranty Status" name="tech_name" value="{{@$site->tech_name}}">
                  </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">2st Warranty Status</label>
                    <div class="col-sm-10">
                  <span class="col-sm-10">
                  <input required type="text" class="form-control" placeholder="2st Warranty Status" name="tech_name" value="{{@$site->tech_name}}">
                  </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Extended Warranty</label>
                    <div class="col-sm-10">
                  <span class="col-sm-10">
                  <input required type="text"  class="form-control" placeholder="Extended Warranty" name="" value="">
                  </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Extended Warranty Date</label>
                    <div class="col-sm-10">
                  <span class="col-sm-10">
                  <input required type="text"  class="form-control" placeholder="Extended Warranty Date" name="" value="">
                  </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Current Condition/Status</label>
                    <div class="col-sm-10">
                  <span class="col-sm-10">
                      <select class="form-control" >
                           <option value='2'>Pending</option>
                           <option value='3'>Deployed</option>
                           <option value='4'>Archived</option>
                           <option value='5'>In Repair</option>
                           <option value='6'>Broken</option>
                        </select>
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
                  <input required type="text" class="form-control" placeholder="Supplier Name" name="tech_name" value="">
                  </span>
                        <label class="col-sm-2 control-label">Email</label>
                        <span class="col-sm-4">
                  <input required type="tel" class="form-control" placeholder="Email" name="tech_cell" value="">
                  </span>
                        <label class="col-sm-2 control-label">Cell</label>
                        <span class="col-sm-4">
                  <input required type="email" class="form-control" placeholder="Cell" name="tech_email" value="">
                  </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Vendor</label>
                    <div class="col-sm-10">
                        <label class="col-sm-2 control-label">Vendor Name</label>
                        <span class="col-sm-10">
                  <input required type="text" class="form-control" placeholder="Vendor Name" name="tech_name" value="">
                  </span>
                        <label class="col-sm-2 control-label">Email</label>
                        <span class="col-sm-4">
                  <input required type="tel" class="form-control" placeholder="Email" name="tech_cell" value="">
                  </span>
                        <label class="col-sm-2 control-label">Cell</label>
                        <span class="col-sm-4">
                  <input required type="email" class="form-control" placeholder="Cell" name="tech_email" value="">
                  </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary form-group">
        <div class="panel panel-heading col-sm-2">
            <h5>Related Sites:</h5>
        </div>
        <div class="panel-content" style="clear: both;">
            <div class="form-group">
                <label class="col-lg-2 control-label">Select Sites</label>
                <div class="col-lg-8">
                    <select required class="form-control m-bot15" multiple="multiple" name="related_site" id="related_site">
                        <option value="">Select Site</option>
                        <option value="a">Site A</option>
                        <option value="b">Site B</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@section('footer_scripts')
    <link href="{{ asset('assets/select2-4.0.4/select2.min.css') }}" rel="stylesheet"/>
    <script src="{{ asset('assets/select2-4.0.4/select2.min.js') }}"></script>
    <script>
        $(function () {
            $('#related_site').select2({
                placeholder: "Select Related Sites",
                width: '100%',
                allowClear: true
            });
        });
    </script>
@stop