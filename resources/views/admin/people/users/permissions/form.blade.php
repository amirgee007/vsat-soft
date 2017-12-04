{{ csrf_field() }}

<div class="form-group">
    <label class="col-sm-2 control-label" for="B-number">Name</label>
    <div class="col-sm-10">
        <input required type="text" name="name" class="form-control" value="{{@$permission->name}}">
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label" for="B-number">Display Name</label>
    <div class="col-sm-10">
        <input required type="text" name="display_name" class="form-control" value="{{@$permission->display_name}}">
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label" for="B-number">Description</label>
    <div class="col-sm-10">
        <input required type="text" name="description" class="form-control" value="{{@$permission->description}}">
    </div>
</div>

