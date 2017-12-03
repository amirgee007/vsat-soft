<input type="hidden" name="_token" value="h0LTNxMVzwhRfb84AbWfOCXbLJ9SNYN08bgok16t">
<div class="panel panel-primary form-group">
    <section class="panel">
        <div class="panel-content" style="clear: both;">
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Full Name</label>
                <div class="col-sm-10 col-xs-9">
                    <input type="text" name="survey_name" value="" class="form-control" placeholder="Full Name">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Email Address </label>
                <div class="col-sm-10 col-xs-9">
                    <input type="text" name="survey_name" value="" class="form-control" placeholder="Email Address">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Ticket Type</label>
                <div class="col-sm-10 col-xs-9">
                    <select class="form-control" name="survey_type">
                        <option value="" selected="selected">— Select a Help Topic —</option>
                        <option value="2">Feedback</option><option value="1">General Inquiry</option>
                        <option value="10">Report a Problem</option>
                        <option value="11">Access Issue</option>
                        <option value="p">Other</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Ticket Status</label>
                <div class="col-sm-10 col-xs-9">
                    <select class="form-control" name="survey_type">
                        <option value="" selected="selected">— Select Ticket Status—</option>
                        <option value="1">Normal</option>
                        <option value="1">Urgent</option>
                        <option value="10">Critical</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Ticket Description</label>
                <div class="col-sm-10 col-xs-9">
                    <textarea name="survey_des" class="form-control" id="" cols="20" rows="10"></textarea>
                </div>
            </div>
            <label class="col-lg-2 control-label">Related Site</label>
            <div class="col-lg-10">
                <select id="related_site" name="related_site[]" class="form-control m-bot15" multiple="multiple">
                    @foreach($sites as $site)
                        <option {{array_key_exists($site->site_id , $related_user) ? 'selected' : ''}} value="{{$site->site_id}}">{{$site->name}}</option>
                    @endforeach
                </select>
            </div>
            <label class="col-lg-2 control-label">Select Users</label>
            <div class="col-lg-10">
                <select id="related_user" name="related_user[]" class="form-control m-bot15" multiple="multiple">
                    @foreach($users as $user)
                        <option {{array_key_exists($user->user_id , $related_user) ? 'selected' : ''}} value="{{$user->id}}">{{$user->user_name}}</option>
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

            $('#related_site').select2({
                placeholder: "Select Related Sites",
                width: '100%',
                allowClear: true
            });
        });


    </script>
@stop