{{ csrf_field() }}
<div class="panel panel-primary form-group">
    <section class="panel">
        <div class="panel-content" style="clear: both;">
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Subject</label>
                <div class="col-sm-10 col-xs-9">
                    <input type="text" name="subject" value="" class="form-control" placeholder="Subject">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Ticket Type</label>
                <div class="col-sm-10 col-xs-9">
                    <select class="form-control" name="type">
                        <option selected hidden>Select Type</option>
                        <option value="technical">Technical</option>
                        <option value="billing">Billing</option>
                        <option value="customer_support">Customer Support</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Ticket Priority</label>
                <div class="col-sm-10 col-xs-9">
                    <select class="form-control" name="priority">
                        <option selected hidden>Select Priority</option>
                        <option value="normal">Low</option>
                        <option value="urgent">Normal</option>
                        <option value="high">High</option>
                        <option value="critical">Critical</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Related Site</label>
                <div class="col-sm-10 col-xs-9">
                    <select  class="form-control" name="site_id">
                        <option value="" selected hidden>Select Site</option>
                    @foreach($sites as $site)
                            <option value="{{$site->site_id}}">{{$site->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Ticket Description</label>
                <div class="col-sm-10 col-xs-9">
                    <textarea name="description" class="form-control" id="" cols="20" rows="10"></textarea>
                </div>
            </div>
        </div>
    </section>
</div>
@section('footer_scripts')

    <script>
        $(function () {





        });
    </script>
@stop