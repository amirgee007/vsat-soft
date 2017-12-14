@section('header_styles')
    <link href="{{ asset('assets/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>
@stop
{{ csrf_field() }}
<div class="form-group">
    <label class="col-sm-2 control-label">Tool Name</label>
    <div class="col-sm-10">
        <input type="text" required value="{{@$tool->tool_name}}" class="form-control" placeholder="Tool Name" name="tool_name">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Tool Type</label>
    <div class="col-sm-10">
        <input type="text" required value="{{@$tool->tool_type}}" name="tool_type" class="form-control" placeholder="Tool Type e.g ( Security,Optional,Other Tool)">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Tool Description</label>
    <div class="col-sm-10">
        <input type="text" required value="{{@$tool->description}}" class="form-control" placeholder="Tool Description" name="description">
    </div>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Tool Image</label>
    <div class="col-sm-10">
        <input required type="file" name="tool_img"  id="input-file-now"  @if(@$tool->tool_img) data-default-file="{{asset('uploads/tools_equipments/'.$tool->tool_img)}}" @endif  class="dropify" accept="image/x-png,image/gif,image/jpeg"/>
    </div>
</div>

@section('footer_scripts')

    <script type="text/javascript" src="{{ asset('assets/dropify/dist/js/dropify.min.js') }}"></script>
    <script>
        $(function () {
            $('.dropify').dropify();
        });
    </script>
@stop