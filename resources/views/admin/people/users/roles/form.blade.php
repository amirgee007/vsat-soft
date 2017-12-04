{{ csrf_field() }}

<div class="form-group">
    <label class="col-sm-2 control-label" for="B-number">Name</label>
    <div class="col-sm-10">
        <input required type="text" name="name" class="form-control" value="{{@$role->name}}">
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label" for="B-number">Display Name</label>
    <div class="col-sm-10">
        <input required type="text" name="display_name" class="form-control" value="{{@$role->display_name}}">
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label" for="B-number">Description</label>
    <div class="col-sm-10">
        <input required type="text" name="description" class="form-control" value="{{@$role->description}}">
    </div>
</div>

<div class="form-group">
    <section class="panel">
        <div class="panel-body">
            <label class="col-lg-2 col-xs-3 control-label">Add Permissions</label>
            <div class="col-lg-10">
                <select required id="support_staff" name="permissions[]" class="form-control m-bot15" multiple="multiple">
                    @foreach($permissions as $perm)
                    <option {{array_key_exists($perm->name , $selected_perms) ? 'selected' : ''}} value="{{$perm->id}}">{{$perm->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </section>
</div>

