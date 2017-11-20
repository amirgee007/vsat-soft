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
                                    <img src="{{  asset((@$tool->tool_img !='')? 'uploads/tools_equipments/'.$tool->tool_img :'img/noimage.gif')}}" alt="Tool Image" width="300" height="250"/>
                                    <input class="btn btn-default" type="file" name="tool_img">
                                </div>
                            </div>