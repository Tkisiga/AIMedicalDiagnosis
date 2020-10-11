<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themetrace.com/demo/chain/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Mar 2020 04:30:31 GMT -->
@include('admin_layouts.styling')

    <body>
        
    @include('admin_layouts.top_navbar')
        
        <section>
            <div class="mainwrapper">
            @include('admin_layouts.sidebar')
                
                <div class="mainpanel">
                    
                    
                    <div class="contentpanel">
                        @foreach($patients as edit_patients)
                    <form action="/change-patients/{{edit_patients->id}}" method="get">    
                        
                        <div class="tab-pane" id="Patient info">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Patient's No:</label>
                                <div class="col-sm-8">
                                    <input type="text" name="patientNo" class="form-control" />
                                </div>
                            </div><!-- form-group -->

                            <div class="form-group">
                                <label class="col-sm-4 control-label">First Name:<span class="asterisk">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="firstname" value="{{$edit_patients->first_name}}"  class="form-control" title="Your name is required!" />
                                </div>
                            </div><!-- form-group -->

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Last Name:<span class="asterisk">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="lastname" value="{{$edit_patients->last_name}}"  class="form-control" title="Your name is required!"/>
                                </div>
                            </div><!-- form-group -->

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Other Names:</label>
                                <div class="col-sm-8">
                                    <input type="text" value="{{$edit_patients->other_name}}"  name="othername" class="form-control" />
                                </div>
                            </div><!-- form-group -->

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Age:<span class="asterisk">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="age" value="{{$edit_patients->age}}"  class="form-control" title="Your age is required!" required/>
                                </div>
                            </div><!-- form-group -->

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Gender:<span class="asterisk">*</span></label>
                                <div class="col-sm-8">
                                    <select id="select-search-hide" value="{{$edit_patients->gender}}"  data-placeholder="Choose One" class="width300" required>
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
                                    <input type="text" name="address" class="form-control" />
                                </div>
                            </div><!-- form-group -->

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Contact:<span class="asterisk">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" name="contact" value="{{$edit_patients->phone_number}}"  class="form-control" title="The contact is required!" required/>
                                </div>
                            </div><!-- form-group -->
                        
                            
                        </div><!-- tab-pane -->
                    </form> 
                    </div>

        </section>


        @include('admin_layouts.javascript')
    </body>

<!-- Mirrored from themetrace.com/demo/chain/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Mar 2020 04:30:31 GMT -->
</html>
