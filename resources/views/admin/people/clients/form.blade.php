{{ csrf_field() }}
<!-- General Info start-->
<div class="panel panel-primary form-group">
    <section class="panel">
        <header class="panel panel-heading col-sm-2 col-xs-3">
            <h5>General Info:</h5>
        </header>
        <div class="panel-content" style="clear: both;">
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label" for="C-number">Client ID Number</label>
                <div class="col-sm-10 col-xs-9">
                    <input  type="text" class="form-control" id="C-number" disabled
                            value="{{@$client->client_number ?? $data['client_no']}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label" for="O-name">Organization Name</label>
                <div class="col-sm-10 col-xs-9">
                    <input name="org_name" value="{{@$client->org_name}}" type="text" class="form-control" id="O-name" placeholder="Organization Name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Client Address</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">Country</label>
                    <div class="col-sm-4 col-xs-3">
                        <select name="country" value="{{@$client->country}}" class="form-control m-bot15 country">
                        </select>
                    </div>
                    <label class="col-sm-2 col-xs-3 control-label">City</label>
                    <div class="col-sm-4 col-xs-3">
                        <select name="city"  value="{{@$client->city}}" class="form-control m-bot15 city">
                        </select>
                    </div>
                    <label class="col-sm-2 col-xs-3 control-label">Street</label>
                    <span class="col-sm-10 col-xs-9">
               <input name="street" value="{{@$client->street}}" type="text" class="form-control"
                      placeholder="Street">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Area</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="area" value="{{@$client->area}}" type="text" class="form-control" placeholder="Area">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">State</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="state" value="{{@$client->state}}" type="text" class="form-control" placeholder="State">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Zip Code</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="zip_code" value="{{@$client->zip_code}}" type="text" class="form-control"
                      placeholder="Zip Code">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">P.O.Box</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="po_box" value="{{@$client->po_box}}" type="text" class="form-control"
                      placeholder="P.O.Box">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Office Tel</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="official_tel" value="{{@$client->official_tel}}" type="tel" class="form-control"
                      placeholder="Office Tel">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Fax No</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="fax_no" value="{{@$client->fax_no}}" type="tel" class="form-control" placeholder="Fax No">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="email" value="{{@$client->email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Website</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="website" value="{{@$client->website}}" type="text" class="form-control"
                      placeholder="Website">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Working Days</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="working_days" value="{{@$client->working_days}}" type="text" class="form-control"
                      placeholder="Working Days">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Working Times</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="working_times" value="{{@$client->working_times}}" type="tel" class="form-control"
                      placeholder="Working Times">
               </span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Client Logo</label>
                <div class="col-lg-offset-2 col-lg-10">
                    <img src="img/noimage.gif" alt=""/>
                    <input class="btn btn-default" type="file" name="client_logo">
                </div>
            </div>
        </div>
    </section>
