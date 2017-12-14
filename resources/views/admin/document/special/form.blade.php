{{ csrf_field() }}
<div class="panel panel-primary form-group">
    <section class="panel">
        <div class="panel-content" style="clear: both;">
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">File Name</label>
                <div class="col-sm-10 col-xs-9">
                    <input required type="text" maxlength="40" name="file_name" value="{{ @$doc->file_name  }}" class="form-control" placeholder="iDirect Web iSite User Guide iDX 33 RevC.pdf">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">File Upload</label>
                <div class="col-sm-10 col-xs-9">
                    <input type="file" @if(!isset($doc))  required @endif class="btn btn-default" name="file_upload_name" placeholder="Select File">
                </div>
            </div>
        </div>
    </section>
</div>
<div class="form-group">
    <section class="panel">
        <header class="panel-heading">
            Related Users that can access the document
        </header>
        <div class="panel-body">
            <label class="col-lg-2 col-xs-3 control-label">Add User</label>
            <div class="col-sm-10 col-xs-9">
                <select id="related_user" name="related_user[]" class="form-control m-bot15" multiple="multiple">
                    @foreach($users AS $user)
                        <option  @if(@$relatedUser && array_key_exists($user->id , $relatedUser)) selected @endif  value="{{$user->id}}">
                            {{$user->first_name.' '.$user->last_name}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </section>
</div>
@section('footer_scripts')
    <link href="{{ asset('assets/select2-4.0.4/select2.min.css') }}" rel="stylesheet"/>
    <script src="{{ asset('assets/select2-4.0.4/select2.min.js') }}"></script>
    <script>
        $(function () {
            $('#related_user').select2({
                placeholder: "Select Related Users",
                width: '100%',
                allowClear: true
            });
        });
    </script>
@stop
