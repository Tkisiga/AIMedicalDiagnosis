@include('admin_layouts.styling')
<div class="row">
    <div class="col-md-6">
        <form class="form-horizontal">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-btns">
                        <a href="#" class="panel-minimize tooltips" data-toggle="tooltip" title="Minimize Panel"><i class="fa fa-minus"></i></a>
                        <a href="#" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                    </div><!-- panel-btns -->
                    <h4 class="panel-title">Patient Registration Form</h4>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Patient's No:</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" />
                        </div>
                    </div><!-- form-group -->

                    <div class="form-group">
                        <label class="col-sm-4 control-label">First Name:<span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" title="Your name is required!" />
                        </div>
                    </div><!-- form-group -->

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Last Name:<span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" title="Your name is required!"/>
                        </div>
                    </div><!-- form-group -->

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Other Names:</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" />
                        </div>
                    </div><!-- form-group -->

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Date of birth:></label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" >
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div><!-- input-group -->
                    </div><!-- form-group -->

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Age:<span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" title="Your age is required!" required/>
                        </div>
                    </div><!-- form-group -->

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Gender:<span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <select id="select-search-hide" data-placeholder="Choose One" class="width300" required>
                                <option value="AK">Male</option>
                                    <option value="HI">Female</option>
                        </div>
                    </div><!-- form-group -->

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Visit Date:<span class="asterisk">*</span></label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-multiple" title="The visit date is required!" required>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div><!-- input-group -->
                    </div><!-- form-group -->

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Address:</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" />
                        </div>
                    </div><!-- form-group -->

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Contact:<span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" title="The contact is required!" required/>
                        </div>
                    </div><!-- form-group -->
                
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Next of kin:<span class="asterisk">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" title="Your next of kin is required!" required/>
                        </div>
                    </div><!-- form-group -->

                </div><!-- panel-body -->

                <div class="panel-footer">
                    <button class="btn btn-primary mr5">Submit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </div><!-- panel-footer -->
            </div><!-- panel-default -->
        </form>
    </div><!-- col-md-6 -->
</div><!-- row -->



@include('admin_layouts.javascript')