</div>
<!-- General Info end-->
<!-- Client Contacts start-->
<div class="panel panel-primary form-group">
    <section class="panel">
        <header class="panel panel-heading col-sm-2 col-xs-3">
            <h5>Client Contacts:</h5>
        </header>
        <div class="panel-content" style="clear: both;">
            <!-- Technical Contacts start-->
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Technical</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-8 col-xs-9 text-center">1st Contact</label>
                    <label class="col-sm-4 col-xs-3 text-center">2nd Contact</label>
                </div>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">Name</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="tech_1st_name" value="{{@$client->tech_1st_name}}" type="text" class="form-control" placeholder="Name">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Name</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="tech_2nd_name" value="{{@$client->tech_2nd_name}}" type="text" class="form-control" placeholder="Name">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Position</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="tech_1st_position" value="{{@$client->tech_1st_position}}" type="text" class="form-control"
                      placeholder="Position">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Position</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="tech_2nd_position" value="{{@$client->tech_2nd_position}}" type="text" class="form-control"
                      placeholder="Position">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Cell</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="tech_1st_cell" value="{{@$client->tech_1st_cell}}" type="tel" class="form-control" placeholder="Cell">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Cell</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="tech_2nd_cell" value="{{@$client->tech_2nd_cell}}" type="tel" class="form-control" placeholder="Cell">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="tech_1st_email" value="{{@$client->tech_1st_email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="tech_2nd_email" value="{{@$client->tech_2nd_email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                </div>
            </div>
            <!-- Technical Contacts end-->
            <!-- Logistics Contacts start-->
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Logistics</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">Name</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="logist_1st_name" value="{{@$client->logist_1st_name}}" type="text" class="form-control" placeholder="Name">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Name</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="logist_2nd_name" value="{{@$client->logist_2nd_name}}" type="text" class="form-control" placeholder="Name">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Position</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="logist_1st_position" value="{{@$client->logist_1st_position}}" type="text" class="form-control"
                      placeholder="Position">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Position</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="logist_2nd_position" value="{{@$client->logist_2nd_position}}" type="text" class="form-control"
                      placeholder="Position">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Cell</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="logist_1st_cell" value="{{@$client->logist_1st_cell}}" type="tel" class="form-control" placeholder="Cell">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Cell</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="logist_2nd_cell" value="{{@$client->logist_2nd_cell}}" type="tel" class="form-control" placeholder="Cell">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="logist_1st_email" value="{{@$client->logist_1st_email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="logist_2nd_email" value="{{@$client->logist_2nd_email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                </div>
            </div>
            <!-- Logistics Contacts end-->
            <!-- Finance Contacts start-->
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Finance</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">Name</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="finance_1st_name" value="{{@$client->finance_1st_name}}" type="text" class="form-control" placeholder="Name">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Name</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="finance_2nd_name" value="{{@$client->finance_2nd_name}}" type="text" class="form-control" placeholder="Name">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Position</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="finance_1st_position" value="{{@$client->finance_1st_position}}" type="text" class="form-control"
                      placeholder="Position">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Position</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="finance_2nd_position" value="{{@$client->finance_2nd_position}}" type="text" class="form-control"
                      placeholder="Position">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Cell</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="finance_1st_cell" value="{{@$client->finance_1st_cell}}" type="tel" class="form-control" placeholder="Cell">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Cell</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="finance_2nd_cell" value="{{@$client->finance_2nd_cell}}" type="tel" class="form-control" placeholder="Cell">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="finance_2nd_email" value="{{@$client->finance_2nd_email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="finance_2nd_email" value="{{@$client->finance_2nd_email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                </div>
            </div>
            <!-- Finance Contacts end-->
            <!-- Management Contacts start-->
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Management</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">Name</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="management_1st_name" value="{{@$client->management_1st_name}}" type="text" class="form-control" placeholder="Name">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Name</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="management_2nd_name" value="{{@$client->management_2nd_name}}" type="text" class="form-control" placeholder="Name">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Position</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="management_1st_position" value="{{@$client->management_1st_position}}" type="text" class="form-control"
                      placeholder="Position">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Position</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="management_2nd_position" value="{{@$client->management_2nd_position}}" type="text" class="form-control"
                      placeholder="Position">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Cell</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="management_1st_cell" value="{{@$client->management_1st_cell}}" type="tel" class="form-control" placeholder="Cell">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Cell</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="management_2nd_cell" value="{{@$client->management_2nd_cell}}" type="tel" class="form-control" placeholder="Cell">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="management_1st_email" value="{{@$client->management_1st_email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="management_2nd_email" value="{{@$client->management_2nd_email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                </div>
            </div>
            <!-- Management Contacts end-->
            <!-- Escalation Contacts start-->
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Escalation</label>
                <div class="col-sm-10 col-xs-9">
                    <label class="col-sm-2 col-xs-3 control-label">Name</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="escalation_name" value="{{@$client->escalation_name}}" type="text" class="form-control" placeholder="Name">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Position</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="escalation_position" value="{{@$client->escalation_position}}" type="text" class="form-control"
                      placeholder="Position">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Cell</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="escalation_cell" value="{{@$client->escalation_cell}}" type="tel" class="form-control" placeholder="Cell">
               </span>
                    <label class="col-sm-2 col-xs-3 control-label">Email</label>
                    <span class="col-sm-4 col-xs-3">
               <input name="escalation_email" value="{{@$client->escalation_email}}" type="email" class="form-control"
                      placeholder="Email">
               </span>
                </div>
            </div>
            <!-- Escalation Contacts end-->
            <!-- Comments/Special Instructions start-->
            <div class="form-group">
                <label class="col-sm-2 col-xs-3 control-label">Comments/Special Instructions</label>
                <div class="col-sm-10 col-xs-9">
                    <textarea name="escalation_comments" class="col-sm-12" cols="20" rows="2">{{@$client->escalation_comments}}</textarea>
                </div>
            </div>
            <!-- Comments/Special Instructions end-->
        </div>
    </section>
</div>
<!-- Client Contacts end-->
<div class="form-group col-sm-12">
    <section class="panel">
        <header class="panel-heading col-sm-12">
            <h5 class="col-sm-10 col-xs-9">All Above information's filled & confirmed by:</h5>
        </header>
        <div class="panel-body">
            <label class="col-sm-2 col-xs-3 control-label">Name</label>
            <span class="col-sm-4 col-xs-3">
         <input name="confirm_by_name" value="{{@$client->confirm_by_name}}" type="text" class="form-control" placeholder="Name">
         </span>
            <label class="col-sm-2 col-xs-3 control-label">Designation</label>
            <span class="col-sm-4 col-xs-3">
         <input name="confirm_by_designation" value="{{@$client->confirm_by_designation}}" type="text" class="form-control" placeholder="Designation">
         </span>
            <label class="col-sm-2 col-xs-3 control-label">Signature</label>
            <span class="col-sm-10 col-xs-9">
         <textarea name="confirm_by_signature" class="col-xs-12 sign" rows="1">{{@$client->confirm_by_signature}}</textarea>
         </span>
        </div>
    </section>
</div>
<div class="form-group">
    <label class="col-lg-2 control-label">Status</label>
    <div class="col-lg-10">
        <select name="confirm_by_status" class="form-control m-bot15">
            <option>Enable</option>
            <option>Disable</option>
        </select>
    </div>
</div>
<div class="form-group">
    <section class="panel">
        <div class="panel-body">
            <label class="col-lg-2 col-xs-3 control-label">Add User</label>
            <div class="col-lg-8 col-xs-7">
                <select name="" class="form-control m-bot15" id="related_user">
                    <option>Mahmood</option>
                    <option>Mohammad</option>
                </select>
            </div>
        </div>
    </section>
</div>