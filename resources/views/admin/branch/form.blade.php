{{ csrf_field() }}
<div class="form-group">
    <label class="col-sm-2 control-label" for="B-number">Branch ID Number</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="B-number" disabled
               value="{{ (@$branch) ? $branch->id_number : $branches }}">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label" for="B-name">Branch Name</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="B-name" placeholder="Branch Name" name="name"
               value="{{ @$branch->name }}">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Branch Address</label>
    <div class="col-sm-10">
        <label class="col-sm-2 col-xs-3 control-label">Country</label>
        <div class="col-sm-4 col-xs-3">
            <select class="form-control m-bot15 country" name="country">
            </select>
        </div>
        <label class="col-sm-2 col-xs-3 control-label">City</label>
        <div class="col-sm-4 col-xs-3">
            <select class="form-control m-bot15 city" name="city">
                <option value="" selected hidden>Select City</option>
                <option value="1">Test City</option>
            </select>
        </div>
        <label class="col-sm-2 control-label">Street</label>
        <span class="col-sm-10">
      <input type="text" class="form-control" placeholder="Street" name="street" value="{{ @$branch->street }}">
      </span>
        <label class="col-sm-2 control-label">Area</label>
        <span class="col-sm-4">
      <input type="text" class="form-control" placeholder="Area" name="area" value="{{ @$branch->area }}">
      </span>
        <label class="col-sm-2 control-label">State</label>
        <span class="col-sm-4">
      <input type="text" class="form-control" placeholder="State" name="state" value="{{ @$branch->state }}">
      </span>
        <label class="col-sm-2 control-label">Zip Code</label>
        <span class="col-sm-4">
      <input type="text" class="form-control" placeholder="Zip Code" name="zip_code" value="{{ @$branch->zip_code }}">
      </span>
        <label class="col-sm-2 control-label">P.O.Box</label>
        <span class="col-sm-4">
      <input type="text" class="form-control" placeholder="P.O.Box" name="po_box" value="{{ @$branch->po_box }}">
      </span>
        <label class="col-sm-2 control-label">Office Tel</label>
        <span class="col-sm-4">
      <input type="tel" class="form-control" placeholder="Office Tel" name="office_tel"
             value="{{ @$branch->office_tel }}">
      </span>
        <label class="col-sm-2 control-label">Fax No</label>
        <span class="col-sm-4">
      <input type="tel" class="form-control" placeholder="Fax No" name="fax_no" value="{{ @$branch->fax_no }}">
      </span>
        <label class="col-sm-2 control-label">Email</label>
        <span class="col-sm-4">
      <input type="email" class="form-control" placeholder="Email" name="email" value="{{ @$branch->email }}">
      </span>
        <label class="col-sm-2 control-label">Website</label>
        <span class="col-sm-4">
      <input type="text" class="form-control" placeholder="Website" name="website" value="{{ @$branch->website }}">
      </span>
        <label class="col-sm-2 control-label">Working Days</label>
        <span class="col-sm-4">
      <input type="text" class="form-control" placeholder="Working Days" name="working_days"
             value="{{ @$branch->working_days }}">
      </span>
        <label class="col-sm-2 control-label">Working Times</label>
        <span class="col-sm-4">
      <input type="tel" class="form-control" placeholder="Working Times" name="working_times"
             value="{{ @$branch->working_times }}">
      </span>
    </div>
</div>
<div class="form-group">
    <label class="col-lg-2 control-label">Branch Logo</label>
    <div class="col-lg-offset-2 col-lg-10">
        <img src="img/noimage.gif" alt=""/>
        <input class="btn btn-default" type="file" name="branch_logo">
    </div>
</div>
<div class="form-group">
    <label class="col-lg-2 control-label">Status</label>
    <div class="col-lg-10">
        <select class="form-control m-bot15" name="status">
            <option>Enable</option>
            <option>Disable</option>
        </select>
    </div>
</div>
<div class="form-group">
    <section class="panel">
        <!-- <header class="panel-heading">
             Related Staff
             <div class="btn-group pull-right">
                 <a class="btn btn-default addstaff" href="#"><i class="fa fa-plus-square"></i></a>
             </div>
         </header>-->
        <div class="panel-body">
            <label class="col-lg-2 col-xs-3 control-label">Add Support Staff</label>
            <div class="col-lg-8 col-xs-7">
                <select id="support_staff" name="related_staff[]" class="form-control m-bot15" multiple="multiple">
                    <option value="1">Mahmood</option>
                    <option value="2">Mohammad</option>
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
@section('footer_scripts')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
    {{--<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}"></script>--}}
    <!--todo: remove CDNs-->
    <script>
        $(function () {
            $('#support_staff').select2({
                placeholder: "Select Support Staff",
                allowClear: true
            });
            //all jquery code here
        });

    </script>
@stop

