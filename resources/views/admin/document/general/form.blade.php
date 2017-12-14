{{ csrf_field() }}
<section class="panel">
    <div class="panel-content" style="clear: both;">
        <div class="form-group">
            <label class="col-sm-2 col-xs-3 control-label">File Name</label>
            <div class="col-sm-10 col-xs-9">
                <input type="text" maxlength="40" required name="file_name" value="{{ @$doc->file_name  }}" class="form-control" placeholder="iDirect Web iSite User Guide iDX 33 RevC.pdf">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 col-xs-3 control-label">File Upload</label>
            <div class="col-sm-10 col-xs-9">
                <input type="file" class="btn btn-default" @if(!isset($doc))  required @endif  name="file_upload_name" placeholder="Select File">
            </div>
        </div>
    </div>
</section>